<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCmuElevesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cmu_eleves', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code')->uniqid();
            $table->string('nom');
            $table->string('prenom');
            $table->string('date_naissance');
            $table->string('lieu_naissance');
            $table->string('genre');
            $table->string('photo');
            $table->string('tuteur');
            $table->string('phone_tuteur');
            $table->string('email')->uniqid();
            $table->string('fax');
            $table->string('adresse');
            $table->string('region');
            $table->string('ia');
            $table->string('departement');
            $table->string('ief');
            $table->string('unit_assurance_maladie');
            $table->string('nom_etablissement');
            $table->string('nature_etablissement');
            $table->string('type_etablissement');
            $table->boolean('couverture_maladie');
            $table->boolean('prog_bourse_famille');
            $table->string('montant_affiliation');
            $table->string('date_affiliation');
            $table->string('unite_departemental');
            $table->string('contact_dg');
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
        Schema::dropIfExists('cmu_eleves');
    }
}
