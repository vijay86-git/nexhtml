<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInterviewLabelSubjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interview_label_subject', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('interview_label_id')->unsigned()->comment('Interview Label Id');

            $table->integer('subject_id')->unsigned()->comment('Subject Id');

            $table->foreign('interview_label_id')->references('id')->on('interview_label');

            $table->foreign('subject_id')->references('id')->on('subject');

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
        Schema::dropIfExists('interview_label_subject');
    }
}
