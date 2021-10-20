<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class preprice_fill extends Model
{
    protected $table='prepay_syriatel';
    protected $fillable = ['number', 'categories','price'];
}
