<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Toy;
use Illuminate\Support\Facades\Auth;
class AdminHomeController extends Controller
{
    public function index(){
        $viewdata = [];
        $viewdata['title'] = "Admin - Toy Webstore";
        $viewdata['subtitle'] = "Admin Hub - Toy Webstore";
        $viewdata['toys'] = Toy::all();
        $viewdata['user'] = Auth::user();

        return view("admin.home.index")->with("viewdata", $viewdata);
    }
}
