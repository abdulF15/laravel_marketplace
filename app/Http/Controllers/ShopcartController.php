<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Market;
class ShopcartController extends Controller
{
    public function cart(){
        return view("markets.markets");
    }
    public function addtocart($id){
        $market = Market::findOrFail($id);

        $cart = session()->get('cart',[]);
      
        if(isset($cart[$id])){
            $cart[$id]['price']++;
        }else{
            $cart[$id] = [
                "title" => $market->title,
                "category" => $market->category->name,
                "user_id" => $market->author->username,
                "price" => $market->price,         
            ];
        }
        session()->put("cart", $cart);
        return redirect()->back()->with("success","Product add to cart successfully");
    }

    // public function remove(Request $request){
    //     $cart = session()->get("cart");
    //     if(isset($cart[$request->id])){
    //         unset($cart[$request->id]);
    //         session()->put('cart',$cart);
    //     }
    //     session()->flash('success','product successfully removed!');

    // }
}
