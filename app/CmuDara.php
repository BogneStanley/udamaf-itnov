<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CmuDara extends Model
{
    //
    protected $fillable = [
        'nom',
        'prenom',
        'date_naissance',
        'lieu_naissance',
        'classe',
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
        'couverture_maladie',
        'prog_bourse_famille',
        'montant_affiliation',
        'date_affiliation',
        'unite_departemental',
        'contact_dg',
    ];
}
