<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubjectQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subject_questions', function (Blueprint $table) {

            $table->increments('id');

            $table->integer('label_id')->unsigned()->comment('Label Id');

            $table->string('question', 512)->comment('Question');

            $table->string('slug', 512)->comment('slug');

            $table->text('answer')->comment('Answer');

            $table->tinyInteger('status')->unsigned()->comment('Status')->default(1);

            $table->text('page_title')->comment('Page Title');

            $table->text('meta_keywords')->comment('Meta Keywords')->nullable();

            $table->text('meta_description')->comment('Meta Description')->nullable();

            $table->integer('unix_timestamp')->comment('Timestamp')->default(0);

            $table->foreign('label_id')->references('id')->on('interview_label');

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
        Schema::dropIfExists('subject_questions');
    }
}
