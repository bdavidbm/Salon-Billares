@extends('layouts.master')

@section('content')
<div class="row" style="margin-top:40px">
        <div class="offset-md-3 col-md-6">
            <div class="card text-white bg-dark">
                <div class="card-header text-center">
                    Venta
                </div>
                <div class="container card-body " style="padding:30px">
                    <div class="row">
                        <div class="col">
                            <table class="table table-striped table-dark table-bordered">
                                <tbody>
                                    <tr>
                                        <th><h6>Fecha: </h6></th>
                                        <th><label for="fecha">{{$venta['fecha']}}</label></th>
                                    </tr>
                                    <tr>
                                        <th><h6>Hora: </h6></th>
                                        <th><label for="fecha">{{$venta['hora']}}</label></th>
                                    </tr>
                                    <tr>
                                        <th><h6>Total: </h6></th>
                                        <th><label for="precio">{{$venta['precio_total']}}</label></th>
                                    </tr>
                                    <tr>
                                        <th><h6>Numero de Clientes  </h6></th>
                                        <th><label for="fecha">{{$venta['numero_clientes']}}</label></th>
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