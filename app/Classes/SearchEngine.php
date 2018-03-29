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
        return array_filter($url);
    }
}