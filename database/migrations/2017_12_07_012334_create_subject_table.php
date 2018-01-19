<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subject', function (Blueprint $table) {

            $table->increments('id');

            $table->string('name')->comment('Name');

            $table->string('slug')->comment('slug');
            
            $table->string('logo')->comment('Logo')->nullable();

            $table->tinyInteger('sort')->comment('Sort')->default(1);

            $table->tinyInteger('show_nav')->comment('Show in Navigation')->default(0);

            $table->text('page_title')->comment('Page Title');

            $table->text('meta_keywords')->comment('Meta Keywords')->nullable();

            $table->text('meta_description')->comment('Meta Description')->nullable();

            $table->text('about')->comment('about')->nullable();

            $table->tinyInteger('status')->unsigned()->comment('Status')->default(1);

            $table->integer('unix_timestamp')->comment('Timestamp')->default(0);

            $table->timestamps();

            $table->index(['name']);
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subject');
    }
}
