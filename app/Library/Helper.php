<?php

namespace App\Library;

use Mail;
use Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Support\Facades\Route;
use Session;
use View;

class Helper {

    public static function returnView($viewname, $data,$redirectTo=null) {
      
        if (isset($_REQUEST['response_type'])) {
            if ($_REQUEST['response_type'] == 'json') {
                return $data;
            }
        } else if(isset($viewname)) {
              
            return view($viewname)->with($data);
        }else if(isset($redirectTo)){
            return redirect()->route($redirectTo);
        }else{
            return $data;
        }
    }

    public static function withoutViewSendMail($to, $sub, $body) {
        Mail::send([], [], function ($message) use($to, $sub, $body) {
            $message->to($to)
                    ->subject($sub)
                    ->setBody($body);
        });
    }

    public static function getValidation($validation, $data) {
        $validator = Validator::make(Input::all(), $validation->rules);
        if ($validator->fails()) {
            return $validator->errors()->all();
        } else {
            return 1;
        }
    }


    public static function convertCurrency($amount, $from, $to) {
        $url = "https://www.google.com/finance/converter?a=$amount&from=$from&to=$to";
        $data = file_get_contents($url);
        preg_match("/<span class=bld>(.*)<\/span>/", $data, $converted);
        $converted = preg_replace("/[^0-9.]/", "", $converted[1]);
        return round($converted, 3);
    }

}

?>