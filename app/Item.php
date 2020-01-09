<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable=[
        'item_name',
        'cost',
    ];
    protected $dates =[
        'created_at',
        'updated_at',
    ];

    public function locations()
    {
        return $this->hasMany(Location::class);
    }
}
