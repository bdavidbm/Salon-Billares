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
                    Editar Usuario
                </div>
                <div class="container card-body " style="padding:30px">
                    <div class="row">
                        <div class="col">
                            <table class="table table-striped table-dark table-bordered">
                                <tbody>
                                    <div class="form-group">
                                        <tr>
                                            <th><label for="nombre">Nombre: </label></th>
                                            <th><input type="text" name="nombre" class="form-control" placeholder="{{$usuario['nombre']}}"></th>
                                        </tr>
                                    </div>
                                    <div class="form-group">
                                        <tr>
                                            <th><label for="cedula">Cedula: </label></th>
                                            <th><input type="number" name="cedula" class="form-control" placeholder="{{$usuario['cedula']}}"></th>
                                        </tr>
                                    </div>
                                    <div class="form-group">
                                        <tr>
                                            <th><label for="celular">Celular: </label></th>
                                            <th><input type="number" name="celular" class="form-control" placeholder="{{$usuario['celular']}}"></th>
                                        </tr>
                                    </div>
                                    <div class="form-group">
                                        <tr>
                                            <th class="text-center" colspan="3">
                                                <button type="submit" class="btn btn-light" style="padding:8px 100px;margin-top:25px;">
                                                    Modificar Usuario
                                                </button>
                                            </th>
                                        </tr>
                                    </div>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop