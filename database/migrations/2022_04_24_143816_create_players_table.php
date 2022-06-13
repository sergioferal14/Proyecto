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
        Schema::create('players', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellidos');
            $table->enum('posicion', ['Delantero','Centrocampista','Defensa','Portero']);
            $table->integer('dorsal');
            $table->integer('edad');
            $table->integer('peso');
            $table->integer('altura');
            $table->string('observaciones')->nullable();
            $table->string('foto')->default('players/avatar.png');
            $table->foreignId('team_id')->nullable();
            $table->foreign('team_id')->references('id')->on('teams')->onDelete('cascade');
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
        Schema::dropIfExists('players');
    }
};
