<?php

namespace App\Http\Controllers;

use App\Classes\SearchEngine;

class SearchController extends Controller
{
    public static function search()
    {
        $keyword = "forum facebok";
        return SearchEngine::search($keyword);
    }
}
