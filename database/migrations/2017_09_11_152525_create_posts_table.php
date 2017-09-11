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
            $table->string('marka');
            $table->string('model');
            $table->string('modifikaciq');
            $table->string('tip_dvigatel');
            $table->string('sustoqnie');

            $table->string('moshtnost');
            $table->string('evrostandart');
            $table->string('skorostna_kutiq');
            $table->string('kategoriq');

            $table->string('cena');
            $table->string('valuta');
            $table->string('data_proizvodstvo');
            $table->string('godina_proizvodstvo');
            $table->string('probeg');

            $table->boolean('po_dogovarqne');

            $table->string('cvqt');
            $table->string('region');
            $table->string('naseleno_mqsto');
            $table->string('validnost_na_obqvata');
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
