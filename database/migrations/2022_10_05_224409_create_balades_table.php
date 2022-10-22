<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('balades', function (Blueprint $table) {
            $table->id();
            $table->string("image");
            $table->string("name");
            $table->dateTime("starting_hour");
            $table->dateTime("ending_hour");
            $table->integer("places");            
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
        Schema::dropIfExists('balades');
    }
};
