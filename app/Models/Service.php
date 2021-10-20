<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table='services';
    protected $primaryKey='id';
    protected $dates=['deleted_at'];
    public function clients() {
        return $this->belongsToMany('App\Models\Clientservice');
    }
    public function contractCompanies() {
        return $this->belongsToMany('App\Models\Coservice');
    }
    public function suppliers() {
        return $this->belongsToMany('App\Models\Supservice');
    }
    public function branches() {
        return $this->belongsToMany('App\Models\Branchservice');
    }
}
