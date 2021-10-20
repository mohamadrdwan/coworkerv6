<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Clientservice extends Model
{
    protected $table='clientservices';
    protected $primaryKey='id';
    protected $dates=['deleted_at'];
}
