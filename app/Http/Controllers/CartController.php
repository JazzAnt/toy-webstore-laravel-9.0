<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Toy;
use App\Models\Cart;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function checkout(){
        $viewdata = [];
        $viewdata['title'] = "Checkout - Toy Webstore";
        $viewdata['subtitle'] = "Checkout - Toy Webstore";
        $user = Auth::user();
        $viewdata['user'] = $user;
        $carts = User::find($user->getId())->carts;
        $viewdata['carts'] = $carts;

        $totalCost = 0;
        foreach($carts as $cart){
            $totalCost += $cart->calculateCost();
        }
        $viewdata['totalcost'] = $totalCost;

        return view("toy.checkout")->with("viewdata", $viewdata);
    }

    public function addToCart($toyId){
        $userId = Auth::user()->getId();

        //query existance of item in cart
        $cart = Cart::where([
            ['user_id','=',$userId],
            ['toy_id', '=',$toyId],
        ])->first();
        
        //if item is not found in cart, make new
        if(is_null($cart)){
            $cart = new Cart();
            $cart->setUserId($userId);
            $cart->setToyId($toyId);
            $cart->setQuantity(1);
            $cart->save();
        }
        //if item is found in cart, increase quantity
        else{
            $quantity = $cart->getQuantity() + 1;
            $cart->setQuantity($quantity);
            $cart->save();
        }
        return back();
    }

    public function deleteCart($toyId){
        $userId = Auth::user()->getId();
        //query existance of item in cart
        $cart = Cart::where([
            ['user_id','=',$userId],
            ['toy_id', '=',$toyId],
        ])->first();
        if(is_null($cart)){
            return back();
        }
        //if item is found in cart, delete it
        else{
            Cart::destroy($cart->getId());
        }
        return back();
    }

    public function decreaseCartByOne($toyId){
        $userId = Auth::user()->getId();

        //query item in cart
        $cart = Cart::where([
            ['user_id','=',$userId],
            ['toy_id', '=',$toyId],
        ])->first();

        if(is_null($cart)){
            return back();
        }
        else{
            $quantity = $cart->getQuantity() - 1;
            //if quantity decreased to 0, delete item from cart
            if($quantity == 0){
                $this->deleteCart($toyId);
            }
            //else decrease quantity by 1
            else{
                $cart->setQuantity($quantity);
                $cart->save();
            }
        }
        return back();
    }

    public function purchase(){
        $user = Auth::user();
        $carts = User::find($user->getId())->carts;

        $totalCost = 0;
        foreach($carts as $cart){
            //reduce stock on toy table
            $quantity = $cart->getQuantity();
            $toy = $cart->getToy();
            $toyNewQuantity = $toy->getQuantity() - $quantity;
                //if quantity would go below zero, make it zero
            if($toyNewQuantity < 0)
                $toyNewQuantity = 0;
            $toy->setQuantity($toyNewQuantity);
            $toy->save();
            //increment total cost
            $totalCost += $cart->calculateCost();
            //remove cart entry
            Cart::destroy($cart->getId());
        }
        //deduct user balance
        $userBalance = $user->getBalance() - $totalCost;
        $user->setBalance($userBalance);
        $user->save();

        return back();
    }
}
