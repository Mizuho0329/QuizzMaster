<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Answers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        {
            Schema::create('answers', function (Blueprint $table) {
                $table->increments('id');
                $table->string('name');
                $table->boolean('isCorrect');
                $table->unsignedInteger('question_id');

                $table->foreign('question_id')
                ->references('id')
                ->on('questions')
                ->onDelete('cascade');  // If deleted from table 'questions', delete from 'answers' too
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('answers');
    }
}
