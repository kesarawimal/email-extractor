<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use JonnyW\PhantomJs\Client;

class MailController extends Controller
{
    public static function mail(){
        $already_crawled = array();
        $have_to_crawl = array();
        $mail_array = array();
        $have_to_crawl[] = "https://www.konekt.lk/";

        for ($i = 0; $i < count($have_to_crawl); $i++) {
            if (array_key_exists($i, $have_to_crawl)) {
                $received_content = self::getContent($have_to_crawl[$i]);
                $mail_array[] = self::getMail($received_content);
                $received_urls = self::getURL($received_content, $have_to_crawl[$i]);
                foreach ($received_urls as $received_url) {
                    if (!in_array($received_url,$already_crawled)) {
                        if (!in_array($received_url, $have_to_crawl)) {
                            $have_to_crawl[] = $received_url;
                        }
                    }
                }
                if (!in_array($have_to_crawl[$i], $already_crawled)) {
                    $already_crawled[] = $have_to_crawl[$i];
                }
//                unset($have_to_crawl[$i]);
            }
        }
        var_dump($have_to_crawl);
        var_dump($mail_array);
    }

    public static function getContent($url){
        $client = Client::getInstance();
        $client->getEngine()->setPath( base_path() . '\bin\phantomjs.exe');
        $request = $client->getMessageFactory()->createRequest($url, 'GET');
        $response = $client->getMessageFactory()->createResponse();

        // Send the request
        $client->send($request, $response);

        $content = $response->getContent();

        return $content;
    }

    public static function getMail($content){
        $string = preg_replace('/[!#$%^&*()+=\_\[\]\';,\/{}|":<>?~\\\\]/'," ",$content);
        $string = preg_split('/\s+/',$string);
        $email = array();
        foreach ($string as $str) {
            if (filter_var($str, FILTER_VALIDATE_EMAIL)) {
                $email[] = $str;
            }
        }
        return array_unique($email);
    }

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
            if (parse_url($url)['host'] == parse_url($l)['host']) {
                $path = pathinfo(parse_url($l)['path'], PATHINFO_EXTENSION);
                if ($path == "" || $path == "html" || $path == "php" || $path == "asp") {
                    $url_array[] = $l;
                }
            }
        }
        return array_unique($url_array);
    }
}
