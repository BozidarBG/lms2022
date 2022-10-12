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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->text('excerpt');
            $table->text('content');
            $table->string('image');
            $table->integer('regular_price');
            $table->integer('discount')->default(0);
            $table->integer('price_w_discount')->default(0);
            $table->tinyInteger('published')->default(0);
            $table->tinyInteger('qa_allowed')->default(1);
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
        Schema::dropIfExists('courses');
    }
};
