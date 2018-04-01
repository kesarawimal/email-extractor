<?php
/**
 * Created by PhpStorm.
 * User: Kesara
 * Date: 3/29/2018
 * Time: 8:20 PM
 */

namespace App\Classes;


class URL
{
    public static function getURL($content, $url){
        $doc = new \DOMDocument();
        @$doc->loadHTML($content);

        $linklist = $doc->getElementsByTagName("a");

        $url_array = array();
        foreach ($linklist as $link) {
            $l = $link->getAttribute('href');

            //well formatting urls
            if (substr($l, 0, 1) == "/" && substr($l, 0, 2) != "//") {
                $l = parse_url($url)['scheme'] . "://" . parse_url($url)['host'] . $l;
            } elseif (substr($l, 0, 2) == "//") {
                $l = parse_url($url)['scheme'] . ":" . $l;
            } elseif (substr($l, 0, 2) == "./") {
                $l = parse_url($url)['scheme'] . "://" . parse_url($url)['host'] . dirname(parse_url($url)['path']) . substr($l, 1);
            } elseif (substr($l, 0, 3) == "../") {
                $l = parse_url($url)['scheme'] . "://" . parse_url($url)['host'] . "/" . $l;
            } elseif (substr($l, 0, 11) == "javascript:") {
                continue;
            } elseif (substr($l, 0, 5) != "https" && substr($l, 0, 4) != "http") {
                $l = parse_url($url)['scheme'] . "://" . parse_url($url)['host'] . "/" . $l;
            }
            $path = isset(parse_url($l)['path']) ? pathinfo(parse_url($l)['path'], PATHINFO_EXTENSION) : "";
            if ($path == "" || $path == "html" || $path == "php" || $path == "asp") {
                if (filter_var($l, FILTER_VALIDATE_URL) !== false) {
                    $url_array[] = strtok($l, '#');
                }
            }
        }
        return array_unique($url_array);
    }

    public static function getDomainURL($content, $url) {
        $url_array = array();
        $domains = self::getURL($content, $url);
        foreach ($domains as $domain) {
            if (parse_url($url)['host'] == parse_url($domain)['host']) {
                $url_array[] = $domain;
            }
        }
        return $url_array;
    }
}