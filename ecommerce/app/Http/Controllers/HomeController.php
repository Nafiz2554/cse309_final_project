<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Cart;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){


        $cart= Cart::all();
        $categories= Category::all(); 
        return view('frontend.welcome',compact('categories','cart'));
    }
    public function addToCart(Request $req){
         $cart=new Cart;
         $cart->user_id=Session()->getId();
         $cart->product_id=$req->product_id;
         $cart->save();
         return redirect('/');
    }

}
