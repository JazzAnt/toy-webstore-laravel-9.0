<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Toy;
use Illuminate\Support\Facades\Auth;

class ToyController extends Controller
{
    public function index(){
        $viewdata = [];
        $viewdata['title'] = "Store Page - Toy Webstore";
        $viewdata['subtitle'] = "Toy Catalog";
        $viewdata['toys'] = Toy::all();
        $viewdata['user'] = Auth::user();

        return view("toy.index")->with("viewdata", $viewdata);
    }

    public function show($id){
        $viewdata = [];
        $viewdata['title'] = "Store Page- Toy Webstore";
        $viewdata['subtitle'] = "Toy Product";
        $viewdata['toy'] = Toy::findOrFail($id);
        $viewdata['toys'] = Toy::all();
        $viewdata['user'] = Auth::user();

        return view("toy.show")->with("viewdata", $viewdata);
    }

    public function checkout(){
        $viewdata = [];
        $viewdata['title'] = "Checkout - Toy Webstore";
        $viewdata['subtitle'] = "Checkout";
        $viewdata['user'] = Auth::user();
    }
}
