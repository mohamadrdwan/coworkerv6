<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table='clients';
    protected $primaryKey='id';
    protected $dates=['deleted_at'];
    public function employees() {
        return $this->belongsToMany('App\Models\Employeeclient');
    }
    public function services() {
        return $this->belongsToMany('App\Models\Clientservice');
    }
}
