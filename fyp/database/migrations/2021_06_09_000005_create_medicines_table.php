<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicinesTable extends Migration
{
    public function up()
    {
        Schema::create('medicines', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('description')->nullable();
            $table->decimal('price', 15, 2);
            $table->boolean('in_stock')->default(0)->nullable();
            $table->date('expiry_date');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
