<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $table='reports';
    protected $primaryKey='id';
    protected $dates=['deleted_at'];
}
