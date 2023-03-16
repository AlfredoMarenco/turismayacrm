<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Availability extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function budget(): BelongsTo{
        return $this->belongsTo(Budget::class);
    }

    public function unit():BelongsTo{
        return $this->belongsTo(Unit::class);
    }

    public function driver():BelongsTo{
        return $this->belongsTo(Driver::class);
    }
}
