<?php

    namespace App\Models;

    use Illuminate\Foundation\Auth\User as Authenticatable;
    use Illuminate\Notifications\Notifiable;
    class Employee extends Authenticatable
    {

        use Notifiable;
        protected $fillable = [ 'name', 'email', 'password',];
        protected $hidden   = [ 'password', 'remember_token',];
        protected $casts    = ['email_verified_at' => 'datetime', ];
        protected $table='employees';
        protected $primaryKey='id';
        protected $dates=['deleted_at'];
        public function orders() {
            return $this->belongsToMany('App\Models\Employeeorder');
        }
        public function clients() {
            return $this->belongsToMany('App\Models\Employeeclient');
        }
        public function branch() {
            return $this->belongsTo('App\Models\Branch');
        }
        public function moneybox() {
            return $this->hasOne('App\Models\Moneybox');
        }

    }
