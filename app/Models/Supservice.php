<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Supservice extends Model
{
    protected $table='supservices';
    protected $primaryKey='id';
    protected $dates=['deleted_at'];
}
