@extends('layout.master')

@push('plugin-styles')
    <!-- {!! Html::style('/assets/plugins/plugin.css') !!} -->
@endpush

@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body" style="padding: 15px 10px 5px 27px">
                    <h4><a href="{{ route('eleves.add') }}" class="btn btn-success">Ajouter CMU Eleve</a></h4>
                </div>
            </div>
        </div>

        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Liste CMU Eleves</h4>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Nom complet</th>
                                    <th>Code bénéficiaire</th>
                                    <th>Date de naissance</th>
                                    <th>Lieu de naissance</th>
                                    <th>CNI</th>
                                    <th>Tel</th>
                                    <th>Address</th>
                                    <th>Date souscription</th>
                                    <th>Montant affiliation</th>
                                    <th>Date Affiliation</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>John Doe</td>
                                    <td>53275531</td>
                                    <td>12 May 2017</td>
                                    <td>12 May 2017</td>
                                    <td>12 May 2017</td>
                                    <td>12 May 2017</td>
                                    <td>12 May 2017</td>
                                    <td>12 May 2017</td>
                                    <td>12 May 2017</td>
                                    <td>12 May 2017</td>
                                    <td>
                                        <button class="btn p-0 ">
                                            <i class="mdi mdi-account-minus"></i>
                                        </button>
                                        <button class="btn  p-0 ">
                                            <i class="mdi mdi-account-minus"></i>
                                        </button>
                                        <button class="btn  p-0 ">
                                            <i class="mdi mdi-account-minus"></i>
                                        </button>
                                        <button class="btn  p-0 ">
                                            <i class="mdi mdi-account-minus"></i>
                                        </button>
                                        <button class="btn  p-0 ">
                                            <i class="mdi mdi-account-minus"></i>
                                        </button>
                                        <button class="btn  p-0 ">
                                            <i class="mdi mdi-account-minus"></i>
                                        </button>
                                    </td>


                                </tr>
                                <tr>
                                    <td>Jacob Jean</td>
                                    <td>53275531</td>
                                    <td>12 May 2017</td>
                                    <td>12 May 2017</td>
                                    <td>12 May 2017</td>
                                    <td>12 May 2017</td>
                                    <td>12 May 2017</td>
                                    <td>12 May 2017</td>
                                    <td>12 May 2017</td>
                                    <td>12 May 2017</td>
                                    <td>
                                        <button class="btn p-0 ">
                                            <i class="mdi mdi-account-minus"></i>
                                        </button>
                                        <button class="btn  p-0 ">
                                            <i class="mdi mdi-account-minus"></i>
                                        </button>
                                        <button class="btn  p-0 ">
                                            <i class="mdi mdi-account-minus"></i>
                                        </button>
                                        <button class="btn  p-0 ">
                                            <i class="mdi mdi-account-minus"></i>
                                        </button>
                                        <button class="btn  p-0 ">
                                            <i class="mdi mdi-account-minus"></i>
                                        </button>
                                        <button class="btn  p-0 ">
                                            <i class="mdi mdi-account-minus"></i>
                                        </button>
                                    </td>

                                </tr>
                                <tr>
                                    <td>Nancy Drew</td>
                                    <td>53275531</td>
                                    <td>12 May 2017</td>
                                    <td>12 May 2017</td>
                                    <td>12 May 2017</td>
                                    <td>12 May 2017</td>
                                    <td>12 May 2017</td>
                                    <td>12 May 2017</td>
                                    <td>12 May 2017</td>
                                    <td>12 May 2017</td>
                                    <td>
                                        <button class="btn p-0 mr-0">
                                            <i class="mdi mdi-account-minus"></i>
                                        </button>
                                        <button class="btn  p-0 ">
                                            <i class="mdi mdi-account-minus"></i>
                                        </button>
                                        <button class="btn  p-0 ">
                                            <i class="mdi mdi-account-minus"></i>
                                        </button>
                                        <button class="btn  p-0 ">
                                            <i class="mdi mdi-account-minus"></i>
                                        </button>
                                        <button class="btn  p-0 ">
                                            <i class="mdi mdi-account-minus"></i>
                                        </button>
                                        <button class="btn  p-0 ">
                                            <i class="mdi mdi-account-minus"></i>
                                        </button>
                                    </td>


                                </tr>
                                <tr>
                                    <td>Nicolas Fan</td>
                                    <td>53275531</td>
                                    <td>12 May 2017</td>
                                    <td>12 May 2017</td>
                                    <td>12 May 2017</td>
                                    <td>12 May 2017</td>
                                    <td>12 May 2017</td>
                                    <td>12 May 2017</td>
                                    <td>12 May 2017</td>
                                    <td>12 May 2017</td>
                                    <td>
                                        <button class="btn p-0 ">
                                            <i class="mdi mdi-account-minus"></i>
                                        </button>
                                        <button class="btn  p-0 ">
                                            <i class="mdi mdi-account-minus"></i>
                                        </button>
                                        <button class="btn  p-0 ">
                                            <i class="mdi mdi-account-minus"></i>
                                        </button>
                                        <button class="btn  p-0 ">
                                            <i class="mdi mdi-account-minus"></i>
                                        </button>
                                        <button class="btn  p-0 ">
                                            <i class="mdi mdi-account-minus"></i>
                                        </button>
                                        <button class="btn  p-0 ">
                                            <i class="mdi mdi-account-minus"></i>
                                        </button>
                                    </td>


                                </tr>
                                <tr>
                                    <td>Ryan Obson</td>
                                    <td>53275531</td>
                                    <td>12 May 2017</td>
                                    <td>12 May 2017</td>
                                    <td>12 May 2017</td>
                                    <td>12 May 2017</td>
                                    <td>12 May 2017</td>
                                    <td>12 May 2017</td>
                                    <td>12 May 2017</td>
                                    <td>12 May 2017</td>
                                    <td>
                                        <button class="btn p-0 ">
                                            <i class="mdi mdi-account-minus"></i>
                                        </button>
                                        <button class="btn  p-0 ">
                                            <i class="mdi mdi-account-minus"></i>
                                        </button>
                                        <button class="btn  p-0 ">
                                            <i class="mdi mdi-account-minus"></i>
                                        </button>
                                        <button class="btn  p-0 ">
                                            <i class="mdi mdi-account-minus"></i>
                                        </button>
                                        <button class="btn  p-0 ">
                                            <i class="mdi mdi-account-minus"></i>
                                        </button>
                                        <button class="btn  p-0 ">
                                            <i class="mdi mdi-account-minus"></i>
                                        </button>
                                    </td>

                                </tr>
                                <tr>
                                    <td>Paul Lama</td>
                                    <td>53275531</td>
                                    <td>12 May 2017</td>
                                    <td>12 May 2017</td>
                                    <td>12 May 2017</td>
                                    <td>12 May 2017</td>
                                    <td>12 May 2017</td>
                                    <td>12 May 2017</td>
                                    <td>12 May 2017</td>
                                    <td>12 May 2017</td>
                                    <td>
                                        <button class="btn p-0 ">
                                            <i class="mdi mdi-account-minus"></i>
                                        </button>
                                        <button class="btn  p-0 ">
                                            <i class="mdi mdi-account-minus"></i>
                                        </button>
                                        <button class="btn  p-0 ">
                                            <i class="mdi mdi-account-minus"></i>
                                        </button>
                                        <button class="btn  p-0 ">
                                            <i class="mdi mdi-account-minus"></i>
                                        </button>
                                        <button class="btn  p-0 ">
                                            <i class="mdi mdi-account-minus"></i>
                                        </button>
                                        <button class="btn  p-0 ">
                                            <i class="mdi mdi-account-minus"></i>
                                        </button>
                                    </td>


                                </tr>
                                <tr>
                                    <td>Kema Jacque</td>
                                    <td>53275531</td>
                                    <td>12 May 2017</td>
                                    <td>12 May 2017</td>
                                    <td>12 May 2017</td>
                                    <td>12 May 2017</td>
                                    <td>12 May 2017</td>
                                    <td>12 May 2017</td>
                                    <td>12 May 2017</td>
                                    <td>12 May 2017</td>
                                    <td>
                                        <button class="btn p-0 ">
                                            <i class="mdi mdi-account-minus"></i>
                                        </button>
                                        <button class="btn  p-0 ">
                                            <i class="mdi mdi-account-minus"></i>
                                        </button>
                                        <button class="btn  p-0 ">
                                            <i class="mdi mdi-account-minus"></i>
                                        </button>
                                        <button class="btn  p-0 ">
                                            <i class="mdi mdi-account-minus"></i>
                                        </button>
                                        <button class="btn  p-0 ">
                                            <i class="mdi mdi-account-minus"></i>
                                        </button>
                                        <button class="btn  p-0 ">
                                            <i class="mdi mdi-account-minus"></i>
                                        </button>
                                    </td>


                                </tr>
                            </tbody>
                        </table>
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
