@extends('layouts.app')

@section ('contenido')
    <div class="page-content-wrapper-inner">
        <div class="content-viewport">
             <div class="viewport-header">
                 <nav aria-label="breadcrumb">
                     <ol class="breadcrumb has-arrow">
                         <li class="breadcrumb-item"><a href="#">Gestion de datos</a></li>
                         <li class="breadcrumb-item active" aria-current="page">Detalle</li>
                     </ol>
                 </nav>
             </div>

            <div class="row">
                <div class="col-md-3 col-sm-6 col-6 equel-grid">
                    <div class="grid">
                        <div class="grid-body text-gray">
                            <h5 class="text-black">{{ucwords( $show->cliente )}}</h5>
                            <div class="d-flex justify-content-between">
                                <p>Cliente</p>
                            </div>

                            <div class="wrapper w-50 mt-4">
                                <canvas
                                        class="chartjs-chart"
                                        height="45"
                                        id="stat-line_1"
                                ></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-6 equel-grid">
                    <div class="grid">
                        <div class="grid-body text-gray">
                            <h5 class="text-black">{{ucwords( $show->um )}}</h5>
                            <div class="d-flex justify-content-between">
                                <p>Unidad Minera</p>

                            </div>

                            <div class="wrapper w-50 mt-4">
                                <canvas
                                        class="chartjs-chart"
                                        height="45"
                                        id="stat-line_2"
                                ></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-6 equel-grid">
                    <div class="grid">
                        <div class="grid-body text-gray">
                            <h5 class="text-black">{{ucwords( $show->lugar )}}</h5>
                            <div class="d-flex justify-content-between">
                                <p>Ubicación</p>
                            </div>

                            <div class="wrapper w-50 mt-4">
                                <canvas
                                        class="chartjs-chart"
                                        height="45"
                                        id="stat-line_3"
                                ></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-6 equel-grid">
                    <div class="grid">
                        <div class="grid-body text-gray">
                            <h5 class="text-black">{{ucwords( $show->tipo_explotacion ? $show->tipo_explotacion : 'No definido' )}} / {{ucwords( $show->minerales ? $show->minerales : 'No definido' )}} </h5>
                            <div class="d-flex justify-content-between">
                                <p>Tipo de Explotación / Minerales </p>

                            </div>

                            <div class="wrapper w-50 mt-4">
                                <canvas
                                        class="chartjs-chart"
                                        height="45"
                                        id="stat-line_4"
                                ></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 equel-grid">
                    <div class="grid widget-revenue-card">
                        <div class="grid-body d-flex flex-column h-100">
                            <div class="split-header">

                            </div>
                            <div id="map_canvas" style="height: 400px;width: auto">

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 equel-grid">
                    <div class="grid">
                        <div class="grid-body">
                            <div class="split-header">
                                <p class="card-title">Componentes Mineros Existentes</p>
                                <span class="btn action-btn btn-xs component-flat" data-toggle="tooltip" data-placement="left" title="" data-original-title="Available balance since the last week"><i class="mdi mdi-information-outline text-muted mdi-2x"></i></span>
                            </div>
                            <br>
                            <div class="d-flex justify-content-between border-bottom py-2">
                                <p class="text-gray">* Depósito de relave</p>

                            </div>
                            <div class="d-flex justify-content-between border-bottom py-2">

                                <p class="text-gray">* Pila de Lixiviación</p>
                            </div>
                            <div class="d-flex justify-content-between border-bottom py-2">
                                <p class="text-gray">* Stockpile</p>

                            </div>
                            <div class="d-flex justify-content-between border-bottom py-2">
                                <p class="text-gray">* Depósito de desmonte</p>
                            </div>
                            <div class="d-flex justify-content-between border-bottom py-2">
                                <p class="text-gray">* Depósito de material orgánico</p>

                            </div>
                            <div class="d-flex justify-content-between pt-2">
                                <p class="text-gray">* Plantas de procesamiento</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 equel-grid">
                    <div class="grid">
                        <div class="grid-body">
                            <div class="split-header">
                                <p class="card-title">Available Balance</p>
                                <span class="btn action-btn btn-xs component-flat" data-toggle="tooltip" data-placement="left" title="" data-original-title="Available balance since the last week"><i class="mdi mdi-information-outline text-muted mdi-2x"></i></span>
                            </div>

                            <br>
                            <div class="d-flex justify-content-between border-bottom py-2">
                                <p class="text-black">Medicion</p>
                                <p class="text-gray">{{ $show->medicion}}</p>
                            </div>
                            <div class="d-flex justify-content-between border-bottom py-2">
                                <p class="text-black">Prof. Total (m)
                                </p>
                                <p class="text-gray">{{ $show->profundidad}}</p>
                            </div>
                            <div class="d-flex justify-content-between border-bottom py-2">
                                <p class="text-black">Nivel de agua (m)
                                </p>
                                <p class="text-gray">{{ $show->nivel_agua}}</p>
                            </div>
                            <div class="d-flex justify-content-between border-bottom py-2">
                                <p class="text-black">Suelo orgánico (m)
                                </p>
                                <p class="text-gray">{{ $show->nivel_organico}}</p>
                            </div>
                            <div class="d-flex justify-content-between pt-2">
                                <p class="text-black">Nivel de roca (m)
                                </p>
                                <p class="text-gray">{{ $show->nivel_roca}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 equel-grid">
                    <div class="grid widget-revenue-card">
                        <div class="grid-body d-flex flex-column h-100">
                            <div class="split-header">
                                <p class="card-title">Relacion a Estudios Anteriores</p>
                                <div class="content-wrapper v-centered">
                                    <small class="text-muted">2019-10-28</small>
                                    <span class="btn action-btn btn-refresh btn-xs component-flat"><i class="mdi mdi-autorenew text-muted mdi-2x"></i></span>
                                </div>
                            </div>
                            <div class="mt-auto"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                                <canvas class="chartjs-chart chartjs-render-monitor" id="cpu-performance" height="161" width="607" style="display: block; width: 607px; height: 161px;"></canvas>

                            </div>
                        </div>
                    </div>
                </div>
                <input type="hidden" class="lati" value="{{$show->latitud}}">
                <input type="hidden" class="long" value="{{$show->longitud}}">


            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script async defer src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyAxjcCBfqM05-h3icS2P6Ti64bUxUm6btQ&callback=initMap"
            type="text/javascript"></script>


    <script>
        function initMap() {
            var latitud = $('.lati').val().trim();
            var longitud = $('.long').val().trim();
            var parsela = parseFloat(latitud);
            var parselon = parseFloat(longitud);

            console.log(latitud,longitud,parsela,parselon);

            var myLatLng2 = {lat: parsela , lng:parselon};

            var map = new google.maps.Map(document.getElementById('map_canvas'), {
                zoom: 16,
                center: myLatLng2
            });

            var markerserver = new google.maps.Marker({
                position: myLatLng2,
                map: map,


            });

            autocomplete = new google.maps.places.Autocomplete(document.getElementById('searchmap'));
            //autocomplete.bindTo('bounds', map);









        }





    </script>

@endsection


