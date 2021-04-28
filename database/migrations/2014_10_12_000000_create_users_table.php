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
            $table->bigIncrements('id');
            $table->string('username');
            $table->string('name');
            $table->string('mobile');
            $table->string('email')->unique();
            $table->string('password');
            
        });
        Schema::create('blogs', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->string('name');
            $table->string('title');
            $table->string('passage');
            $table->timestamp('updated_at');
            $table->timestamp('created_at');
           
            
        });

        Schema::create('chats', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->string('name');
            $table->string('message');
            $table->string('fromname');
            $table->int('fromnameid');
            $table->int('nameid');
            $table->timestamp('updated_at');
            $table->timestamp('created_at');
           
            
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
        Schema::dropIfExists('blogs');
    }
}
