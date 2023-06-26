<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Budget extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function payment(): HasOne
    {
        return $this->hasOne(Payment::class);
    }

    public function discount(): HasOne
    {
        return $this->hasOne(Discount::class);
    }

    public function vouchers(): HasMany
    {
        return $this->hasMany(Voucher::class);
    }

    public function availability(): HasOne
    {
        return $this->hasOne(Availability::class);
    }

    public function vehicles(): HasMany
    {
        return $this->hasMany(Vehicle::class);
    }

    public function settlements(): HasMany
    {
        return $this->hasMany(Settlement::class);
    }

    public function totalPax(){
        $totalPax = 0;
        $vehicles = Vehicle::where('budget_id',$this->id)->get();

        foreach ($vehicles as $vehicle) {
            $totalPax = $totalPax + $vehicle->pax;
        }

        return $totalPax;
    }

    public function totalWithOutTax(){
        $totalWithOutTax = 0;
        $vehicles = Vehicle::where('budget_id',$this->id)->get();
        $discount = Discount::where('budget_id',$this->id)->get();
        foreach ($vehicles as $vehicle) {
            foreach ($vehicle->concepts as $concept) {
                $totalWithOutTax = $totalWithOutTax+$concept->net_rate;
            }
        }

        if ($this->discount) {
            $totalWithOutTax = $totalWithOutTax - $this->discount->amount;
        }else{

        }
        return $totalWithOutTax;
    }

    public function totalWithTax(){
        $totalWithTax = 0;
        $vehicles = Vehicle::where('budget_id',$this->id)->get();
        $discount = Discount::where('budget_id',$this->id)->get();
        foreach ($vehicles as $vehicle) {
            foreach ($vehicle->concepts as $concept) {
                $totalWithTax = $totalWithTax+$concept->total;
            }
        }

        if ($this->discount) {
            $totalWithTax = $totalWithTax - $this->discount->amount;
        }else{

        }

        return $totalWithTax;
    }

    public function totaltax(){
        $totalTax = 0;
        $vehicles = Vehicle::where('budget_id',$this->id)->get();
        foreach ($vehicles as $vehicle) {
            foreach ($vehicle->concepts as $concept) {
                $totalTax = $totalTax+$concept->tax;
            }
        }
        return $totalTax;
    }

    public function totalSettlement()
    {
        $total = 0;
        $settlements = Settlement::where('budget_id',$this->id)->get();
        foreach ($settlements as $settlement) {
            $total=$total+$settlement->value;
        }
        return $total;
    }

}
