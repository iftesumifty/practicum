<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduct1sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product1s', function (Blueprint $table) {
            $table->id();
            $table->string('self_no');
            $table->string('Book_Title');
            $table->string('Course_Name');
           
            $table->string('Writer_Name');
            $table->string('Edition');
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
        Schema::dropIfExists('product1s');
    }
}
