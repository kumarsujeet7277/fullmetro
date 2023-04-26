<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'image',
    ];


    public static function validationRule(){
        return [
             'name' =>[
                 'required',
                 'unique:items,name',
                 'regex:/^[\pL\s]+$/u',
                 'max:50',
             ],
             'price' => 'required|numeric',             
             'image' => 'required|image|mimes:jpg,png',
         ];
     }


     public function stock()
     {
        return $this->hasMany(Stock::class);
     }

}
