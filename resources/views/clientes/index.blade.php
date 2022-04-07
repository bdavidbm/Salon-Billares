@extends('layouts.master')

@section('content')
    <table class="table table-striped table-dark table-bordered mt-3">
        <tbody>
            @foreach($arrayCliente as $key => $cliente)
                <tr>
                    <th>Nombre: </th>
                    <th>{{$cliente['name']}}</th>
                    <th>C.C.: </th>
                    <th>{{$cliente['cedula']}}</th>
                    <th>Credito: </th>
                    <th>{{$cliente['credito']}}</th>
                    <th><button type="button" class="btn btn-warning">Ver</button></th>
                    <th><button type="button" class="btn btn-danger">Editar</button></th>
                    <th>
                        @if($cliente['credito']=='Si')
                            <button type="button" class="btn btn-primary">Pagar</button>
                        @endif
                    </th>
                </tr>
            @endforeach
        </tbody>
    </table>
    <button type="button" class="btn btn-success">Crear Cliente</button>
@stop