<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSublayoutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sublayouts', function (Blueprint $table) {
            $table->id();
            $table->string('Book_Name');
            $table->string('name');
            $table->string('Writer_Name');
            $table->string('Department_Name');
            $table->integer('Available');
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
        Schema::dropIfExists('sublayouts');
    }
}
