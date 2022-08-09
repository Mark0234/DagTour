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
        Schema::create('navbar_models', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('perexod1');
            $table->string('perexod2');
            $table->string('perexod3');
            $table->string('perexod4');
            $table->string('perexod5');
            $table->string('perexod6');
            $table->string('namebtn');
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
        Schema::dropIfExists('navbar_models');
    }
};
