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
            $table->string('email');
            $table->string('name1');
            $table->string('name2');
            $table->string('gender');
            $table->string('pic');
            $table->string('slug');
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->string('std_id')->nullable();
            $table->string('session')->nullable();
            $table->string('current_status')->nullable();
            $table->string('interest')->nullable();
            $table->text('bio')->nullable();
            
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
