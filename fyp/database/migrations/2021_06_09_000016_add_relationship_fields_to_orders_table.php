<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToOrdersTable extends Migration
{
    public function up()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->unsignedBigInteger('pharmacy_id');
            $table->foreign('pharmacy_id', 'pharmacy_fk_3964242')->references('id')->on('pharmacies');
            $table->unsignedBigInteger('customer_id');
            $table->foreign('customer_id', 'customer_fk_3950901')->references('id')->on('users');
        });
    }
}
