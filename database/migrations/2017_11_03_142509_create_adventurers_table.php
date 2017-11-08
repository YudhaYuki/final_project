<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdventurersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adventurers', function (Blueprint $table) {
            $table->increments('id');

            $table->string('email')->unique();
            $table->string('password')->nullable();
            $table->string('repeat_password')->nullable();
            $table->string('name')->nullable();
            $table->string('surname')->nullable();
            $table->integer('gender_id')->unsign()->nullable();
            $table->date('date_of_birth')->nullable();
            $table->integer('nationality_id')->unsign()->nullable();
            $table->string('mobile_number', 30)->nullable();
            $table->boolean('is_admin')->nullable();
            $table->integer('permission_level')->unsign()->nullable();

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
        Schema::dropIfExists('adventurers');
    }
}
