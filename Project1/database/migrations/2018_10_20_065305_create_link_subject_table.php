<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLinkSubjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('link_subject', function (Blueprint $table) {
            $table->increments('id');// increments - гибрид первичного ключа, счётчика и целочисленного (int) поля
            $table->integer('subject_id')->unsigned();
            $table->foreign('subject_id')->references('id')->on('subjects'); 
            $table->integer('link_id')->unsigned(); 
            $table->foreign('link_id')->references('id')->on('links');
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('link_subject');
    }
}
