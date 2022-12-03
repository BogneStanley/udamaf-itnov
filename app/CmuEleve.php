<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CmuEleve extends Model
{
    //
    protected $fillable = [
        'code',
        'nom',
        'prenom',
        'date_naissance',
        'lieu_naissance',
        'genre',
        'photo',
        'tuteur',
        'phone_tuteur',
        'email',
        'fax',
        'adresse',
        'region',
        'ia',
        'departement',
        'ief',
        'unit_assurance_maladie',
        'nom_etablissement',
        'nature_etablissement',
        'type_etablissement',
        'couverture_maladie',
        'prog_bourse_famille',
        'montant_affiliation',
        'date_affiliation',
        'unite_departemental',
        'contact_dg',
    ];
}
