<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('links', function (Blueprint $table) {

            $table->increments('id'); // increments - гибрид первичного ключа, счётчика и целочисленного (int) поля
            $table->string('hyperlink',255);
            $table->string('title',100);
            $table->string('email',50)->unique();  
            $table->dateTime('published_at')->useCurrent();
            // как вариант - ...->useCurrent() - это уже от Laravel, а не собственно php
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
        Schema::dropIfExists('links');
    }
}
