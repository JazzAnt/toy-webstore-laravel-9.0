<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Toy;
class AdminHomeController extends Controller
{
    public function index(){
        $viewdata = [];
        $viewdata['title'] = "Admin - Toy Webstore";
        $viewdata['subtitle'] = "Admin Hub - Toy Webstore";
        $viewdata['toys'] = Toy::all();

        return view("admin.home.index")->with("viewdata", $viewdata);
    }
}
