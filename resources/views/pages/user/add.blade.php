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
                <h4 class="card-title">Nouvel Etudiant</h4>
                <div class="table-responsive" id="myGroup">
                    <form action="{{ route('admin.register') }}" method="POST">
                        {{ csrf_field() }}
                        <div>
                            <div class="" style="border-left: 1px solid orange" id="collapseExample1">
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
                                            <input class="form-control" type="text" placeholder="Prénom" name="prenom"
                                                value="{{ old('prenom') }}" required autofocus>

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
                                            <label class="form-label" for="">Email</label>
                                            <input class="form-control" type="email" placeholder="Email" name="email"
                                                value="{{ old('email') }}" required autofocus>

                                            @if ($errors->has('email'))
                                            <div class="mt-3">
                                                <span class="help-block" style="color: rgb(242, 64, 64)">
                                                    {{ $errors->first('email') }}
                                                </span>
                                            </div>
                                            @endif
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label class="form-label" for="">Photo</label>
                                            <label class="form-control btn btn-dark" for="imageFile"
                                                style="width: 100%">
                                                Selectionner
                                                un
                                                fichier
                                                <input class="form-control" id="imageFile" type="file"
                                                    placeholder="Lieu de naissance" style="display: none" name="image"
                                                    value="{{ old('image') }}" autofocus>

                                                @if ($errors->has('image'))
                                                <div class="mt-3">
                                                    <span class="help-block" style="color: rgb(242, 64, 64)">
                                                        {{ $errors->first('image') }}
                                                    </span>
                                                </div>
                                                @endif
                                            </label>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            <label class="form-label" for="">Mot de passe</label>
                                            <input class="form-control" type="password" placeholder="Mot de passe"
                                                name="password" value="{{ old('password') }}" required autofocus>

                                            @if ($errors->has('password'))
                                            <div class="mt-3">
                                                <span class="help-block" style="color: rgb(242, 64, 64)">
                                                    {{ $errors->first('password') }}
                                                </span>
                                            </div>
                                            @endif
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label class="form-label" for="">Confirmer le mot de passe</label>
                                            <input class="form-control" type="password"
                                                placeholder="Confirmer le mot de passe" name="password_confirmation"
                                                value="{{ old('password_confirmation') }}" required autofocus>

                                            @if ($errors->has('password_confirmation'))
                                            <div class="mt-3">
                                                <span class="help-block" style="color: rgb(242, 64, 64)">
                                                    {{ $errors->first('password_confirmation') }}
                                                </span>
                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 form-group">
                                            <label class="form-label" for="">Role</label>
                                            <div class="d-flex flex-wrap">


                                                <div class="mr-4">
                                                    <input type="radio" name="role" id="role" value="1"
                                                        value="{{ old('role') }}" required autofocus>


                                                    <label class="form-check-label" for="role">
                                                        Super admin
                                                    </label>
                                                    @if ($errors->has('role'))
                                                    <div class="mt-3">
                                                        <span class="help-block" style="color: rgb(242, 64, 64)">
                                                            {{ $errors->first('role') }}
                                                        </span>
                                                    </div>
                                                    @endif
                                                </div>
                                                <div class="mr-4">
                                                    <input type="radio" name="role" id="role2" value="2"
                                                        value="{{ old('role') }}" required autofocus>


                                                    <label class="form-check-label" for="role2">
                                                        Admin
                                                    </label>
                                                    @if ($errors->has('role'))
                                                    <div class="mt-3">
                                                        <span class="help-block" style="color: rgb(242, 64, 64)">
                                                            {{ $errors->first('role') }}
                                                        </span>
                                                    </div>
                                                    @endif
                                                </div>
                                                <div class="">
                                                    <input type="radio" name="role" id="role3" value="3"
                                                        value="{{ old('role') }}" checked required autofocus>


                                                    <label class="form-check-label" for="role3">
                                                        Agent
                                                    </label>
                                                    @if ($errors->has('role'))
                                                    <div class="mt-3">
                                                        <span class="help-block" style="color: rgb(242, 64, 64)">
                                                            {{ $errors->first('role') }}
                                                        </span>
                                                    </div>
                                                    @endif
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn mt-3 float-right btn-primary">Ajouter un nouvel
                            utilisateur</button>
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
