<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    protected $fillable = [
        'title',
        'series',
        'type',
        'price',
        'sale_date',
        'thumb',
        'description'
    ];
}
