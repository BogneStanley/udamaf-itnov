@extends('layout.master')

@push('plugin-styles')
<!-- {!! Html::style('/assets/plugins/plugin.css') !!} -->
@endpush

@section('content')
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body" style="padding: 15px 10px 5px 27px">
                <h4><a href="{{ route('eleves.add') }}" class="btn btn-success">Ajouter CMU Dara</a></h4>
            </div>
        </div>
    </div>

    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Liste CMU Dara</h4>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nom complet</th>
                                <th>Date de naissance</th>
                                <th>Lieu de naissance</th>
                                <th>Emain</th>
                                <th>Address</th>
                                <th>Date souscription</th>
                                <th>Montant affiliation</th>
                                <th>Date Affiliation</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($table_datas as $data)
                            <tr>
                                <td>{{ $data->nom }} {{ $data->prenom }}</td>
                                <td>{{ $data->date_naissance }}</td>
                                <td>{{ $data->lieu_naissance }}</td>
                                <td>{{ $data->email }}</td>
                                <td>{{ $data->adresse }}</td>
                                <td>{{ $data->created_at }}</td>
                                <td>{{ $data->montant_affiliation }} Fcfa</td>
                                <td>{{ $data->date_affiliation }}</td>
                                <td>
                                    <button class="btn p-0 ">
                                        <i style="color: rgb(86, 86, 248)" class="mdi mdi-eye"></i>
                                    </button>
                                    <button class="btn  p-0 ">
                                        <i style="color: rgb(101, 213, 127)" class="mdi mdi-check-circle"></i>
                                    </button>
                                    <button class="btn  p-0 ">
                                        <i style="color: rgb(154, 147, 83)"
                                            class="mdi mdi-arrow-down-bold-circle-outline"></i>
                                    </button>
                                    <button class="btn  p-0 ">
                                        <i style="color: rgb(222, 101, 88)" class="mdi mdi-delete"></i>
                                    </button>
                                </td>


                            </tr>
                            @endforeach
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
