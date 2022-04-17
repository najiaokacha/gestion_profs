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
        Schema::create('professeurs', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->string('email');
            $table->string('cin');
            $table->string('image');
            $table->integer('telephone');
            $table->date('date_recrutement');
            $table->date('date_naissance');
            $table->string('specialite');
            $table->string('appartenant_a_ENSAJ');
            $table->string('Dossier_scientifique');
            $table->string('Dossier_Pedagogique');
            $table->string('Dossier_administratif');

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
        Schema::dropIfExists('professeurs');
    }
};
