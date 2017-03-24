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
        Schema::create('users', function(Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->string('email', 100)->unique();;
            $table->string('password', 100);
            $table->string('password_temp', 100)->nullable();
            $table->string('remember_token', 100)->nullable();
            $table->string('code', 60)->nullable();
            $table->tinyInteger('status');
            $table->tinyInteger('active')->nullable();
            $table->string('ip_address', 40);
            $table->dateTime('last_login_date')->nullable();
            $table->integer('number_of_logins');
            $table->tinyInteger('subscription');
            $table->string('first_name', 60);
            $table->string('last_name', 60);
            $table->string('profile_image', 255);
            $table->string('phone_number', 60);
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
        Schema::drop('users');
    }
}
