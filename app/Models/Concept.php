<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Concept extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    //Relacion una a muchos inversa
    public function budget() : BelongsTo
    {
        return $this->belongsTo(Budget::class);
    }

    public function pax(){
        return $this->passangers_bus + $this->passangers_pickup;
    }
    
}
