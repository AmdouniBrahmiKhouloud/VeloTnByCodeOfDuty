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
        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->dateTime('date');
            $table->integer('price');
            $table->integer('hours');
            $table->boolean('isPaid');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('velo_id');
            $table->unsignedBigInteger('facture_id')->nullable();
            $table->foreign('facture_id')->references('id')->on('factures')->onDelete('set null');
            $table->foreign('user_id')->references('id')->on("users")->onDelete('cascade');
            $table->foreign('velo_id')->references('id')->on("velos")->onDelete('cascade');
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
        Schema::dropIfExists('locations');
    }
};
