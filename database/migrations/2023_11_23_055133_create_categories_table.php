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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name',100)->unique();
            $table->string('slug',100)->unique();
            $table->string('image', 100)->nullable();
            $table->tinyInteger('tags');
            $table->unsignedBigInteger('brand_id');
            $table->bigInteger('parent_id')->nullable();
            $table->foreign('brand_id')->references('id')->on('brands');
            $table->tinyInteger('status')->default(1);
            $table->text('description');    
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
        Schema::dropIfExists('categories');
    }
};