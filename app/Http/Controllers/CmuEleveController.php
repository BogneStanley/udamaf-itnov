<?php

namespace App\Http\Controllers;

use App\CmuEleve;
use App\Http\Requests\StoreCmuEleve;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Validator;

class CmuEleveController extends Controller
{
    use ValidatesRequests;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $table_datas = CmuEleve::all();
        return view("pages.eleves.list", ["table_datas" => $table_datas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pages.eleves.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCmuEleve $request)
    {


        if (!empty($request->validator) && $request->validator->fails()) {
            return redirect()->back()->withErrors($request->validator->errors())->withInput()->with("error", 'Veillez verifier les données entre sur le formulaire');
        }

        //dd($request->all());

        CmuEleve::create([
            'code' => $request->code,
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'date_naissance' => $request->date_naissance,
            'lieu_naissance' => $request->lieu_naissance,
            'genre' => $request->genre,
            'photo' => $request->image,
            'tuteur' => $request->nom_tuteur,
            'phone_tuteur' => $request->tel_tuteur,
            'email' => $request->email,
            'fax' => $request->fax,
            'adresse' => $request->adresse,
            'region' => $request->region,
            'ia' => $request->ia,
            'departement' => $request->departement,
            'ief' => $request->ief,
            'unit_assurance_maladie' => $request->unit_dep_ass_maladie,
            'nom_etablissement' => $request->nom_etablissement,
            'nature_etablissement' => $request->nature_etablissement,
            'type_etablissement' => $request->type_etablissement,
            'couverture_maladie' => $request->couverture_malidie,
            'prog_bourse_famille' => $request->bourse_sec_familiale,
            'montant_affiliation' => $request->montant_affiliation,
            'date_affiliation' => $request->date_affiliation,
            'unite_departemental' => $request->unit_depart,
            'contact_dg' => $request->contact_dg,
        ]);

        return redirect()->route("eleves.list")->with('success', 'Opération réussi');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
