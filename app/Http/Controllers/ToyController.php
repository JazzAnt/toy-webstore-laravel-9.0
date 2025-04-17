<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ToyController extends Controller
{
    public function index(){
        $viewdata = [];
        $viewdata['title'] = "Store Page - Toy Webstore";
        $viewdata['subtitle'] = "Toy Webstore";

        return view("toy.index")->with("viewdata", $viewdata);
    }

    public function show(){
        $viewdata = [];
        $viewdata['title'] = "Store Page- Toy Webstore";
        $viewdata['subtitle'] = "Toy Product";

        return view("home.about")->with("viewdata", $viewdata);
    }

    public function checkout(){
        $viewdata = [];
        $viewdata['title'] = "Checkout - Toy Webstore";
        $viewdata['subtitle'] = "Checkout";
    }
}
