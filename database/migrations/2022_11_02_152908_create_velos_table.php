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
        Schema::create('velos', function (Blueprint $table) {
            $table->id();
            $table->string('reference');
            $table->string('price');
            $table->string('color');
            $table->string('nbr_place');
            $table->unsignedBigInteger('balade_id')->nullable();
            $table->foreign('balade_id')->references('id')->on('balades')->onDelete('set null');
            $table->unsignedBigInteger('magasin_id')->nullable();
            $table->foreign('magasin_id')->references('id')->on('magasins')->onDelete('set null');
            $table->unsignedBigInteger('model_id')->nullable();
            $table->foreign('model_id')->references('id')->on('model__velos')->onDelete('set null');
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
        Schema::dropIfExists('velos');
    }
};
