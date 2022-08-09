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
        Schema::create('servise_models', function (Blueprint $table) {
            $table->id();
            $table->text('slogan');
            $table->text('description');
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
            //четвертая колонка
            $table->string('icon4');
            $table->text('text4');
            $table->text('opisanie4');
            //пятая колонка
            $table->string('icon5');
            $table->text('text5');
            $table->text('opisanie5');
            //шестая колонка
            $table->string('icon6');
            $table->text('text6');
            $table->text('opisanie6');
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
        Schema::dropIfExists('servise_models');
    }
};
