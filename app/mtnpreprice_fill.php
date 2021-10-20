<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mtnpreprice_fill extends Model
{
    protected $table='prepay_mtn';
    protected $fillable = ['number', 'categories','price'];
}
