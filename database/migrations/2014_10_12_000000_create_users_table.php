<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('website')->default('');
            $table->string('country')->default('');
            $table->string('aboutme')->default('');
            $table->string('facebook')->default('');
            $table->string('twitter')->default('');
            $table->string('linkedin')->default('');

            
            $table->string('email')->unique();
            $table->string('image_user')->default("xxx");
            $table->string('password');
            $table->boolean('isAdmin')->default(false);
            $table->text('disc')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
