<?php
namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;
   class Resident extends Authenticatable
    { 
        protected $guard = 'resident';
        protected $fillable = [
            'name', 'email', 'password',
        ];
        protected $hidden = [
            'password', 'remember_token',
        ];
}
