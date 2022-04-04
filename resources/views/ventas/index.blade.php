@extends('layouts.master')

<?php
    $arrayVenta=array(
        array(
            'fecha' => '11111',
            'precio' => '11111',
        ),
        array(
            'fecha' => '22222',
            'precio' => '22222',
        ),
        array(
            'fecha' => '33333',
            'precio' => '33333',
        ),
        array(
            'fecha' => '44444',
            'precio' => '44444',
        ),
    );
?>

@section('content')
<table class="table table-striped table-dark table-bordered mt-3">
        <tbody>
            @foreach($arrayVenta as $key => $venta)
                <tr>
                    <th>Fecha|: </th>
                    <th>{{$venta['fecha']}}</th>
                    <th>Precio: </th>
                    <th>{{$venta['precio']}}</th>
                    <th><button type="button" class="btn btn-warning">Ver</button></th>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop