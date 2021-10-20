<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employeeorder extends Model
{
    protected $table='employeeorders';
    protected $primaryKey='id';
    protected $dates=['deleted_at'];
}
