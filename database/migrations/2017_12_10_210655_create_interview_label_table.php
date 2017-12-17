<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInterviewLabelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interview_label', function (Blueprint $table) {

            $table->increments('id');

            $table->string('interview_label', 512)->comment('interview label');

            $table->string('slug', 512)->comment('slug');

            $table->text('page_title')->comment('Page Title');

            $table->text('meta_keywords')->comment('Meta Keywords')->nullable();

            $table->text('meta_description')->comment('Meta Description')->nullable();

            $table->tinyInteger('status')->unsigned()->comment('Status')->default(1);

            $table->integer('unix_timestamp')->comment('Timestamp')->default(0);

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
        Schema::dropIfExists('interview_label');
    }
}
