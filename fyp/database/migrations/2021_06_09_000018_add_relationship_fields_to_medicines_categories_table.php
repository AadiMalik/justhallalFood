<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToMedicinesCategoriesTable extends Migration
{
    public function up()
    {
        Schema::table('medicines_categories', function (Blueprint $table) {
            $table->unsignedBigInteger('parent_category_id')->nullable();
            $table->foreign('parent_category_id', 'parent_category_fk_3950419')->references('id')->on('medicines_categories');
        });
    }
}
