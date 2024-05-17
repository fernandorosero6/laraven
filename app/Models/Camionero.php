<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// app/Models/Camionero.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Camionero extends Model
{
    public function camiones()
    {
        return $this->belongsToMany('App\Models\Camion');
    }

    public function paquetes()
    {
        return $this->hasMany(Paquete::class);
    }
}
