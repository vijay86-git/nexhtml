<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSectionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('section', function (Blueprint $table) {
            
            $table->increments('id');

            $table->integer('subject_id')->unsigned()->comment('Subject Id)');

            $table->string('section', 255)->comment('Section Name');

            $table->tinyInteger('sort')->unsigned()->comment('Sort');

            $table->integer('unix_timestamp')->comment('Timestamp')->default(0);

            $table->tinyInteger('status')->unsigned()->comment('Status')->default(1);

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
        Schema::dropIfExists('section');
    }
}
