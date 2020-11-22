<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modules extends Model
{
    use HasFactory;

    public function equipmens()
    {
        return $this->belongsTo('App\Models\Equipments');
    }
}
