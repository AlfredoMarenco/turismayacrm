<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Vehicle extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    //Relacion una a muchos inversa
    public function budget() : BelongsTo
    {
        return $this->belongsTo(Budget::class);
    }

    public function concepts() : HasMany
    {
        return $this->hasMany(Concept::class);
    }

    public function voucher(): HasOne
    {
        return $this->hasOne(Voucher::class);
    }

    public function countVoucher(){
        return Voucher::where('vehicle_id',$this->id)->count();
    }

    public function totalWithOutTax(){
        $totalWithOutTax = 0;
        $concepts = Concept::where('vehicle_id',$this->id)->get();
        foreach ($concepts as $concept) {
            $totalWithOutTax = $totalWithOutTax+$concept->net_rate;
        }
        return $totalWithOutTax;
    }

    public function totalWithTax(){
        $totalWithTax = 0;
        $concepts = Concept::where('vehicle_id',$this->id)->get();
        foreach ($concepts as $concept) {
            $totalWithTax = $totalWithTax+$concept->total;
        }
        return $totalWithTax;
    }

    public function totalTax(){
        $totalTax = 0;
        $concepts = Concept::where('vehicle_id',$this->id)->get();
        foreach ($concepts as $concept) {
            $totalTax = $totalTax+$concept->tax;
        }
        return $totalTax;
    }
}
