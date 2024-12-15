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

    public function totalPax()
    {
        $totalPax = 0;
        $vehicles = Vehicle::where('budget_id', $this->id)->get();

        foreach ($vehicles as $vehicle) {
            $totalPax = $totalPax + $vehicle->pax;
        }

        return $totalPax;
    }

    public function totalWithOutTax()
    {
        $totalWithOutTax = 0;
        $vehicles = Vehicle::where('budget_id', $this->id)->get();
        foreach ($vehicles as $vehicle) {
            foreach ($vehicle->concepts as $concept) {
                $totalWithOutTax = $totalWithOutTax + $concept->net_rate;
            }
        }

        if ($this->discount) {
            $totalWithOutTax = $totalWithOutTax - ($totalWithOutTax) * ($this->discount->amount);
        }
        return $totalWithOutTax;
    }

    public function totalWithTax()
    {
        $totalWithTax = 0;
        $vehicles = Vehicle::where('budget_id', $this->id)->get();
        foreach ($vehicles as $vehicle) {
            foreach ($vehicle->concepts as $concept) {
                $totalWithTax = $totalWithTax + $concept->total;
            }
        }

        if ($this->discount) {
            $totalWithTax = $totalWithTax - ($totalWithTax) * ($this->discount->amount);
        }
        return $totalWithTax;
    }

    public function totalDiscount()
    {
        $discount = 0;
        $vehicles = Vehicle::where('budget_id', $this->id)->get();
        foreach ($vehicles as $vehicle) {
            if ($this->enable_tax) {
                foreach ($vehicle->concepts as $concept) {
                    $discount = $discount + $concept->total;
                }
            } else {
                foreach ($vehicle->concepts as $concept) {
                    $discount = $discount + $concept->net_rate;
                }
            }
        }
        $discount = ($discount) * ($this->discount->amount);
        return $discount;
    }

    public function totaltax()
    {
        $totalTax = 0;
        $vehicles = Vehicle::where('budget_id', $this->id)->get();
        foreach ($vehicles as $vehicle) {
            foreach ($vehicle->concepts as $concept) {
                $totalTax = $totalTax + $concept->tax;
            }
        }
        return $totalTax;
    }

    public function totalSettlement()
    {
        $total = 0;
        $settlements = Settlement::where('budget_id', $this->id)->get();
        foreach ($settlements as $settlement) {
            $total = $total + $settlement->value;
        }
        return $total;
    }

    public function balanceSplits()
    {
        $balance = 0;
        $total_splits = 0;
        $payment = Payment::where('budget_id', $this->id)->first();

        foreach ($payment->splits as $split) {
            if ($split->status == 2) {
                $total_splits = $total_splits + $split->amount;
            }
        }

        if ($this->enable_tax) {
            $balance = $this->totalWithTax() - $total_splits;
        } else {
            $balance = $this->totalWithOutTax() - $total_splits;
        }

        return $balance;
    }

    public function all_splits_paid()
    {
        $validation = 0;
        $payment = Payment::where('budget_id', $this->id)->first();

        if ($payment) {
            foreach ($payment->splits as $split) {
                if ($split->status == 2) {
                    $validation++;
                }
            }
        }
        return $validation;
    }


    public function totalDiselCost()
    {
        $totalDiselCost = 0;
        $vehicles = Vehicle::where('budget_id', $this->id)->get();
        foreach ($vehicles as $vehicle) {
            foreach ($vehicle->concepts as $concept) {
                $totalDiselCost = $totalDiselCost + $concept->disel_cost;
            }
        }

        return $totalDiselCost;
    }

    public function totalSalary()
    {
        $totalSalary = 0;
        $vehicles = Vehicle::where('budget_id', $this->id)->get();
        foreach ($vehicles as $vehicle) {
            foreach ($vehicle->concepts as $concept) {
                $totalSalary = $totalSalary + $concept->salary;
            }
        }

        return $totalSalary;
    }

    public function totalPerDiem()
    {
        $totalPerDiem = 0;
        $vehicles = Vehicle::where('budget_id', $this->id)->get();
        foreach ($vehicles as $vehicle) {
            foreach ($vehicle->concepts as $concept) {
                $totalPerDiem = $totalPerDiem + $concept->per_diem;
            }
        }

        return $totalPerDiem;
    }

    public function totalHotel()
    {
        $totalHotel = 0;
        $vehicles = Vehicle::where('budget_id', $this->id)->get();
        foreach ($vehicles as $vehicle) {
            foreach ($vehicle->concepts as $concept) {
                $totalHotel = $totalHotel + $concept->hotel;
            }
        }

        return $totalHotel;
    }

    public function totalTaxBurden()
    {
        $totalTaxBurden = 0;
        $vehicles = Vehicle::where('budget_id', $this->id)->get();
        foreach ($vehicles as $vehicle) {
            foreach ($vehicle->concepts as $concept) {
                $totalTaxBurden = $totalTaxBurden + $concept->tax_burden;
            }
        }

        return $totalTaxBurden;
    }

    public function totalFlorRigth()
    {
        $totalFlorRigth = 0;
        $vehicles = Vehicle::where('budget_id', $this->id)->get();
        foreach ($vehicles as $vehicle) {
            foreach ($vehicle->concepts as $concept) {
                $totalFlorRigth = $totalFlorRigth + $concept->flor_rigth;
            }
        }

        return $totalFlorRigth;
    }

    public function totalBooths()
    {
        $totalBooths = 0;
        $vehicles = Vehicle::where('budget_id', $this->id)->get();
        foreach ($vehicles as $vehicle) {
            foreach ($vehicle->concepts as $concept) {
                $totalBooths = $totalBooths + $concept->booths;
            }
        }

        return $totalBooths;
    }

    public function totalMaintenance()
    {
        $totalMaintenance = 0;
        $vehicles = Vehicle::where('budget_id', $this->id)->get();
        foreach ($vehicles as $vehicle) {
            foreach ($vehicle->concepts as $concept) {
                $totalMaintenance = $totalMaintenance + $concept->maintenance;
            }
        }

        return $totalMaintenance;
    }

    public function totalAmenities()
    {
        $totalAmenities = 0;
        $vehicles = Vehicle::where('budget_id', $this->id)->get();
        foreach ($vehicles as $vehicle) {
            foreach ($vehicle->concepts as $concept) {
                $totalAmenities = $totalAmenities + $concept->amenities;
            }
        }

        return $totalAmenities;
    }

    public function totalSublet()
    {
        $totalSublet = 0;
        $vehicles = Vehicle::where('budget_id', $this->id)->get();
        foreach ($vehicles as $vehicle) {
            foreach ($vehicle->concepts as $concept) {
                $totalSublet = $totalSublet + $concept->sublet;
            }
        }

        return $totalSublet;
    }

}
