<?php

namespace App\Http\Controllers;

use App\Classes\EMail;
use App\Classes\HeadlessBrowser;
use App\Classes\URL;
use App\Domain;
use App\Mail;
use App\Path;
use Illuminate\Http\Request;

class MailController extends Controller
{
    public static function mail(Request $request){
        set_time_limit(0);
        $already_crawled = array();
        $have_to_crawl = array();
        $mail_array = array();

        $have_to_crawl[] = $request->input('domain');
        if (substr($have_to_crawl[0], 0, 5) != "https" && substr($have_to_crawl[0], 0, 4) != "http") {
            $have_to_crawl[0] = "http://" . $have_to_crawl[0];
        }
        //save domain
        $domain = Domain::firstOrCreate(['domain' => parse_url($have_to_crawl[0])['host']]);

        for ($i = 0; $i < count($have_to_crawl); $i++) {
            if (array_key_exists($i, $have_to_crawl)) {
                $received_content = HeadlessBrowser::getContent($have_to_crawl[$i]);

                //save paths
                $path = Path::firstOrCreate(
                    ['domain_id' => $domain->id], ['path' => $have_to_crawl[$i]]
                );

                $received_mails = EMail::getMail($received_content);
                foreach ($received_mails as $received_mail) {
                    if (!in_array($received_mail, $mail_array)) {
                        $mail_array[] = $received_mail;
                    }
                    //save mails
                    $mail = Mail::firstOrCreate(['mail' => $received_mail]);
                    $path->mailPaths()->attach($mail->id);
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
