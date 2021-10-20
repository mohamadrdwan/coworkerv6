<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class need extends Model
{
    protected $table='need';
    protected $fillable = ['name', 'phone','email','subject','message'];
}
