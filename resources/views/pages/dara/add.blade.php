@php
    $withPadding = true;
@endphp
@extends('layout.master', ['title' => $withPadding])

@push('plugin-styles')
    <!-- {!! Html::style('/assets/plugins/plugin.css') !!} -->
@endpush


@section('content')
    <div class="row">
        <div class="col-12" style="height: 200px; background-color: #15905b;; position: absolute;">
        </div>
    </div>
    <div style="height: 150px"></div>
    <div class="row" style="position: relative; padding: 10px;">
        <div class="col-lg-4  grid-margin " style="position: relative; height: max-content;">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Informations</h4>
                    <p class="card-description"> Les formulaire sont organisés par section</p>
                    <p class="card-description"> Tous les champs avec * sont obligatoires</p>
                    <p class="card-description"> Remplissez tous les champs du formulaire</p>
                    <p class="card-description"> Cliquez sur le bouton enregistrer à la fin</p>
                    <p class="card-description"> Attendez le message de confirmation de l'enregistrement</p>
                    <h4 class="card-title">Progession</h4>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="25" aria-valuemin="0"
                            aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8 grid-margin stretch-card" style="position: relative; ">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title"><span class="p-2 bg-success" style="font-weight: 700; color: white;">Nouveau CMU
                            Dara</span>
                    </h4>
                    <div class="table-responsive" id="myGroup">
                        <form action="{{ route('cmu_dara.save') }}" method="POST">
                            {{ csrf_field() }}
                            <div>
                                <p>
                                    <a class="nav-link"
                                        style="font-weight: 600; font-size: 16px; color: rgb(131, 114, 114);"
                                        onclick="collapse" data-toggle="collapse" href="#collapseExample1" role="button"
                                        aria-expanded="false" aria-controls="collapseExample1">
                                        Informations
                                    </a>
                                </p>
                                <div class="collapse" style="border-left: 1px solid orange" id="collapseExample1">
                                    <div class="card card-body">


                                        <div class="row">
                                            <div class="col-md-6 form-group">
                                                <label class="form-label" for="">Nom</label>
                                                <input class="form-control" type="text" placeholder="Nom" name="nom"
                                                    value="{{ old('nom') }}" required autofocus>

                                                @if ($errors->has('nom'))
                                                    <div class="mt-3">
                                                        <span class="help-block" style="color: rgb(242, 64, 64)">
                                                            {{ $errors->first('nom') }}
                                                        </span>
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label class="form-label" for="">Prénom</label>
                                                <input class="form-control" type="text" placeholder="Prénom"
                                                    name="prenom" value="{{ old('prenom') }}" required autofocus>

                                                @if ($errors->has('prenom'))
                                                    <div class="mt-3">
                                                        <span class="help-block" style="color: rgb(242, 64, 64)">
                                                            {{ $errors->first('prenom') }}
                                                        </span>
                                                    </div>
                                                @endif
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 form-group">
                                                <label class="form-label" for="">Date de naissance</label>
                                                <input class="form-control" type="date" placeholder="Date de naissance"
                                                    name="date_naissance" value="{{ old('date_naissance') }}" required
                                                    autofocus>

                                                @if ($errors->has('date_naissance'))
                                                    <div class="mt-3">
                                                        <span class="help-block" style="color: rgb(242, 64, 64)">
                                                            {{ $errors->first('date_naissance') }}
                                                        </span>
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label class="form-label" for="">Lieu de naissance</label>
                                                <input class="form-control" type="text" placeholder="Lieu de naissance"
                                                    name="lieu_naissance" value="{{ old('lieu_naissance') }}" required
                                                    autofocus>

                                                @if ($errors->has('lieu_naissance'))
                                                    <div class="mt-3">
                                                        <span class="help-block" style="color: rgb(242, 64, 64)">
                                                            {{ $errors->first('lieu_naissance') }}
                                                        </span>
                                                    </div>
                                                @endif
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 form-group">
                                                <label class="form-label" for="">Classe</label>
                                                <input class="form-control" type="text" placeholder="Classe"
                                                    name="classe" value="{{ old('classe') }}" required autofocus>

                                                @if ($errors->has('classe'))
                                                    <div class="mt-3">
                                                        <span class="help-block" style="color: rgb(242, 64, 64)">
                                                            {{ $errors->first('classe') }}
                                                        </span>
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label class="form-label" for="">Nom du père ou du tuteur</label>
                                                <input class="form-control" type="text"
                                                    placeholder="Nom du père ou du tuteur" name="nom_tuteur"
                                                    value="{{ old('nom_tuteur') }}" required autofocus>

                                                @if ($errors->has('nom_tuteur'))
                                                    <div class="mt-3">
                                                        <span class="help-block" style="color: rgb(242, 64, 64)">
                                                            {{ $errors->first('nom_tuteur') }}
                                                        </span>
                                                    </div>
                                                @endif
                                            </div>

                                        </div>
                                        <div class="row">

                                            <div class="col-md-6 form-group">
                                                <label class="form-label" for="">Téléphone du père ou du
                                                    tuteur</label>
                                                <input class="form-control" type="text"
                                                    placeholder="Téléphone du père ou du tuteur" name="tel_tuteur"
                                                    value="{{ old('tel_tuteur') }}" required autofocus>

                                                @if ($errors->has('tel_tuteur'))
                                                    <div class="mt-3">
                                                        <span class="help-block" style="color: rgb(242, 64, 64)">
                                                            {{ $errors->first('tel_tuteur') }}
                                                        </span>
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label class="form-label" for="">Email</label>
                                                <input class="form-control" type="email" placeholder="Email"
                                                    name="email" value="{{ old('email') }}" required autofocus>

                                                @if ($errors->has('email'))
                                                    <div class="mt-3">
                                                        <span class="help-block" style="color: rgb(242, 64, 64)">
                                                            {{ $errors->first('email') }}
                                                        </span>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="row">

                                            <div class="col-md-6 form-group">
                                                <label class="form-label" for="">Fax</label>
                                                <input class="form-control" type="text" placeholder="Fax"
                                                    name="fax" value="{{ old('fax') }}" required autofocus>

                                                @if ($errors->has('fax'))
                                                    <div class="mt-3">
                                                        <span class="help-block" style="color: rgb(242, 64, 64)">
                                                            {{ $errors->first('fax') }}
                                                        </span>
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label class="form-label" for="">Adresse</label>
                                                <input class="form-control" type="text" placeholder="Adresse"
                                                    name="adresse" value="{{ old('adresse') }}" required autofocus>

                                                @if ($errors->has('adresse'))
                                                    <div class="mt-3">
                                                        <span class="help-block" style="color: rgb(242, 64, 64)">
                                                            {{ $errors->first('adresse') }}
                                                        </span>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <p>
                                    <a class="nav-link"
                                        style="font-weight: 600; font-size: 16px; color: rgb(131, 114, 114);"
                                        data-toggle="collapse" href="#collapseExample2" role="button"
                                        aria-expanded="false" aria-controls="collapseExample2">
                                        Localisation
                                    </a>
                                </p>
                                <div class="collapse" style="border-left: 1px solid orange" id="collapseExample2">
                                    <div class="card card-body">
                                        <div class="row">
                                            <div class="col-md-6 form-group">
                                                <label class="form-label" for="">Region</label>
                                                <input class="form-control" type="text" placeholder="Region"
                                                    name="region" value="{{ old('region') }}" required autofocus>

                                                @if ($errors->has('region'))
                                                    <div class="mt-3">
                                                        <span class="help-block" style="color: rgb(242, 64, 64)">
                                                            {{ $errors->first('region') }}
                                                        </span>
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label class="form-label" for="">IA</label>
                                                <input class="form-control" type="text" placeholder="IA"
                                                    name="ia" value="{{ old('ia') }}" required autofocus>

                                                @if ($errors->has('ia'))
                                                    <div class="mt-3">
                                                        <span class="help-block" style="color: rgb(242, 64, 64)">
                                                            {{ $errors->first('ia') }}
                                                        </span>
                                                    </div>
                                                @endif
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 form-group">
                                                <label class="form-label" for="">Département</label>
                                                <input class="form-control" type="text" placeholder="Département"
                                                    name="departement" value="{{ old('departement') }}" required
                                                    autofocus>

                                                @if ($errors->has('departement'))
                                                    <div class="mt-3">
                                                        <span class="help-block" style="color: rgb(242, 64, 64)">
                                                            {{ $errors->first('departement') }}
                                                        </span>
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label class="form-label" for="">IEF</label>
                                                <input class="form-control" type="text" placeholder="IEF"
                                                    name="ief" value="{{ old('ief') }}" required autofocus>

                                                @if ($errors->has('ief'))
                                                    <div class="mt-3">
                                                        <span class="help-block" style="color: rgb(242, 64, 64)">
                                                            {{ $errors->first('ief') }}
                                                        </span>
                                                    </div>
                                                @endif
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 form-group">
                                                <label class="form-label" for="">Unité départemental d'assurance
                                                    maladie</label>
                                                <input class="form-control" type="text"
                                                    placeholder="Unité départemental d'assurance maladie"
                                                    name="unit_dep_ass_maladie" value="{{ old('unit_dep_ass_maladie') }}"
                                                    required autofocus>

                                                @if ($errors->has('unit_dep_ass_maladie'))
                                                    <div class="mt-3">
                                                        <span class="help-block" style="color: rgb(242, 64, 64)">
                                                            {{ $errors->first('unit_dep_ass_maladie') }}
                                                        </span>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <p>
                                    <a class="nav-link"
                                        style="font-weight: 600; font-size: 16px; color: rgb(131, 114, 114);"
                                        data-toggle="collapse" href="#collapseExample3" role="button"
                                        aria-expanded="false" aria-controls="collapseExample3">
                                        Etablissement
                                    </a>
                                </p>
                                <div class="collapse" style="border-left: 1px solid orange" id="collapseExample3">
                                    <div class="card card-body">
                                        <div class="row">
                                            <div class="col-md-12 form-group">
                                                <label class="form-label" for="">Nom de l'établissement</label>
                                                <input class="form-control" type="text"
                                                    placeholder="Nom de l'établissement" name="nom_etablissement"
                                                    value="{{ old('nom_etablissement') }}" required autofocus>

                                                @if ($errors->has('nom_etablissement'))
                                                    <div class="mt-3">
                                                        <span class="help-block" style="color: rgb(242, 64, 64)">
                                                            {{ $errors->first('nom_etablissement') }}
                                                        </span>
                                                    </div>
                                                @endif
                                            </div>

                                        </div>


                                    </div>
                                </div>
                            </div>
                            <div>
                                <p>
                                    <a class="nav-link"
                                        style="font-weight: 600; font-size: 16px; color: rgb(131, 114, 114);"
                                        data-toggle="collapse" href="#collapseExample4" role="button"
                                        aria-expanded="false" aria-controls="collapseExample4">
                                        Autre informations
                                    </a>
                                </p>
                                <div class="collapse" style="border-left: 1px solid orange" id="collapseExample4">
                                    <div class="card card-body">
                                        <div class="row">

                                            <div class="col-md-12 form-group">
                                                <label class="form-label" for="">L'élève a t'il déjà une
                                                    couverture
                                                    maladie ? (FNR, IPRES, Société d'assurance privé)</label>
                                                <div class="d-flex flex-wrap">


                                                    <div class="mr-2">
                                                        <input type="radio" name="couverture_malidie"
                                                            id="couverture_malidie" value="1"
                                                            value="{{ old('couverture_malidie') }}" required autofocus>

                                                        @if ($errors->has('couverture_malidie'))
                                                            <div class="mt-3">
                                                                <span class="help-block" style="color: rgb(242, 64, 64)">
                                                                    {{ $errors->first('couverture_malidie') }}
                                                                </span>
                                                            </div>
                                                        @endif
                                                        <label class="form-check-label" for="couverture_malidie">
                                                            Oui
                                                        </label>
                                                    </div>
                                                    <div class="">
                                                        <input type="radio" name="couverture_malidie"
                                                            id="couverture_malidie2" value="0"
                                                            value="{{ old('couverture_malidie') }}" required autofocus>

                                                        @if ($errors->has('couverture_malidie'))
                                                            <div class="mt-3">
                                                                <span class="help-block" style="color: rgb(242, 64, 64)">
                                                                    {{ $errors->first('couverture_malidie') }}
                                                                </span>
                                                            </div>
                                                        @endif
                                                        <label class="form-check-label" for="couverture_malidie2">
                                                            Non
                                                        </label>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">

                                            <div class="col-md-12 form-group">
                                                <label class="form-label" for="">L'élève est-il déjà membre d'un
                                                    ménage bénéficiaire du programme de bourses de sécurité familiale
                                                    ?</label>
                                                <div class="d-flex flex-wrap">


                                                    <div class="mr-2">
                                                        <input type="radio" name="bourse_sec_familiale"
                                                            id="bourse_sec_familiale" value="1"
                                                            value="{{ old('bourse_sec_familiale') }}" required autofocus>

                                                        @if ($errors->has('bourse_sec_familiale'))
                                                            <div class="mt-3">
                                                                <span class="help-block" style="color: rgb(242, 64, 64)">
                                                                    {{ $errors->first('bourse_sec_familiale') }}
                                                                </span>
                                                            </div>
                                                        @endif
                                                        <label class="form-check-label" for="bourse_sec_familiale">
                                                            Oui
                                                        </label>
                                                    </div>
                                                    <div class="">
                                                        <input type="radio" name="bourse_sec_familiale"
                                                            id="bourse_sec_familiale" value="0"
                                                            value="{{ old('bourse_sec_familiale') }}" required autofocus>

                                                        @if ($errors->has('bourse_sec_familiale'))
                                                            <div class="mt-3">
                                                                <span class="help-block" style="color: rgb(242, 64, 64)">
                                                                    {{ $errors->first('bourse_sec_familiale') }}
                                                                </span>
                                                            </div>
                                                        @endif
                                                        <label class="form-check-label" for="exampleRadios2">
                                                            Non
                                                        </label>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 form-group">
                                                <label class="form-label" for="">Montant d'affiliation</label>
                                                <input class="form-control" type="number"
                                                    placeholder="Montant d'affiliation" name="montant_affiliation"
                                                    value="{{ old('montant_affiliation') }}" required autofocus>

                                                @if ($errors->has('montant_affiliation'))
                                                    <div class="mt-3">
                                                        <span class="help-block" style="color: rgb(242, 64, 64)">
                                                            {{ $errors->first('montant_affiliation') }}
                                                        </span>
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label class="form-label" for="">Date d'affiliation</label>
                                                <input class="form-control" type="date" placeholder="IEF"
                                                    name="date_affiliation" value="{{ old('date_affiliation') }}"
                                                    required autofocus>

                                                @if ($errors->has('date_affiliation'))
                                                    <div class="mt-3">
                                                        <span class="help-block" style="color: rgb(242, 64, 64)">
                                                            {{ $errors->first('date_affiliation') }}
                                                        </span>
                                                    </div>
                                                @endif
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <p>
                                    <a class="nav-link"
                                        style="font-weight: 600; font-size: 16px; color: rgb(131, 114, 114);"
                                        data-toggle="collapse" href="#collapseExample5" role="button"
                                        aria-expanded="false" aria-controls="collapseExample4">
                                        Partie reservée à l'unitée départemental d'assurance maladie
                                    </a>
                                </p>
                                <div class="collapse" style="border-left: 1px solid orange" id="collapseExample5">
                                    <div class="card card-body">


                                        <div class="row">
                                            <div class="col-md-12 form-group">
                                                <label class="form-label" for="">Unité départemental</label>
                                                <input class="form-control" type="text"
                                                    placeholder="Montant d'affiliation" name="unit_depart"
                                                    value="{{ old('unit_depart') }}" required autofocus>

                                                @if ($errors->has('unit_depart'))
                                                    <div class="mt-3">
                                                        <span class="help-block" style="color: rgb(242, 64, 64)">
                                                            {{ $errors->first('unit_depart') }}
                                                        </span>
                                                    </div>
                                                @endif
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 form-group">
                                                <label class="form-label" for="">Contact du directeur du
                                                    departement
                                                    de l'unité d'assurance maladie</label>
                                                <input class="form-control" type="text"
                                                    placeholder="Contact du directeur du departement de l'unité d'assurance maladie"
                                                    name="contact_dg" value="{{ old('contact_dg') }}" required autofocus>

                                                @if ($errors->has('contact_dg'))
                                                    <div class="mt-3">
                                                        <span class="help-block" style="color: rgb(242, 64, 64)">
                                                            {{ $errors->first('contact_dg') }}
                                                        </span>
                                                    </div>
                                                @endif
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn mt-3 float-right btn-primary">Enregistrer</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('plugin-scripts')
    {!! Html::script('/assets/plugins/chartjs/chart.min.js') !!}
    {!! Html::script('/assets/plugins/jquery-sparkline/jquery.sparkline.min.js') !!}
@endpush

@push('custom-scripts')
    {!! Html::script('/assets/js/dashboard.js') !!}
@endpush
@push('custom-scripts')
    {!! Html::script('/assets/js/chart.js') !!}
@endpush
