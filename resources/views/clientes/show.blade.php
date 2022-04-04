@extends('layouts.master')

<?php
    $arrayCliente=array(
        array(
            'nombre' => 'Andres David',
            'cedula' => '12345',
            'credito' => 'No'
        ),
        array(
            'nombre' => 'Camilo Sebastian ',
            'cedula' => '12345',
            'credito' => 'Si'
        ),
        array(
            'nombre' => 'Nicolas Alejandro',
            'cedula' => '12345',
            'credito' => 'Si'
        ),
        array(
            'nombre' => 'Mauricio Esteban',
            'cedula' => '12345',
            'credito' => 'No'
        ),
    );
    $cliente = $arrayCliente[$id];
?>

@section('content')
    <div class="row" style="margin-top:40px">
        <div class="offset-md-3 col-md-6">
            <div class="card text-white bg-dark">
                <div class="card-header text-center">
                    Cliente
                </div>
                <div class="container card-body " style="padding:30px">
                    <div class="row">
                        <div class="col">
                            <table class="table table-striped table-dark table-bordered">
                                <tbody>
                                    <tr>
                                        <th><h6>Nombre</h6></th>
                                        <th><label for="mesa">{{$cliente['nombre']}}</label></th>
                                    </tr>
                                    <tr>
                                        <th><h6>Cedula de ciudadania</h6></th>
                                        <th><label for="cedula">{{$cliente['cedula']}}</label></th>
                                    </tr>
                                    <tr>
                                        <th><h6>Credito</h6></th>
                                        <th><label for="credito">{{$cliente['credito']}}</label></th>                                
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