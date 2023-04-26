<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Validation\Rule;
use App\Models\User;
use App\Models\Item;

class Stock extends Model
{
    use HasFactory;

    protected $fillable = [
        'item_id',
        'user_id',
        'quantity',
        'type',
    ];

    public static function validationRule(){
        return [
            'item_id' => 'required',
            'user_id' => 'required',
            'quantity' => 'required|digit',
            'type' => [
                'required',
                Rule::in(['sale', 'purchase']),   
            ],
        ];
    }

    public function user(){
        return $this->belongsTo((User::class));
    }


    public function item(){
        return $this->belongsTo(Item::class);
    }

}
