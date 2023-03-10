<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_details', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('order_id');
            $table->decimal('delivery_charges', 8, 2);
            $table->decimal('tax_percent', 8, 2)->nullable();
            $table->decimal('tax', 8, 2)->nullable();
            $table->decimal('commission_percent', 8, 2)->nullable();
            $table->decimal('total_commission', 8, 2)->nullable();
            $table->decimal('sub_total', 8, 2);
            $table->decimal('total', 8, 2);
            $table->string('payment_id')->nullable();
            $table->string('payment_status')->nullable();
            $table->string('accepted_status')->nullable();
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
        Schema::dropIfExists('order_details');
    }
}
