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
        Schema::create('registers', function (Blueprint $table) {
            $table->bigIncrements('ID_Registrato');
            $table->string('Utente');
            $table->string('Password');
            $table->string('Nome');
            $table->string('Cognome');
            $table->string('Genere');
            $table->string('Tipo', 10)->default('user');
            $table->string('Email');
            $table->string('Telefono');
            $table->date('Data_Nascita');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registers');
    }
};
