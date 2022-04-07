@extends('layouts.master')

@section('content')
<table class="table table-striped table-dark table-bordered mt-3">
        <tbody>
            @foreach($arrayVenta as $key => $venta)
                <tr>
                    <th>Fecha: </th>
                    <th>{{$venta['fecha']}}</th>
                    <th>Precio: </th>
                    <th>{{$venta['precio_total']}}</th>
                    <th><button type="button" class="btn btn-warning">Ver</button></th>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop