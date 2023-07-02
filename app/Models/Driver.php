<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Driver extends Model
{
    use HasFactory;

    protected $guarded = ['id'];


    public function availability():HasOne
    {
        return $this->hasOne(Availability::class);
    }

    public function vouchers():HasMany
    {
        return $this->hasMany(Voucher::class);
    }
}
