<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransactionDetail extends Model
{
    protected $table = 'transaction_details';
    public $timestamps = false;
    public $incrementing = false;
    protected $primaryKey = ['transaction_id', 'flower_id'];

    protected $fillable = [
        'transaction_id',
        'flower_id',
        'quantity'
    ];

    public function transaction(){
        return $this->belongsToMany(Transaction::class);
    }

    public function flower(){
//        return $this->belongsToMany(Flower::class);
        //karena gak bisa 2 foreign key
        return $this->hasOne(Flower::class, 'id', 'flower_id');
    }
}
