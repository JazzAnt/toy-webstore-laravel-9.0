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
            "quantity" => "required|numeric|gt:0",
        ]);
    }

    public function getId(){
        return $this->attributes['id'];
    }
    public function setId(){
        return $this->attributes['id'];
    }
    public function getName(){
        return $this->attributes['name'];
    }
    public function setName(){
        return $this->attributes['name'];
    }
    public function getDescription(){
        return $this->attributes['description'];
    }
    public function setDescription(){
        return $this->attributes['description'];
    }
    public function getImage(){
        return $this->attributes['image'];
    }
    public function setImage(){
        return $this->attributes['image'];
    }
    public function getPrice(){
        return $this->attributes['price'];
    }
    public function setPrice(){
        return $this->attributes['price'];
    }
    public function getQuantity(){
        return $this->attributes['quantity'];
    }
    public function setQuantity(){
        return $this->attributes['quantity'];
    }
    public function getTimestamp(){
        return $this->attributes['timestamp'];
    }
    public function setTimestamp(){
        return $this->attributes['timestamp'];
    }
}
