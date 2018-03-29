<?php

namespace App\Http\Controllers;

use App\Mail;
use App\Path;
use Illuminate\Http\Request;
use JonnyW\PhantomJs\Client;

class SearchController extends Controller
{
    public static function search()
    {
        $keyword = "cat";
        $search = "https://duckduckgo.com/?q=".$keyword;
        $content = MailController::getContent($search);

        var_dump(MailController::getURL($content, $search));
    }
}
