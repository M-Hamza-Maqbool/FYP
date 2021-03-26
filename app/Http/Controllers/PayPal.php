<?php

namespace App\Http\Controllers;

use Darryldecode\Cart\Validators\CartItemValidator;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;
use Srmklive\PayPal\Services\ExpressCheckout;

class PayPal extends Controller
{
    public function getExpresscheCkout(){
        $cart = \Cart::session(auth()->id());
    //     $chckoutData=[
    //         dd()
        
    // ];
     $Cartitems=array_map(function($item){
         return[
             'name' => $item['name'],
             'price' => $item['name'],
             'qty' => $item['quantity'],
         ];
     },$cart->getContent()->toarray(),);
     $checkoutdata=[
'items'=> $Cartitems,
'return_url' => route('paypal.Success'),
'cancel_url'=>route('paypal.cencel'),
'invoice_description'=>"order descreption",
'invoice_id'=>uniqid(),
'total'=> $cart->getTotal()
     ];
     $provider= new ExpressCheckout();
        $response= $provider->setExpressCheckout($checkoutdata);   
        dd($response);   

    }

public function cencel()
    {
        dd('Payment Failed');
    }

}
