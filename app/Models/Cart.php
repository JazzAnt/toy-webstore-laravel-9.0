<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    public static function validate($request){
        $request->validate([
            "user_id" => "required",
            "toy_id" => "required",
            "quantity" => "required|numeric|gt:-1",
        ]);
    }

    public function user(){
        return $this->belongsTo('User');
    }

    public function getId(){
        return $this->attributes['id'];
    }
    public function setId($id){
        $this->attributes['id'] = $id;
    }
    public function getUserId(){
        return $this->attributes['user_id'];
    }
    public function setUserId($id){
        $this->attributes['user_id'] = $id;
    }
    public function getToyId(){
        return $this->attributes['toy_id'];
    }
    public function setToyId($id){
        $this->attributes['toy_id'] = $id;
    }
    public function getQuantity(){
        return $this->attributes['quantity'];
    }
    public function setQuantity($quantity){
        $this->attributes['quantity'] = $quantity;
    }
}
