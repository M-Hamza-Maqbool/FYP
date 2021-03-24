<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
   public function add_Cart(Product $productid){
        dd($productid);
    }
}
