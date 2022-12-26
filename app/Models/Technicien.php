<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Technicien extends  Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    use HasFactory;


    public function succurcale(){
        
        // Many To One relationship  ( Technicien => Succurcale) 

        return $this->belongsTo('App\Succurcale');
 
    }

    public function role(){
        
        // Many To One relationship ( technicien => Role) 
        
        return $this->belongsTo('App\Role');
 
    }

    public function services()
    {
        return $this->belongsToMany(Service::class)->withPivot(['start_date', 'end_date']);
    }


}
