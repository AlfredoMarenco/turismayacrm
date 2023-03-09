<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Split extends Model
{
    use HasFactory;

    const PENDIENTE = 1, PAGADO = 2,EFECTIVO = 3,TRANSFERENCIA = 4,CREDITO = 5,PAYPAL= 6,LICITACION = 7;
    protected $guarded = ['id'];

    public function payment(): BelongsTo
    {
        return $this->belongsTo(Payment::class);
    }

}
