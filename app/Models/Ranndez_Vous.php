<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ranndez_Vous extends Model
{
    use HasFactory;

    public function client(){
        
        // Many To One relationship ( Client => Ranndez_Vous) 
        
        return $this->belongsTo('App\Client');
 
    }


    public function service(){
        
        // Many To One relationship ( Ranndez_Vous => Ranndez_Vous) 
        
        return $this->belongsTo('App\Service');
 
    }
}
