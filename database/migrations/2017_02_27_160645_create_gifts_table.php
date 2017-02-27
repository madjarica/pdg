<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGiftsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gifts', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('event_id')->unsigned();
            $table->string('gift_name', 60);
            $table->text('gift_description');
            $table->text('gift_images');
            $table->tinyInteger('gift_count');
            $table->string('gift_price', 60);
            $table->text('gift_purchase_location');
            $table->text('gift_url');
            $table->tinyInteger('gift_status');
            $table->timestamps();

            $table->foreign('event_id')->references('id')->on('events')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('gifts');
    }
}
