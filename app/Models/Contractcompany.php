<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contractcompany extends Model
{
    protected $table='contractcompanies';
    protected $primaryKey='id';
    protected $dates=['deleted_at'];
    public function services() {
        return $this->belongsToMany('App\Models\Coservice');
    }
}
