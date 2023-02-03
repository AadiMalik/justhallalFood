<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCovidPostsTable extends Migration
{
    public function up()
    {
        Schema::create('covid_posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('excerpt');
            $table->longText('detail');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
