<?php

namespace App\Http\Controllers;

use App\Classes\HeadlessBrowser;
use App\Classes\Mail;
use App\Classes\URL;

class MailController extends Controller
{
    public static function mail(){
        $already_crawled = array();
        $have_to_crawl = array();
        $mail_array = array();
        $have_to_crawl[] = "https://www.000webhost.com/";

        for ($i = 0; $i < count($have_to_crawl); $i++) {
            if (array_key_exists($i, $have_to_crawl)) {
                $received_content = HeadlessBrowser::getContent($have_to_crawl[$i]);
                $received_mails = Mail::getMail($received_content);
                foreach ($received_mails as $received_mail) {
                    if (!in_array($received_mail, $mail_array)) {
                        $mail_array[] = $received_mail;
                    }
                }
                $received_urls = URL::getDomainURL($received_content, $have_to_crawl[$i]);
                foreach ($received_urls as $received_url) {
                    if (!in_array($received_url, $have_to_crawl)) {
                        $have_to_crawl[] = $received_url;
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
}
