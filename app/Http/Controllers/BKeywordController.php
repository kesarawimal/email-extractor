<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BKeywordController extends Controller
{
    public static function findKeywords() {
        $keywords = "
    Explode the array by spaces
    Remake the string from the array
    Explode it again for new lines , Remake the string from the array
    Explode it again for new lines
    MySQL escape the individual elements.
";
        $words = str_replace(",","\n",trim($keywords));
        $words = explode("\n", $words);
        $results = array_map('trim',$words);
        $results = array_map('strtolower', array_unique($results));
        var_dump($results);
    }
}
