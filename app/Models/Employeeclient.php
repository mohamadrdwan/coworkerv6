<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employeeclient extends Model
{
    protected $table='employeeclients';
    protected $primaryKey='id';
    protected $dates=['deleted_at'];
}
