<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Mockery\Exception;

class BDomainController extends Controller
{
    public static function findURL($list) {
//        $list = '';
        $regex = '/((http|https)\:\/\/)?[a-zA-Z0-9\.\/\?\:@\-_=#]+\.([a-zA-Z0-9\&\.\/\?\:@\-_=#])*/';
        preg_match_all($regex, $list, $match);
        $results = array_map('strtolower', array_unique($match[0]));
        var_dump($results);
    }

    public function index(){
        return view('uploadfile');
    }

    public function showUploadFile(Request $request){
        $file = $request->file('domains');
        $destinationPath = 'domains';
        $file->storeAs($destinationPath,$file->getClientOriginalName());

        $parse = self::findURL(self::fileRead($file->getClientOriginalName()));
        Excel::create('Customers', function($excel) use ($parse) {
            $excel->setTitle('Exported Customer Base');
            $excel->setCreator('Admin')->setCompany('TonerConnect');
            $excel->sheet('Customers', function ($sheet) use ($parse) {
            $sheet->setOrientation('landscape');
            $sheet->fromArray($parse, NULL, 'A3');
            });
        })->download('xlsx');
    }

    public static function fileRead($filename) {
        try
        {
            $contents = File::get("storage/app/domains/".$filename);
            return $contents;
        }
        catch (Exception $exception)
        {
            die("The file doesn't exist");
        }
    }
}
