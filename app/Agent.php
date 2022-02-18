<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    //
    protected $fillable = [
        'name',
        'lastname',
        'code',
        'piva',
        'mobile',
        'email',
        'address',
        'avatar',
    ];
}
