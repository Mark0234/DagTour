<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_section_one_models', function (Blueprint $table) {
            $table->id();
            $table->text('slogan');
            $table->text('description');
            $table->text('img');
            //первая колонка
            $table->string('icon1');
            $table->text('text1');
            $table->text('opisanie1');
            //вторая колонка
            $table->string('icon2');
            $table->text('text2');
            $table->text('opisanie2');
            //третья колонка
            $table->string('icon3');
            $table->text('text3');
            $table->text('opisanie3');
            //третья колонка
            $table->string('icon4');
            $table->text('text4');
            $table->text('opisanie4');
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
        Schema::dropIfExists('about_section_one_models');
    }
};
