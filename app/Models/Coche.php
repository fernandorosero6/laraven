<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coche extends Model
{
    use HasFactory;
    public function Empleado(){
        //$profile = Profile::where('user_id',$this->id)->first();
        //$profile = Profile::where('foreing_key',$this->local_key)->first();
        //return $this->hasOne('App\Models\Profile','foreing_key','local_key');
        return $this->hasOne('App\Models\Empleado');
    }
}
