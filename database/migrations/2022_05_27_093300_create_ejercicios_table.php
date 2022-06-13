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
        Schema::create('ejercicios', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('img')->default('ejercicios/noimage.png');
            $table->text('descripcion');
            $table->integer('njugadores');
            $table->enum('estado', [1, 2])->default(1); //1 privado, 2 publicado
            $table->string('tiempo');
            $table->string('material');
            
            $table->foreignId('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->foreignId('sesion_id')->nullable();
            $table->foreign('sesion_id')->references('id')->on('sesions')->onDelete('set null');

            $table->foreignId('tipo_id');
            $table->foreign('tipo_id')->references('id')->on('tipos_ejercicios')->onDelete('cascade');

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
        Schema::dropIfExists('ejercicios');
    }
};
