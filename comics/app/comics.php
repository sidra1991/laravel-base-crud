<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class comics extends Model
{
    protected $fillable = [
        'title',
        'description',
        'thumb',
        'price',
        'series',
        'sale_date',
        'type'
    ];
}

