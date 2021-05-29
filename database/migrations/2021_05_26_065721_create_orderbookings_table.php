<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderbookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orderbookings', function (Blueprint $table) {
            $table->id();
            $table->integer('service_id');
            $table->integer('admin_id');
            $table->string('status');
            $table->string('payment_method');
            $table->string('payment_status');
            $table->string('address');
            $table->date('pickup_date');
            $table->date('delivery_date');
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
        Schema::dropIfExists('orderbookings');
    }
}
