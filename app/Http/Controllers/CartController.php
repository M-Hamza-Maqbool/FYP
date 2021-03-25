<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// use App\Http\Controllers\Cart;
class CartController extends Controller
{
   public function add_Cart($productid){
    $Data=DB::table('Products')->where('id',$productid)->first();
        \Cart::session(auth()->id())->add(array(
            'id' => $Data->id,
            'name' => $Data->name,
            'price' => $Data->price,
            'quantity' => 4,
            'attributes' => array(),
            'associatedModel' => $productid
        ));
        
        return redirect()->route('cart.index');
    }
   public function index(){
     $cartitems=\Cart::session(auth()->id())->getContent();
     return view('cart.index',compact("cartitems"));
    }
  public function  cart_destroy($itemid){
    \Cart::session(auth()->id())->remove($itemid);
    return back();
  }
  public function update($rowid){
    \Cart::session(auth()->id())->update($rowid,[
        'quantity' => request('quantity')
    ]);
    return back();
  }
  public function checkout(){
      return view('cart.checkout');
}
}