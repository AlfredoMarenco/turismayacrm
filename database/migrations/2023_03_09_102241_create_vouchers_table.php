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
        Schema::create('vouchers', function (Blueprint $table) {
            $table->id();
            $table->boolean('type');
            $table->string('driver_name')->nullable();
            $table->string('driver_phone')->nullable();
            $table->string('unit');
            $table->text('observations')->nullable();
            $table->foreignId('driver_id')->constrained('drivers')->nullable();
            $table->foreignId('unit_id')->constrained('units')->nullable();
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
        Schema::dropIfExists('vouchers');
    }
};
