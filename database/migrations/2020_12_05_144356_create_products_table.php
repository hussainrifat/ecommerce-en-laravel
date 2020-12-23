<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
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
            $table->string('product_name');
            $table->string('category_name');
            $table->integer('product_selling_price');
            $table->integer('product_discount_price')->nullable();
            $table->string('product_image');
            $table->string('product_long_description');
            $table->string('product_short_description');
            $table->integer('product_quantity');
            $table->string('product_slug');
            $table->string('active_status');
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
}
