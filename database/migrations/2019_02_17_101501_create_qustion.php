<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQustion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qustions', function (Blueprint $table) {
            $table->increments('id');
            $table->String('qustion_title');
            $table->text('qustion_desc');
            $table->integer('catagoty_id')->unsigned();
            $table->foreign('catagoty_id')->references('id')->on('catagorys');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('qustions');
    }
}
