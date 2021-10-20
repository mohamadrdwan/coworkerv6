<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Moneybox extends Model
{
    protected $table='moneyboxes';
    protected $primaryKey='id';
    protected $dates=['deleted_at'];
}
