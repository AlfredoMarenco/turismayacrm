<?php

use App\Models\Settlement;
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
        Schema::create('settlements', function (Blueprint $table) {
            $table->id();
            $table->enum('type',[Settlement::SALARIOS,Settlement::VIATICOS,Settlement::CASETAS,Settlement::HOSPEDAJES,Settlement::LIMPIEZA,Settlement::COMBUSTIBLES,Settlement::TALLER,Settlement::EXTRAS]);
            $table->double('value');
            $table->string('description')->nullable();
            $table->foreignId('budget_id')->constrained('budgets');
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
        Schema::dropIfExists('settlements');
    }
};
