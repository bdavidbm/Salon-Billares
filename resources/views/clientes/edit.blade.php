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
                    Editar Cliente
                </div>
                <div class="container card-body " style="padding:30px">
                    <div class="row">
                        <div class="col">
                            <table class="table table-striped table-dark table-bordered">
                                <tbody>
                                    <div class="form-group">
                                        <tr>
                                            <th><label for="nombre">Nombre: </label></th>
                                            <th><input type="text" name="nombre" class="form-control" placeholder="{{$cliente['nombre']}}"></th>
                                        </tr>
                                    </div>
                                    <div class="form-group">
                                        <tr>
                                            <th><label for="cedula">Cedula: </label></th>
                                            <th><input type="number" name="cedula" class="form-control" placeholder="{{$cliente['cedula']}}"></th>
                                        </tr>
                                    </div>
                                    <div class="form-group">
                                        <tr>
                                            <th class="text-center" colspan="3">
                                                <button type="submit" class="btn btn-light" style="padding:8px 100px;margin-top:25px;">
                                                    Modificar Cliente
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