@extends('layouts.master')
<?php
    $arrayMesa=array(
        array(
            'descripcion' => '1',
            'precio' => '250',
            'minuto' => '5'
        ),
        array(
            'descripcion' => '2',
            'precio' => '250',
            'minuto' => '5'
        ),
        array(
            'descripcion' => '3',
            'precio' => '250',
            'minuto' => '5'
        ),
        array(
            'descripcion' => '4',
            'precio' => '250',
            'minuto' => '5'
        ),
    );
?>
@section('content')
<table class="table table-striped table-dark table-bordered mt-3">
        <tbody>
            @foreach($arrayMesa as $key => $mesa)
                <tr>
                    <th>Descripcion: </th>
                    <th>{{$mesa['descripcion']}}</th>
                    <th>Precio: </th>
                    <th>{{$mesa['precio']}}</th>
                    <th>Minutos por Precio: </th>
                    <th>{{$mesa['minuto']}}</th>
                    <th><button type="button" class="btn btn-warning">Ver</button></th>
                    <th><button type="button" class="btn btn-danger">Editar</button></th>
                </tr>
            @endforeach
        </tbody>
    </table>
    <button type="button" class="btn btn-success">Crear Mesa</button>
@stop