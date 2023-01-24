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
        Schema::create('order_meta', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('Sku');
            $table->integer('quantity');
            $table->decimal('price',6,2);
            $table->string('img');
            $table->string('image_path');
            $table->integer('order_id');
            $table->integer('user_id');
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
        Schema::dropIfExists('order_meta');
    }
};
