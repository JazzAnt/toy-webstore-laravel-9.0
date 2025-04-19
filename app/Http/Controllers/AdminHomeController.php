<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminHomeController extends Controller
{
    public function index(){
        $viewdata = [];
        $viewdata['title'] = "Admin - Toy Webstore";
        $viewdata['subtitle'] = "Admin Hub - Toy Webstore";

        return view("admin.home.index")->with("viewdata", $viewdata);
    }
}
