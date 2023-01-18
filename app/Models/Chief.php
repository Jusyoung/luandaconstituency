<?php
namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;
   class Chief extends Authenticatable
    { 
        protected $guard = 'chief';
        protected $fillable = [
            'name', 'email', 'password',
        ];
        protected $hidden = [
            'password', 'remember_token',
        ];
}
