<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cards;
use Illuminate\Support\Facades\DB;


class EncrypController extends Controller
{
    function encrypt($data, $key)
{
    $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length('aes-256-cbc'));
    $encrypted=openssl_encrypt($data, "aes-256-cbc", $key, 0, $iv);
    // return the encrypted string with $iv joined 
    return base64_encode($encrypted."::".$iv);
}

    function tarjeta(Request $request){
    $id = $request-> id; 
    $card = $request->card;
    $cvv = $request->cvv;
    $nip = $request->nip;

    function encrypt($data, $key)
{
    $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length('aes-256-cbc'));
    $encrypted=openssl_encrypt($data, "aes-256-cbc", $key, 0, $iv);
    // return the encrypted string with $iv joined 
    return base64_encode($encrypted."::".$iv);
}
    $string = $nip;
    $key= $card;
    $varnip = encrypt($string, $key);
    $cards = new cards;
    $cards-> id = $request->id;
    $cards-> card = $request ->card;
    $cards-> cvv = $request ->cvv;
    $cards-> nip = $varnip;

    $cards->save();
    return back(); 
    
    }

    function desencriptar(Request $request){
     
        $card = $request->card;
        $cvv = $request->cvv;
        $nip = $request->nip;

        $consulta = DB::table('cards')->where('card','=',$card )->value('nip');
       
    function decrypt($data,$key)
        {
    list($encrypted_data, $iv) = explode('::', base64_decode($data), 2);
    return openssl_decrypt($encrypted_data, 'aes-256-cbc', $key, 0, $iv);
        }
        
        $key = $card;
        $var=decrypt($consulta, $key);
        echo "<script>alert('la desencriptacion es: ' + $var)</script>";
        //return redirect()->route('home');

        
    }
   
}
