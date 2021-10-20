<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Governorate extends Model
{
    protected $table='governorates';
    protected $primaryKey='id';
    protected $dates=['deleted_at'];
    public function moneybox() {
        return $this->hasOne('App\Models\Moneybox');
    }
    public function Branches() {
        return $this->hasMany('App\Models\Branch');
    }
    public function Operations() {
        return $this->hasMany('App\Models\Operation');
    }
    public function Reports() {
        return $this->hasMany('App\Models\Report');
    }
}
