<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Courier extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'name',
        'shipping_cost'
    ];

    public function transaction(){
        return $this->hasMany(Transaction::class,'courier_id', 'id');
    }
}
