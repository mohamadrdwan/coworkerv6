<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class postprice_fill extends Model
{
    protected $table='postpay_syriatel';
    protected $fillable = ['number', 'categories','price'];
}
