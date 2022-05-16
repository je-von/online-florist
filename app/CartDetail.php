<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class CartDetail extends Model
{
    protected $table = 'cart_details';
    public $timestamps = false;
    public $incrementing = false;
    protected $primaryKey = ['cart_id', 'flower_id'];

    protected $fillable = [
        'cart_id',
        'flower_id',
        'quantity'
    ];

    public function cart(){
        return $this->belongsTo(Cart::class);
    }

    public function flower(){
//        return $this->belongsToMany(Flower::class);
        //karena gak bisa 2 foreign key
        return $this->hasOne(Flower::class, 'id', 'flower_id');
    }


    // 2 method dibawah dioverride agar CartDetail bisa diupdate / delete
    protected function setKeysForSaveQuery(Builder $query){
        $keys = $this->getKeyName();
        if(!is_array($keys))
            return parent::setKeysForSaveQuery($query);

        foreach($keys as $k){
            $query->where($k, '=', $this->getKeyForSaveQuery($k));
        }
        return $query;
    }

    protected function getKeyForSaveQuery($keyName = null){
        if($keyName == null)
            $keyName = $this->getKeyName();

        if (isset($this->original[$keyName]))
            return $this->original[$keyName];

        return $this->getAttribute($keyName);
    }
}
