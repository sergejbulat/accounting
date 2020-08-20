<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('invoice_id')->unsigned();
            $table->integer('invoice_product_id')->unsigned();
            $table->integer('quantity')->nullable();
            $table->decimal('price')->nullable();
            $table->foreign('invoice_product_id')->references('id')->on('invoice_products');
            $table->foreign('invoice_id')->references('id')->on('invoices');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('sales');
    }
}
