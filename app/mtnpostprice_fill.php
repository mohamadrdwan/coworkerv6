<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mtnpostprice_fill extends Model
{
    protected $table='postpay_mtn';
    protected $fillable = ['number', 'categories','price'];
}
