@extends('layouts.master')

@section('content')
<div class="row" style="margin-top:40px">
        <div class="offset-md-3 col-md-6">
            <div class="card text-white bg-dark">
                <div class="card-header text-center">
                    Mesa: {{$mesa['descripcion']}}
                </div>
                <div class="container card-body " style="padding:30px">
                    <div class="row">
                        <div class="col">
                            <table class="table table-striped table-dark table-bordered">
                                <tbody>
                                    <tr>
                                        <th><h6>Desscripcion: </h6></th>
                                        <th><label for="descripcion">{{$mesa['descripcion']}}</label></th>
                                    </tr>
                                    <tr>
                                        <th><h6>Precio: </h6></th>
                                        <th><label for="cedula">{{$mesa['presio']}}</label></th>
                                    </tr>
                                    <tr>
                                        <th><h6>Minutos por Precio: </h6></th>
                                        <th><label for="minuto">{{$mesa['minutos_presio']}}</label></th>                                
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop