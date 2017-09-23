<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $value = "";

            $table->increments('id');
            $table->timestamps();
            $table->string('base_category');

            $table->string('brand');
            $table->string('model')->default($value);
            $table->string('modification')->default($value);
            $table->string('engine_type');
            $table->string('state');

            $table->string('power')->default($value);
            $table->string('euro_standard')->default($value);
            $table->string('transmission');
            $table->string('category');

            $table->string('price');
            $table->string('currency')->default($value);
            $table->string('date_of_manufacture');
            $table->string('year_of_manufacture');
            $table->string('mileage');

            $table->string('color')->default($value);
            $table->string('region');
            $table->string('populated_place')->default($value);

            $table->string("safety")->default($value);
            $table->string("comfort")->default($value);
            $table->string("other")->default($value);
            $table->string("protection")->default($value);
            $table->string("exterior")->default($value);
            $table->string("interior")->default($value);
            $table->string("specialized")->default($value);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
