<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $table='suppliers';
    protected $primaryKey='id';
    protected $dates=['deleted_at'];
    public function services() {
        return $this->belongsToMany('App\Models\Supservice');
    }
}
