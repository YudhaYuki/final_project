<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');

            $table->string('full_name');
            $table->string('email');
            $table->text('comment');
            $table->boolean('approved');
            $table->integer('activity_id')->unsigned();

            $table->timestamps();
        });

        Schema::table('comments', function ($table){
            $table->foreign('activity_id')->references('id')->on('activities')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropForeign(['activity_id']);
        Schema::dropIfExists('comments');
        
    }
}
