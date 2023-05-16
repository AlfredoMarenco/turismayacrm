<?php

use App\Models\Split;
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
        Schema::create('splits', function (Blueprint $table) {
            $table->id();
            $table->text('description');
            $table->double('amount');
            $table->enum('status',[Split::PENDIENTE,Split::PAGADO])->default(Split::PENDIENTE);
            $table->enum('payment_type',[Split::EFECTIVO,Split::TRANSFERENCIA,Split::CREDITO,Split::PAYPAL,Split::LICITACION])->default(Split::PAYPAL);
            $table->text('comment')->nullable();
            $table->foreignId('payment_id')->constrained('payments');
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
        Schema::dropIfExists('splits');
    }
};
