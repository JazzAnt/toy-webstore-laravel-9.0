<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Toy extends Model
{
    use HasFactory;

    public static function validate($request){
        $request->validate([
            "name" => "required|max:255",
            "description" => "required",
            "image" => "image",
            "price" => "required|numeric|gt:0",
            "quantity" => "required|numeric|gt:-1",
            "type" => "required",
        ]);
    }

    public function getId(){
        return $this->attributes['id'];
    }
    public function setId($id){
        $this->attributes['id'] = $id;
    }
    public function getName(){
        return $this->attributes['name'];
    }
    public function setName($name){
        $this->attributes['name'] = $name;
    }
    public function getDescription(){
        return $this->attributes['description'];
    }
    public function setDescription($description){
        $this->attributes['description'] = $description;
    }
    public function getImage(){
        return $this->attributes['image'];
    }
    public function setImage($image){
        $this->attributes['image'] = $image;
    }
    public function getPrice(){
        return $this->attributes['price'];
    }
    public function setPrice($price){
        $this->attributes['price'] = $price;
    }
    public function getQuantity(){
        return $this->attributes['quantity'];
    }
    public function setQuantity($quantity){
        $this->attributes['quantity'] = $quantity;
    }
    public function getType(){
        return $this->attributes['type'];
    }
    public function setType($type){
        $this->attributes['type'] = $type;
    }
    public function getTimestamp(){
        return $this->attributes['timestamp'];
    }
    public function setTimestamp($timestamp){
        $this->attributes['timestamp'] = $timestamp;
    }
}
