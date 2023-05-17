<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('concepts', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->text('description')->nullable();
            $table->double('km')->nullable();
            $table->double('laps')->nullable();
            $table->double('performance')->nullable();
            $table->double('liters')->nullable();
            $table->double('disel_price')->nullable();
            $table->double('disel_cost')->nullable();
            $table->double('salary')->nullable();
            $table->double('per_diem')->nullable();
            $table->double('hotel')->nullable();
            $table->double('tax_burden')->nullable();
            $table->double('flor_rigth')->nullable();
            $table->double('booths')->nullable();
            $table->double('maintenance')->nullable();
            $table->double('amenities')->nullable();
            $table->double('sublet')->nullable();
            $table->double('total_cost')->nullable();
            $table->double('utility_percentage')->nullable();
            $table->double('utility')->nullable();
            /* $table->double('qty_pickup')->nullable();
            $table->double('km_pickup')->nullable();
            $table->double('passangers_pickup')->nullable();
            $table->double('laps_pickup')->nullable();
            $table->double('performance_pickup')->nullable();
            $table->double('liters_pickup')->nullable();
            $table->double('disel_price_pickup')->nullable();
            $table->double('disel_cost_pickup')->nullable();
            $table->double('salary_pickup')->nullable();
            $table->double('per_diem_pickup')->nullable();
            $table->double('hotel_pickup')->nullable();
            $table->double('tax_burden_pickup')->nullable();
            $table->double('flor_rigth_pickup')->nullable();
            $table->double('booths_pickup')->nullable();
            $table->double('maintenance_pickup')->nullable();
            $table->double('amenities_pickup')->nullable();
            $table->double('sublet_pickup')->nullable();
            $table->double('total_cost_pickup')->nullable();
            $table->double('utility_percentage_pickup')->nullable();
            $table->double('utility_pickup')->nullable(); */
            $table->double('net_rate')->nullable();
            $table->double('tax')->nullable();
            $table->double('total')->nullable();
            $table->foreignId('vehicle_id')->constrained('vehicles');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('concepts');
    }
};
