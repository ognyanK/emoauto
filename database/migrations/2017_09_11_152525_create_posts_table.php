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
            $table->increments('id');
            $table->timestamps();
            $table->string('brand');
            $table->string('model');
            $table->string('modification');
            $table->string('engine_type');
            $table->string('state');

            $table->string('power');
            $table->string('euro_standard');
            $table->string('transmission');
            $table->string('category');

            $table->string('price');
            $table->string('currency');
            $table->string('date_of_manufacture');
            $table->string('year_of_manufacture');
            $table->string('mileage');

            $table->boolean('negotiable');

            $table->string('color');
            $table->string('region');
            $table->string('populated_place');
            $table->string('expiration_date');

            $table->string("safety");
            $table->string("comfort");
            $table->string("other");
            $table->string("protection");
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
