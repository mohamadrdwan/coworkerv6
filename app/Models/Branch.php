<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    protected $table='branches';
    protected $primaryKey='id';
    protected $dates=['deleted_at'];
    public function moneybox() {
        return $this->hasOne('App\Models\Moneybox');
    }
    public function services() {
        return $this->belongsToMany('App\Models\Branchservice');
    }
    public function employees() {
        return $this->hasMany('App\Models\Employee');
    }
    public function governorate() {
        return $this->belongsTo('App\Models\Governorate');
    }
    public function operations() {
        return $this->hasMany('App\Models\Operation');
    }
    public function reports() {
        return $this->hasMany('App\Models\Report');
    }

}
