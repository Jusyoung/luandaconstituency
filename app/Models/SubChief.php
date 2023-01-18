<?php
namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;
   class SubChief extends Authenticatable
    { 
        protected $guard = 'subChief';
        protected $fillable = [
            'name', 'email', 'password',
        ];
        protected $hidden = [
            'password', 'remember_token',
        ];
}
