<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Payment extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function budget(): BelongsTo
    {
        return $this->belongsTo(Budget::class);
    }

    public function splits(): HasMany
    {
        return $this->hasMany(Split::class);
    }
}
