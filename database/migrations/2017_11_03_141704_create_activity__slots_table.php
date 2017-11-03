<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivitySlotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activity__slots', function (Blueprint $table) {
            $table->increments('id');
            $table->datetime('available_date')->nullable();
            $table->datetime('available_time')->nullable();
            $table->integer('number_of_participants')->unsigned()->nullable();
            $table->integer('activity_id')->unsigned()->nullable();
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
        Schema::dropIfExists('activity__slots');
    }
}
