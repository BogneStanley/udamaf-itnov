<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class StoreCmuEleve extends FormRequest
{
    public $validator = null;

    protected function failedValidation(Validator $validator)
    {
        $this->validator = $validator;
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {

        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "code" => "required",
            "nom" => "required",
            "prenom" => "required",
            "date_naissance" => "required",
            "lieu_naissance" => "required",
            "genre" => "required",
            "image" => "required",
            "nom_tuteur" => "required",
            "tel_tuteur" => "required",
            "email" => "required",
            "fax" => "required",
            "adresse" => "required",
            "region" => "required",
            "ia" => "required",
            "departement" => "required",
            "ief" => "required",
            "unit_dep_ass_maladie" => "required",
            "nom_etablissement" => "required",
            "nature_etablissement" => "required",
            "type_etablissement" => "required",
            "couverture_malidie" => "required",
            "bourse_sec_familiale" => "required",
            "montant_affiliation" => "required",
            "date_affiliation" => "required",
            "unit_depart" => "required",
            "contact_dg" => "required",
        ];
    }

    /**
     * Configure the validator instance.
     *
     * @param  \Illuminate\Validation\Validator  $validator
     * @return void
     */
}
