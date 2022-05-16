<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'user_id'
    ];

    public function user(){
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function cartDetail(){
        return $this->hasMany(CartDetail::class,'cart_id', 'id');
    }
}
