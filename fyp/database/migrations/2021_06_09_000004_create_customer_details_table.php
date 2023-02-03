<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerDetailsTable extends Migration
{
    public function up()
    {
        Schema::create('customer_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('province')->nullable();
            $table->string('city')->nullable();
            $table->string('phone');
            $table->string('address');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
