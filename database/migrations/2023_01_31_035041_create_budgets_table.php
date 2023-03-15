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
        Schema::create('budgets', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->date('start_date');
            $table->date('end_date');
            $table->text('status');
            $table->foreignId('user_id')->constrained('users');
            $table->double('qty_bus')->nullable();
            $table->double('km_bus')->nullable();
            $table->double('passangers_bus')->nullable();
            $table->double('laps_bus')->nullable();
            $table->double('performance_bus')->nullable();
            $table->double('liters_bus')->nullable();
            $table->double('disel_price_bus')->nullable();
            $table->double('disel_cost_bus')->nullable();
            $table->double('salary_bus')->nullable();
            $table->double('per_diem_bus')->nullable();
            $table->double('hotel_bus')->nullable();
            $table->double('tax_burden_bus')->nullable();
            $table->double('flor_rigth_bus')->nullable();
            $table->double('booths_bus')->nullable();
            $table->double('maintenance_bus')->nullable();
            $table->double('amenities_bus')->nullable();
            $table->double('sublet_bus')->nullable();
            $table->double('total_cost_bus')->nullable();
            $table->double('utility_percentage_bus')->nullable();
            $table->double('utility_bus')->nullable();
            $table->double('qty_pickup')->nullable();
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
            $table->double('utility_pickup')->nullable();
            $table->double('net_rate')->nullable();
            $table->double('tax')->nullable();
            $table->double('total')->nullable();
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
        Schema::dropIfExists('budgets');
    }
};
