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
        Schema::create('associations', function (Blueprint $table) {
            $table->id();
           /* $table->string('reference');
            $table->string('type');
            $table->integer('price');
            $table->string('color');
            $table->string('nbr_place');*/
            $table->string('name');
            $table->string('type');
            $table->string('email');
            $table->string('adress');
            $table->integer('phone');
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
        Schema::dropIfExists('associations');
    }
};
