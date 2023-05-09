<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefugiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('refugi', function (Blueprint $table) {
            $table->id();
            $table->string("nom");
            $table->integer("altitud")->nullable();
            $table->boolean("guardat")->nullable();
            $table->integer("capacitat_total")->nullable();
            $table->integer("capacitat_actual")->nullable();
            $table->integer("telefon")->nullable();
            $table->unsignedBigInteger("entitat_id")->nullable();
            $table->foreign('entitat_id')->references('id')->on('entitat');
            $table->unsignedBigInteger("municipi_id");
            $table->foreign('municipi_id')->references('id')->on('municipi');
            $table->boolean("wifi")->nullable();
            $table->boolean("dutxa")->nullable();
            $table->boolean("aigua_calenta")->nullable();
            $table->boolean("mantes")->nullable();
            $table->boolean("calefaccio")->nullable();
            $table->boolean("vater")->nullable();
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
        Schema::dropIfExists('refugi');
    }
}
