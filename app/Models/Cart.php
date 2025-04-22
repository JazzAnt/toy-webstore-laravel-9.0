<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Toy;

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
        return $this->belongsTo('App\Models\User');
    }

    public function getToy(){
        return Toy::findOrFail($this->attributes['toy_id']);
    }

    public function calculateCost(){
        return $this->getQuantity() * $this->getToy()->getPrice();
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
