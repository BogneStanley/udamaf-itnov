<?php

namespace App\Http\Controllers;

use App\CmuDara;
use App\Http\Requests\StoreCmuDara;
use Illuminate\Http\Request;

class CmuDaraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $table_datas = CmuDara::all();
        return view("pages.dara.list", ["table_datas" => $table_datas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        //return back()->with("success", "Item is ok");
        return view('pages.dara.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCmuDara $request)
    {
        //


        if (!empty($request->validator) && $request->validator->fails()) {
            return redirect()->back()->withErrors($request->validator->errors())->withInput()->with("error", 'Veillez verifier les données entre sur le formulaire');
        }

        //dd($request->all());

        CmuDara::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'date_naissance' => $request->date_naissance,
            'lieu_naissance' => $request->lieu_naissance,
            'classe' => $request->classe,
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
            'couverture_maladie' => $request->couverture_malidie,
            'prog_bourse_famille' => $request->bourse_sec_familiale,
            'montant_affiliation' => $request->montant_affiliation,
            'date_affiliation' => $request->date_affiliation,
            'unite_departemental' => $request->unit_depart,
            'contact_dg' => $request->contact_dg,
        ]);

        return redirect()->route("cmu_dara.list")->with('success', 'Opération réussi');
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
