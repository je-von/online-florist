<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FlowerType extends Model
{
    protected $table = 'flower_types';
    public $timestamps = false;

    protected $fillable = [
        'type_name'
    ];

    public function flower(){
        return $this->hasMany(Flower::class, 'flower_type_id', 'id');
    }
}
