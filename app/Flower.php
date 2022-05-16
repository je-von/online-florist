<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flower extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'name',
        'flower_type_id',
        'price',
        'description',
        'stock',
        'image_path'
    ];

    public function flowerType(){
        return $this->hasOne(FlowerType::class,'id', 'flower_type_id');
    }

    public function cartDetail(){
        return $this->hasMany(CartDetail::class,'flower_id', 'id');
    }

    public function transactionDetail(){
        return $this->hasMany(TransactionDetail::class,'flower_id', 'id');
    }
}
