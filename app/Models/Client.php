<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Client extends  Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    use HasFactory;


    public function ranndez_vouss(){
        
        // One To Many relationship ( Client => Ranndez_Vous) 
        
        return $this->hasMany('App\Ranndez_Vous');
 
    }

    public function role(){
        
        // Many To One relationship ( Client => Role) 
        
        return $this->belongsTo('App\Role');
 
    }






    
}
