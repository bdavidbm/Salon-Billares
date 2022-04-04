@extends('layouts.master')

<?php
    $arrayUsuario=array(
        array(
            'nombre' => 'Andres David',
            'cedula' => '12345',
            'celular' => '3000000000'
        ),
        array(
            'nombre' => 'Camilo Sebastian ',
            'cedula' => '12345',
            'celular' => '3000000000'
        ),
        array(
            'nombre' => 'Nicolas Alejandro',
            'cedula' => '12345',
            'celular' => '3000000000'
        ),
        array(
            'nombre' => 'Mauricio Esteban',
            'cedula' => '12345',
            'celular' => '3000000000'
        ),
    );
    $usuario = $arrayUsuario[$id];
?>

@section('content')
    <div class="row" style="margin-top:40px">
        <div class="offset-md-3 col-md-6">
            <div class="card text-white bg-dark">
                <div class="card-header text-center">
                    Usuario
                </div>
                <div class="container card-body " style="padding:30px">
                    <div class="row">
                        <div class="col">
                            <table class="table table-striped table-dark table-bordered">
                                <tbody>
                                    <tr>
                                        <th><h6>Nombre</h6></th>
                                        <th><label for="mesa">{{$usuario['nombre']}}</label></th>
                                    </tr>
                                    <tr>
                                        <th><h6>Cedula de ciudadania</h6></th>
                                        <th><label for="cedula">{{$usuario['cedula']}}</label></th>
                                    </tr>
                                    <tr>
                                        <th><h6>Celular</h6></th>
                                        <th><label for="credito">{{$usuario['celular']}}</label></th>                                
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