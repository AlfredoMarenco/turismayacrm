<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Itinerary extends Model
{
    use HasFactory;

    protected $guarded = ['id'];


    public function voucher(): BelongsTo
    {
        return $this->belongsTo(Voucher::class);
    }

    public function concept():BelongsTo
    {
        return $this->belongsTo(Concept::class);
    }

}