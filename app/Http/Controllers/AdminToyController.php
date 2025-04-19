<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Toy;

class AdminToyController extends Controller
{
    public function index(){
        $viewdata = [];
        $viewdata['title'] = "Catalog Editor - Toy Webstore";
        $viewdata['subtitle'] = "Catalog Editor - Toy Webstore";
        $viewdata['toys'] = Toy::all();

        return view("admin.toy.index")->with("viewdata", $viewdata);
    }

    public function edit($id){
        $viewdata = [];
        $viewdata['title'] = "Toy Editor - Toy Webstore";
        $viewdata['subtitle'] = "Toy Editor - Toy Product";
        $viewdata['toy'] = Toy::findOrFail($id);

        return view("admin.toy.edit")->with("viewdata", $viewdata);
    }
}
