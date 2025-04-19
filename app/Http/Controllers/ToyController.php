<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Toy;

class ToyController extends Controller
{
    public function index(){
        $viewdata = [];
        $viewdata['title'] = "Store Page - Toy Webstore";
        $viewdata['subtitle'] = "Toy Webstore";
        $viewdata['toys'] = Toy::all();

        return view("toy.index")->with("viewdata", $viewdata);
    }

    public function show($id){
        $viewdata = [];
        $viewdata['title'] = "Store Page- Toy Webstore";
        $viewdata['subtitle'] = "Toy Product";
        $viewdata['toy'] = Toy::findOrFail($id);
        $viewdata['toys'] = Toy::all();

        return view("toy.show")->with("viewdata", $viewdata);
    }

    public function checkout(){
        $viewdata = [];
        $viewdata['title'] = "Checkout - Toy Webstore";
        $viewdata['subtitle'] = "Checkout";
    }
}
