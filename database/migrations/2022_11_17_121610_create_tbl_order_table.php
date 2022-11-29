<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_order', function (Blueprint $table) {
            $table->bigIncrements('order_id');
            $table->string('order_code')->nullable();
            $table->integer('customer_id')->unsigned();
            $table->integer('shipping_id')->unsigned();
            $table->integer('payment_id')->unsigned();
            $table->string('order_total');
            $table->integer('order_status');
            $table->timestamps();

            $table->foreign('customer_id')->references('customer_id')->on('tbl_customer');
            $table->foreign('shipping_id')->references('shipping_id')->on('tbl_shipping')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_order');
    }
};
