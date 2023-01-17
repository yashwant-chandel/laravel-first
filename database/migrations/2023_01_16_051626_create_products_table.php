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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('productname');
            $table->string('sku');
            $table->string('Slug');
            $table->string('description');
            $table->string('Short_description');
            $table->string('img');
            $table->string('Gallery');
            $table->string('image_path');
            $table->integer('categories');
            $table->integer('Tags');
            $table->integer('stock');
            $table->decimal('price');
            $table->decimal('sale_price');
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
        Schema::dropIfExists('products');
    }
};
