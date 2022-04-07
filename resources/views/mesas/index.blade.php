@extends('layouts.master')

@section('content')
<table class="table table-striped table-dark table-bordered mt-3">
        <tbody>
            @foreach($arrayMesa as $key => $mesa)
                <tr>
                    <th>Descripcion: </th>
                    <th>{{$mesa['descripcion']}}</th>
                    <th>Precio: </th>
                    <th>{{$mesa['presio']}}</th>
                    <th>Minutos por Precio: </th>
                    <th>{{$mesa['minutos_presio']}}</th>
                    <th><button type="button" class="btn btn-warning">Ver</button></th>
                    <th><button type="button" class="btn btn-danger">Editar</button></th>
                </tr>
            @endforeach
        </tbody>
    </table>
    <button type="button" class="btn btn-success">Crear Mesa</button>
@stop