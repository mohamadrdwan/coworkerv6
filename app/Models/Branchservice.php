<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Branchservice extends Model
{
    protected $table='branchservices';
    protected $primaryKey='id';
    protected $dates=['deleted_at'];
}
