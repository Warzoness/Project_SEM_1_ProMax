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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('fullname', 255);
            $table->string('phone',11);
            $table->string('address', 255);
            $table->string('email', 255);
            $table->text('note_checkout')->nullable();
            $table->tinyInteger('status')->default(1);
            $table->unsignedBigInteger('paymentMethod_id');
            $table->foreign('paymentMethod_id')->references('id')->on('payment_methods');
            $table->float('total_price');
            $table->softDeletes();
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
        Schema::dropIfExists('orders');
    }
};