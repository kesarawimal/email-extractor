<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BMailController extends Controller
{
    public static function findMails() {
        $mails = "8500+ ALAMAT EMAIL:::: Daftar Alamat Surat Elektronik Gmail ...
https://www.slideshare.net/.../8500-alamat-email-daftar-alamat-surat...
Translate this page
Dec 3, 2016 - 8500+ ALAMAT EMAIL:::: Daftar Alamat Surat Elektronik Gmail, YAHOOMAIL,HOTMAIL,.... 1. dediballabo_1460@yahoo.co.id teja.ofteviza@gmail.com hafidzoh.sholehah@gmail.com arianto.petruk@gmail.com dedigalago_1460@yahoo.co.id bimba.loji.bogor@gmail.com salim.amarullah@gmail.com ...
learningmachine532@gmail.com | LinkedIn
https://www.linkedin.com/company/learningmachine532-gmail-com
Learn about working at learningmachine532@gmail.com. Join LinkedIn today for free. See who you know at learningmachine532@gmail.com, leverage your professional network, and get hired.";
        $regex = '/([a-z0-9_\.\-])+\@(([a-z0-9\-])+\.)+([a-z0-9]{2,4})+/i';
        preg_match_all($regex, $mails, $m);
        return isset($m[0]) ? $m[0] : array ();
    }
}
