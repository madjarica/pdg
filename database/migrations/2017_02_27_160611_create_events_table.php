<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('event_type_id')->unsigned();
            $table->integer('event_user_id')->unsigned();
            $table->string('event_name', 60);
            $table->text('event_description');
            $table->tinyInteger('event_status')->nullable();
            $table->string('event_image', 255);
            $table->dateTime('event_start');
            $table->dateTime('event_end');
            $table->dateTime('event_date');
            $table->text('event_address');
            $table->integer('event_city_id')->unsigned();
            $table->integer('event_country_id')->unsigned();

            $table->foreign('event_type_id')->references('id')->on('event_types')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('event_user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('event_city_id')->references('id')->on('cities')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('event_country_id')->references('id')->on('countries')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::drop('events');
    }
}
