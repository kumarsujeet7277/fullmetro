<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Supplier extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'business_name',
        'contact',
    ];


    public static function validationRule(){
        return [
            'user_id' => 'required',
            'business_name' => 'required',
            'contact' => 'required|digit:10|unique:suppliers,contact',
        ];
    }


    public function user(){
        return $this->belongsTo(User::class);
    }
}
