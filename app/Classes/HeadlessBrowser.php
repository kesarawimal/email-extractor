<?php
/**
 * Created by PhpStorm.
 * User: Kesara
 * Date: 3/29/2018
 * Time: 8:16 PM
 */

namespace App\Classes;

use Illuminate\Http\Request;
use JonnyW\PhantomJs\Client;

class HeadlessBrowser
{
    public static function getContent($url){
        $client = Client::getInstance();
        $client->getEngine()->setPath( base_path() . '\bin\phantomjs.exe');
        $request = $client->getMessageFactory()->createRequest($url, 'GET');
        $response = $client->getMessageFactory()->createResponse();

        // Send the request
        $client->send($request, $response);

        return $response->getContent();
    }
}