<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntitatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entitat', function (Blueprint $table) {
            $table->id();
            $table->string("nom");
            $table->unsignedBigInteger("municipi_id");
            $table->foreign('municipi_id')->references('id')->on('municipi');
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
        Schema::dropIfExists('entitat');
    }
}
