<?php
/**
 * Created by PhpStorm.
 * User: Kesara
 * Date: 3/30/2018
 * Time: 12:32 AM
 */

namespace App\Classes;


class SearchEngine
{
    public static function duckDuckGo($keyword) {
        $search = "https://duckduckgo.com/?q=".urlencode($keyword)."&ia=web";
        $content = HeadlessBrowser::getContent($search);

        $list = URL::getURL($content, $search);

        $remove = function ($l) {
            if (strpos($l, 'duckduckgo') !== false || strpos($l, 'duck.co') !== false || strpos($l, 'spreadprivacy.com') !== false || strpos($l, 'donttrack.us') !== false) {
                unset($l);
            } else {
                return $l;
            }
        };
        $url = array_map($remove, $list);
        return array_values(array_filter($url));
    }

    public static function bing($keyword) {
        $search = "https://www.bing.com/search?q=".urlencode($keyword);
        $content = HeadlessBrowser::getContent($search);

        $list = URL::getURL($content, $search);

        $remove = function ($l) {
            if (strpos($l, 'bing.com') !== false || strpos($l, 'microsoft.com') !== false) {
                unset($l);
            } else {
                return $l;
            }
        };
        $url = array_map($remove, $list);
        return array_values(array_filter($url));
    }

    public static function yahoo($keyword) {
        $search = "https://search.yahoo.com/search?p=".urlencode($keyword);
        $content = HeadlessBrowser::getContent($search);
        $list = URL::getURL($content, $search);

        $remove = function ($l) {
            if (strpos($l, 'yahoo') !== false || strpos($l, 'tumblr.com') !== false || (bool)ip2long(@parse_url($l)['host']) !== false) {
                unset($l);
            } else {
                return $l;
            }
        };
        $url = array_map($remove, $list);
        return array_values(array_filter($url));
    }

    public static function aol($keyword) {
        $search = "https://search.aol.com/aol/search?q=".urlencode($keyword);
        $content = HeadlessBrowser::getContent($search);
        $list = URL::getURL($content, $search);

        $remove = function ($l) {
            if (strpos($l, 'aol.com') !== false || strpos($l, 'tumblr.com') !== false || (bool)ip2long(@parse_url($l)['host']) !== false) {
                unset($l);
            } else {
                return $l;
            }
        };
        $url = array_map($remove, $list);
        return array_values(array_filter($url));
    }

    public static function ask($keyword) {
        $search = "https://www.ask.com/web?q=".urlencode($keyword);
        $content = HeadlessBrowser::getContent($search);
        $list = URL::getURL($content, $search);

        $remove = function ($l) {
            if (strpos($l, 'yahoo') !== false || strpos($l, 'tumblr.com') !== false || (bool)ip2long(@parse_url($l)['host']) !== false) {
                unset($l);
            } else {
                return $l;
            }
        };
        $url = array_map($remove, $list);
        return array_values(array_filter($url));
    }

}