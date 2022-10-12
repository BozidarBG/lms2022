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
        Schema::create('lessons', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('course_id');
            $table->string('title');
            $table->integer('position');
            $table->text('content')->nullable();
            $table->tinyInteger('media')->default(1);//recimo 1: video sa sajta, 2: youtube, 3:tekst
            $table->string('path');
            $table->tinyInteger('published')->default(0);
            $table->tinyInteger('type')->default(1); //1 besplatna, 2 plaćena
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
        Schema::dropIfExists('lessons');
    }
};
