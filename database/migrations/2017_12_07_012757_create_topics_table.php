<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTopicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('topics', function (Blueprint $table) {

            $table->increments('id');

            $table->integer('subject_id')->unsigned()->comment('Subject Id');

            $table->integer('section_id')->unsigned()->comment('Section Id');

            $table->string('topic', 512)->comment('Topic');

            $table->string('slug', 512)->comment('slug');

            $table->text('detail')->comment('Detail');

            $table->tinyInteger('sort')->unsigned()->comment('Sort');

            $table->text('page_title')->comment('Page Title');

            $table->text('meta_keywords')->comment('Meta Keywords')->nullable();

            $table->text('meta_description')->comment('Meta Description')->nullable();

            $table->tinyInteger('status')->unsigned()->comment('Status')->default(1);

            $table->integer('unix_timestamp')->comment('Timestamp')->default(0);

            $table->timestamps();

            $table->foreign('subject_id')->references('id')->on('subject');

            $table->foreign('section_id')->references('id')->on('section');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints(); 
        Schema::dropIfExists('topics');
        Sch‌​ema::enableForeignKe‌​yConstraints(); 
    }
}
