<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    public function ranndez_vouss(){
        
        // One To Many relationship ( Service => Ranndez_Vous) 
        
        return $this->hasMany('App\Ranndez_Vous');
 
    }


    public function succurcale(){
        
        // Many To One relationship ( Service => Succurcale) 
        
        return $this->belongsTo('App\Succurcale');
 
    }

    public function techniciens()
    {
        return $this->belongsToMany(Technicien::class)->withPivot(['start_date', 'end_date']);
    }

}
