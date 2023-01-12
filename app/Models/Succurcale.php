<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Succurcale extends Authenticatable
{   use HasFactory;
    use HasFactory, Notifiable;
    //use HasApiTokens, HasFactory, Notifiable;


    protected $fillable = [
        'name',
        'address',
    ];


    public function techniciens(){
        
        // One To Many relationship ( Succurcale => Technicien)  

        return $this->hasMany('App\Technicien');
 
    }

    public function services(){
        
        // One To Many relationship ( Succurcale => Service) 
        
        return $this->hasMany('App\Service');
 
    }

    public function role(){
        
        // Many To One relationship ( succurcale => Role) 
        
        return $this->belongsTo('App\Role');
 
    }
}