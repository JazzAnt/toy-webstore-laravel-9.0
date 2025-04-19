<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Toy;
use Illuminate\Support\Facades\Storage;

class AdminToyController extends Controller
{
    public function index(){
        $viewdata = [];
        $viewdata['title'] = "Catalog Editor - Toy Webstore";
        $viewdata['subtitle'] = "Catalog Editor - Toy Webstore";
        $viewdata['toys'] = Toy::all();

        return view("admin.toy.index")->with("viewdata", $viewdata);
    }

    public function add(){
        $viewdata = [];
        $viewdata['title'] = "Catalog Add - Toy Webstore";
        $viewdata['subtitle'] = "Catalog Add - Toy Webstore";

        return view("admin.toy.add")->with("viewdata", $viewdata);
    }

    public function post(Request $request){
        Toy::validate($request);

        $toy = new Toy();
        $toy->setName($request->input("name"));
        $toy->setDescription($request->input("description"));
        $toy->setPrice($request->input("price"));
        $toy->setQuantity($request->input("quantity"));
        $toy->setType($request->input("type"));

        if($request->hasFile("image")){
            $imageName = $toy->getId()."_".$request->file("image")->extension();
            Storage::disk("public")->put($imageName, file_get_contents($request->file("image")->getRealPath()));
            $toy->setImage($imageName);
        }
        else{
            $toy->setImage("rc-cars.jpg");
        }

        $toy->save();
        return back();
    }

    public function edit($id){
        $viewdata = [];
        $viewdata['title'] = "Toy Editor - Toy Webstore";
        $viewdata['subtitle'] = "Toy Editor - Toy Product";
        $viewdata['toy'] = Toy::findOrFail($id);

        return view("admin.toy.edit")->with("viewdata", $viewdata);
    }

    public function update(Request $request, $id){
        Toy::validate($request);

        $toy = Toy::findOrFail($id);
        $toy->setName($request->input("name"));
        $toy->setDescription($request->input("description"));
        $toy->setPrice($request->input("price"));
        $toy->setQuantity($request->input("quantity"));
        $toy->setType($request->input("type"));

        if($request->hasFile("image")){
            $imageName = $toy->getId()."_".$request->file("image")->extension();
            Storage::disk("public")->put($imageName, file_get_contents($request->file("image")->getRealPath()));
            $toy->setImage($imageName);
        }

        $toy->save();
        return back();
    }

    public function delete($id){
        Toy::destroy($id);
        return back();
    }
}
