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
}