<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    public function techniciens(){

        // One To Many (Role => Technicien)
        
        return $this->hasMany('App\Technicien');
    }

    public function succurcales(){

        // One To Many (Role => Succurcale)

        return $this->hasMany('App\Succurcale');
    }

    public function clients(){

        // One To Many (Role => Client)

        return $this->hasMany('App\Client');
    }



}
