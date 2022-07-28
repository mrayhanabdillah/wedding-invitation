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
        Schema::create('anws', function (Blueprint $table) {
            $table->id();
            $table->foreignId('question_id');
            $table->string('answer');
            $table->timestamps();

            $table->foreign('question_id')->references('id')->on('asks');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('anws');
    }
};
