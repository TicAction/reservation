<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $fillable=[
        'quantity',
        'return_date',
        'pickup_date',
        'return',
        'user_id',
        'item_id',
    ];
    protected $dates =[
        'return_date',
        'pickup_date',
        'created_at',
        'updated_at',
    ];


    public function user()
        {
            return $this->belongsTo(User::class);
        }

    public function item()
    {
        return $this->belongsTo(Item::class);
    }



}
