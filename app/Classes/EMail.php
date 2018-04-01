<?php
/**
 * Created by PhpStorm.
 * User: Kesara
 * Date: 3/29/2018
 * Time: 8:19 PM
 */

namespace App\Classes;


class EMail
{
    public static function getMail($content){
        $regex = '/[a-z0-9]+[_a-z0-9\.-]*[a-z0-9]+@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})/i';
        preg_match_all($regex, $content, $match);
        $results = array_map('strtolower', array_unique($match[0]));
        return $results;
    }
}