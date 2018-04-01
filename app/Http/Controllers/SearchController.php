<?php

namespace App\Http\Controllers;

use App\Classes\SearchEngine;

class SearchController extends Controller
{
    public static function search()
    {
        $keyword = "hi there";
        return SearchEngine::aol($keyword);
    }
}
