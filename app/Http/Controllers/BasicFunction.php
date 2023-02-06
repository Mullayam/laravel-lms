<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Site_Settings;

class BasicFunction extends Controller
{

        //vedio id
       public static function videoId(){
            $chars = "abcdefghjkmnpqrstwxyz";
            $chars .= "ABCDEFGHKLMNOPQRSTWXYZ-s";
            $chars .="0123456789_";

            while(1){
                $key = '';
                srand((double)microtime()*1000000);
                for($i = 0; $i < 16; $i++){
                    $key .= substr($chars,(rand()%(strlen($chars))), 1);
                }
                break;
            }
            return $key;
        }
        //user_secret Key
        public static function secret_key(){
            $chars = "abcdefghjkmnpqrstwxyz";
            $chars .= "ABCDEFGHKLMNOPQRSTWXYZ";
            $chars .= "0123456789";
            while(1){
                $key = '';
                srand((double)microtime()*1000000);
                for($i = 0; $i < 30; $i++){
                    $key .= substr($chars,(rand()%(strlen($chars))), 1);
                }
                break;
            }
            return $key;
        }
        //course id
        public static function generateRandomID() {

            $required_length = 6;
            $limit_one = rand();
            $limit_two = rand();
            $randomID = substr(uniqid(sha1(md5(rand(min($limit_one, $limit_two), max($limit_one, $limit_two))))), 0, $required_length);
            return $randomID;
        }
        //product_id
        public static function prod(){
            $rt=rand(11111,99999);
        //subject id
        $cleanNumber = preg_replace( '/[^10-9999]/', '', microtime(false) );
        $subd = base_convert($cleanNumber, 10, 36);
        $subd = base_convert(time(), 10, 36);
        return $subd;
        }

         public static function genrateUsername(){
            return "learn_".rand(100001,999999);
         }

        public static function settings($id)
        {
            $get = Site_Settings::findorFail($id)->get();
            $value = $get[$id-1]['content'];
             return $value;
        }
        public static function RemoveToken($From)
        {
          return  array_slice($From, 1);
        }
}
