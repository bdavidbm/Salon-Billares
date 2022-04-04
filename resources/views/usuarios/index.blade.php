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
?>

@section('content')
    <table class="table table-striped table-dark table-bordered mt-3">
        <tbody>
            @foreach($arrayUsuario as $key => $usuario)
                <tr>
                    <th>Nombre: </th>
                    <th>{{$usuario['nombre']}}</th>
                    <th>C.C.: </th>
                    <th>{{$usuario['cedula']}}</th>
                    <th>Celular: </th>
                    <th>{{$usuario['celular']}}</th>
                    <th><button type="button" class="btn btn-warning">Ver</button></th>
                    <th><button type="button" class="btn btn-danger">Editar</button></th>
                </tr>
            @endforeach
        </tbody>
    </table>
    <button type="button" class="btn btn-success">Crear usuario</button>
@stop