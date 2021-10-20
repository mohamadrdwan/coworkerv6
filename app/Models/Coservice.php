<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Coservice extends Model
{
    protected $table='coservices';
    protected $primaryKey='id';
    protected $dates=['deleted_at'];
}
