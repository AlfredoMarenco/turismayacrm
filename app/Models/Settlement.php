<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Settlement extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    const SALARIOS=1,VIATICOS=2,CASETAS=3,HOSPEDAJES=4,LIMPIEZA=5,COMBUSTIBLES=6,TALLER=7,EXTRAS=8;

    public function budget():BelongsTo
    {
        return $this->belongsTo(Budget::class);
    }
}
