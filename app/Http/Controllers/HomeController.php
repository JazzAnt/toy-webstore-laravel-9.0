<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        $viewdata = [];
        $viewdata['title'] = "Home - Toy Webstore";
        $viewdata['subtitle'] = "Toy Webstore";
        $viewdata['user'] = Auth::user();

        return view("home.index")->with("viewdata", $viewdata);
    }

    public function about(){
        $viewdata = [];
        $viewdata['title'] = "About - Toy Webstore";
        $viewdata['subtitle'] = "About Us";
        $viewdata['user'] = Auth::user();

        return view("home.about")->with("viewdata", $viewdata);
    }

    public function contact(){
        $viewdata = [];
        $viewdata['title'] = "Contact Us - Toy Webstore";
        $viewdata['subtitle'] = "Contact Us";
        $viewdata['user'] = Auth::user();
    }
}
