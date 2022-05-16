<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;
    protected $guarded = [];
    public $timestamps = false;

    public function cart(){
        return $this->hasMany(Cart::class, 'user_id', 'id');
    }

    public function transaction(){
        return $this->hasMany(Transaction::class, 'user_id', 'id');
    }
}
