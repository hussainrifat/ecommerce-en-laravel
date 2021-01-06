<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
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
            $table->string('order_no')->unique();
            $table->bigInteger('customer_id')->unsigned();
            $table->bigInteger('billing_id')->unsigned();
            $table->bigInteger('shipping_id')->unsigned();
            $table->string('active_status')->nullable();
            $table->timestamps();
            
            $table->foreign('customer_id')
            ->references('id')->on('users')
            ->onDelete('cascade');

            $table->foreign('billing_id')
            ->references('id')->on('billing_addresses')
            ->onDelete('cascade');
        
            $table->foreign('shipping_id')
            ->references('id')->on('shipping_addresses')
            ->onDelete('cascade');  

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
}
