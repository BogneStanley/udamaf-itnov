@extends('layout.master-mini')
@section('content')
    <div class="content-wrapper d-flex align-items-center justify-content-center auth theme-one"
        style="background-image: url({{ url('assets/images/auth/login_1.jpg') }}); background-size: cover;">
        <div class="row w-100">
            <div class="col-lg-4 mx-auto">
                <div class="auto-form-wrapper">
                    <form action="{{ route('admin.home') }}">
                        <div class="form-group">
                            <label class="label">Nom d'utilisateur</label>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Username">
                                <div class="input-group-append">
                                    <span class="input-group-text">
                                        <i class="mdi mdi-check-circle-outline"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="label">Mot de passe</label>
                            <div class="input-group">
                                <input type="password" class="form-control" placeholder="*********">
                                <div class="input-group-append">
                                    <span class="input-group-text">
                                        <i class="mdi mdi-check-circle-outline"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary submit-btn btn-block">Se connecter</button>
                        </div>
                        {{-- <div class="form-group d-flex justify-content-between">
                            <div class="form-check form-check-flat mt-0">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" checked> Keep me signed in </label>
                            </div>
                            <a href="#" class="text-small forgot-password text-black">Forgot Password</a>
                        </div> --}}
                        <div class="text-block text-center my-3">
                        </div>
                    </form>
                </div>
                {{-- <ul class="auth-footer">
                    <li>
                        <a href="#">Conditions</a>
                    </li>
                    <li>
                        <a href="#">Help</a>
                    </li>
                    <li>
                        <a href="#">Terms</a>
                    </li>
                </ul> --}}
            </div>
        </div>
    </div>
@endsection
