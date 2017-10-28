<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Slider;

class CreateSlidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sliders', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string("one");
            $table->string("two");
            $table->string("three");
            $table->string("four");
            $table->string("five");
        });

        $slider = new Slider();
        $slider->one = "";
        $slider->two = "";
        $slider->three = "";
        $slider->four = "";
        $slider->five = "";
        $slider->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sliders');
    }
}
