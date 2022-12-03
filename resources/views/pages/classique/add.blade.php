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
                        <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0"
                            aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8 grid-margin stretch-card" style="position: relative; ">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Nouveau CMU Elève</h4>
                    <div class="table-responsive" id="myGroup">
                        <div>
                            <p>
                                <a class="nav-link" style="font-weight: 600; font-size: 16px; color: rgb(131, 114, 114);"
                                    onclick="collapse" data-toggle="collapse" href="#collapseExample1" role="button"
                                    aria-expanded="false" aria-controls="collapseExample1">
                                    Informations
                                </a>
                            </p>
                            <div class="collapse" style="border-left: 1px solid orange" id="collapseExample1">
                                <div class="card card-body">
                                    <form action="
                                    ">
                                        <div class="form-group">
                                            <label class="form-label" for="">Code</label>
                                            <input class="form-control" type="text" placeholder="Code">
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 form-group">
                                                <label class="form-label" for="">Nom</label>
                                                <input class="form-control" type="text" placeholder="Nom">
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label class="form-label" for="">Prénom</label>
                                                <input class="form-control" type="text" placeholder="Prénom">
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 form-group">
                                                <label class="form-label" for="">Genre</label>
                                                <input class="form-control" type="text" placeholder="Date de naissance">
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label class="form-label" for="">Photo</label>
                                                <label class="form-control btn btn-dark" for="imageFile"
                                                    style="width: 100%">
                                                    Selectionner
                                                    un
                                                    fichier
                                                    <input class="form-control" id="imageFile" type="file"
                                                        placeholder="Lieu de naissance" style="display: none">
                                                </label>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 form-group">
                                                <label class="form-label" for="">Nom du père ou du tuteur</label>
                                                <input class="form-control" type="text"
                                                    placeholder="Nom du père ou du tuteur">
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label class="form-label" for="">Téléphone du père ou du
                                                    tuteur</label>
                                                <input class="form-control" type="text"
                                                    placeholder="Téléphone du père ou du tuteur">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 form-group">
                                                <label class="form-label" for="">Email</label>
                                                <input class="form-control" type="text" placeholder="Email">
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label class="form-label" for="">Fax</label>
                                                <input class="form-control" type="text" placeholder="Fax">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 form-group">
                                                <label class="form-label" for="">Adresse</label>
                                                <input class="form-control" type="text" placeholder="Adresse">
                                            </div>
                                        </div>


                                    </form>
                                </div>
                            </div>
                        </div>
                        <div>
                            <p>
                                <a class="nav-link" style="font-weight: 600; font-size: 16px; color: rgb(131, 114, 114);"
                                    data-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false"
                                    aria-controls="collapseExample2">
                                    Localisation
                                </a>
                            </p>
                            <div class="collapse" style="border-left: 1px solid orange" id="collapseExample2">
                                <div class="card card-body">
                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            <label class="form-label" for="">Region</label>
                                            <input class="form-control" type="text" placeholder="Region">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label class="form-label" for="">IA</label>
                                            <input class="form-control" type="text" placeholder="IA">
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            <label class="form-label" for="">Département</label>
                                            <input class="form-control" type="text" placeholder="Département">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label class="form-label" for="">IEF</label>
                                            <input class="form-control" type="text" placeholder="IEF">
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 form-group">
                                            <label class="form-label" for="">Unité départemental d'assurance
                                                maladie</label>
                                            <input class="form-control" type="text"
                                                placeholder="Unité départemental d'assurance maladie">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <p>
                                <a class="nav-link" style="font-weight: 600; font-size: 16px; color: rgb(131, 114, 114);"
                                    data-toggle="collapse" href="#collapseExample3" role="button" aria-expanded="false"
                                    aria-controls="collapseExample3">
                                    Etablissement
                                </a>
                            </p>
                            <div class="collapse" style="border-left: 1px solid orange" id="collapseExample3">
                                <div class="card card-body">
                                    <div class="row">
                                        <div class="col-md-12 form-group">
                                            <label class="form-label" for="">Nom de l'établissement</label>
                                            <input class="form-control" type="text"
                                                placeholder="Nom de l'établissement">
                                        </div>

                                    </div>
                                    <div class="row">

                                        <div class="col-md-12 form-group">
                                            <label class="form-label" for="">Nature</label>
                                            <div class="d-flex flex-wrap">


                                                <div class="mr-2">
                                                    <input type="radio" name="exampleRadios" id="exampleRadios2"
                                                        value="option2">
                                                    <label class="form-check-label" for="exampleRadios2">
                                                        Public
                                                    </label>
                                                </div>
                                                <div class="">
                                                    <input type="radio" name="exampleRadios" id="exampleRadios2"
                                                        value="option2">
                                                    <label class="form-check-label" for="exampleRadios2">
                                                        Privé
                                                    </label>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 form-group">
                                            <label class="form-label" for="">Type d'établissement</label>
                                            <div class="flex-wrap">

                                                <div>
                                                    <input type="radio" name="exampleRadios" id="exampleRadios1"
                                                        value="option1" checked>
                                                    <label class="form-check-label" for="exampleRadios1">
                                                        Elémentaire
                                                    </label>
                                                </div>


                                                <div class="">
                                                    <input type="radio" name="exampleRadios" id="exampleRadios2"
                                                        value="option2">
                                                    <label class="form-check-label" for="exampleRadios2">
                                                        Moyen
                                                    </label>
                                                </div>
                                                <div class="">
                                                    <input type="radio" name="exampleRadios" id="exampleRadios2"
                                                        value="option2">
                                                    <label class="form-check-label" for="exampleRadios2">
                                                        Secondaire
                                                    </label>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <p>
                                <a class="nav-link" style="font-weight: 600; font-size: 16px; color: rgb(131, 114, 114);"
                                    data-toggle="collapse" href="#collapseExample4" role="button" aria-expanded="false"
                                    aria-controls="collapseExample4">
                                    Autre informations
                                </a>
                            </p>
                            <div class="collapse" style="border-left: 1px solid orange" id="collapseExample4">
                                <div class="card card-body">
                                    <div class="row">

                                        <div class="col-md-12 form-group">
                                            <label class="form-label" for="">L'élève a t'il déjà une couverture
                                                maladie ? (FNR, IPRES, Société d'assurance privé)</label>
                                            <div class="d-flex flex-wrap">


                                                <div class="mr-2">
                                                    <input type="radio" name="exampleRadios" id="exampleRadios2"
                                                        value="option2">
                                                    <label class="form-check-label" for="exampleRadios2">
                                                        Oui
                                                    </label>
                                                </div>
                                                <div class="">
                                                    <input type="radio" name="exampleRadios" id="exampleRadios2"
                                                        value="option2">
                                                    <label class="form-check-label" for="exampleRadios2">
                                                        Non
                                                    </label>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">

                                        <div class="col-md-12 form-group">
                                            <label class="form-label" for="">L'élève est-il déjà membre d'un
                                                ménage bénéficiaire du programme de bourses de sécurité familiale ?</label>
                                            <div class="d-flex flex-wrap">


                                                <div class="mr-2">
                                                    <input type="radio" name="exampleRadios" id="exampleRadios2"
                                                        value="option2">
                                                    <label class="form-check-label" for="exampleRadios2">
                                                        Oui
                                                    </label>
                                                </div>
                                                <div class="">
                                                    <input type="radio" name="exampleRadios" id="exampleRadios2"
                                                        value="option2">
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
                                            <input class="form-control" type="text"
                                                placeholder="Montant d'affiliation">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label class="form-label" for="">Date d'affiliation</label>
                                            <input class="form-control" type="date" placeholder="IEF">
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <p>
                                <a class="nav-link" style="font-weight: 600; font-size: 16px; color: rgb(131, 114, 114);"
                                    data-toggle="collapse" href="#collapseExample5" role="button" aria-expanded="false"
                                    aria-controls="collapseExample4">
                                    Partie reservée à l'unitée départemental d'assurance maladie
                                </a>
                            </p>
                            <div class="collapse" style="border-left: 1px solid orange" id="collapseExample5">
                                <div class="card card-body">


                                    <div class="row">
                                        <div class="col-md-12 form-group">
                                            <label class="form-label" for="">Unité départemental</label>
                                            <input class="form-control" type="text"
                                                placeholder="Montant d'affiliation">
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 form-group">
                                            <label class="form-label" for="">Contact du directeur du departement
                                                de l'unité d'assurance maladie</label>
                                            <input class="form-control" type="text"
                                                placeholder="Contact du directeur du departement de l'unité d'assurance maladie">
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
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
