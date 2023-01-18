<?php
namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;
   class Mp extends Authenticatable
    { 
        protected $guard = 'mp';
        protected $fillable = [
            'name', 'email', 'password',
        ];
        protected $hidden = [
            'password', 'remember_token',
        ];
}
