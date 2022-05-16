<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'user_id',
        'courier_id',
        'transaction_date'
    ];

    public function courier(){
        return $this->hasOne(Courier::class, 'id', 'courier_id');
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function transactionDetail(){
        return $this->hasMany(TransactionDetail::class, 'transaction_id', 'id');
    }
}
