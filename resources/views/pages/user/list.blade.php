@extends('layout.master')

@push('plugin-styles')
<!-- {!! Html::style('/assets/plugins/plugin.css') !!} -->
@endpush

@section('content')
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body" style="padding: 15px 10px 5px 27px">
                <h4><a href="{{ route('gestion_utilisateur.add') }}" class="btn btn-success">Ajouter un utilidateur</a>
                </h4>
            </div>
        </div>
    </div>

    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Liste des utilisateurs</h4>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Prénom</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($table_datas as $data)
                            <tr>
                                <td>{{ $data->nom }} {{ $data->prenom }}</td>
                                <td>{{ $data->prenom }}</td>
                                <td>{{ $data->email }}</td>

                                <td> <span class="badge p-2 @if ($data->role->id == 1)
                                    badge-danger
                                @elseif ($data->role->id == 2)
                                badge-warning
                                @else
                                badge-primary
                                @endif ">{{ $data->role->role }}</span></td>
                                <td>
                                    <button class="btn p-0 ">
                                        <i style="color: rgb(86, 86, 248)" class="mdi mdi-eye"></i>
                                    </button>
                                    <button class="btn  p-0 ">
                                        <i style="color: rgb(101, 213, 127);" class="mdi mdi-check-circle"></i>
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
