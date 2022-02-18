<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    protected $fillable = [
        'name',
        'title',
        'price',
        'city',
        'address',
        'number',
        'description',
        'owner',
        'start_date',
    ];
}
