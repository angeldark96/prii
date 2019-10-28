@extends('layouts.app')

@section ('contenido')
    <div class="">
        <div class="content-viewport">

            <div class="row">
                <div class="col-lg-12">
                    <div class="grid">
                        <div class="grid-body">
                            <div class="item-wrapper">
                                <div class="table-responsive">
                                    <table id="complex-header-table" class="data-table table">
                                        <thead>
                                        <tr class="header-grouping-label">
                                            <th rowspan="1" colspan="4">Datos Generales</th>
                                            <th colspan="2">Coordenadas </th>
                                            <th colspan="4">Metros</th>
                                        </tr>
                                        <tr>
                                            <th>Cliente</th>
                                            <th>U. Minera</th>
                                            <th>T. Explotación</th>
                                            <th>Medicion</th>
                                            <th>Latitud</th>
                                            <th>Longitud</th>
                                            <th>Prof.</th>
                                            <th>Agua</th>
                                            <th>Orgánico</th>
                                            <th>Roca</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($lista as $lis)
                                        <tr>
                                            <td>{{ $lis->cliente }}</td>
                                            <td>{{ $lis->um }}</td>
                                            <td>{{ $lis->tipo_explotacion }}</td>
                                            <td><a href="{{ route('showprii', $lis->medicion)  }}">{{ $lis->medicion }}</a></td>
                                            <td>{{ $lis->latitud }}</td>
                                            <td>{{ $lis->longitud }}</td>
                                            <td>{{ $lis->profundidad}}</td>
                                            <td>{{ $lis->nivel_agua}}</td>
                                            <td>{{ $lis->nivel_organico}}</td>
                                            <td>{{ $lis->nivel_roca}}</td>
                                        </tr>
                                        @endforeach



                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


