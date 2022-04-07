@extends('layouts.master')

@section('content')
    <div class="row" style="margin-top:40px">
        <div class="offset-md-3 col-md-6">
            <div class="card text-white bg-dark">
                <div class="card-header text-center">
                    Cliente: {{$cliente['name']}}
                </div>
                <div class="container card-body " style="padding:30px">
                    <div class="row">
                        <div class="col">
                            <table class="table table-striped table-dark table-bordered">
                                <tbody>
                                    <tr>
                                        <th><h6>Nombre</h6></th>
                                        <th><label for="mesa">{{$cliente['name']}}</label></th>
                                    </tr>
                                    <tr>
                                        <th><h6>Apellido</h6></th>
                                        <th><label for="mesa">{{$cliente['apellido']}}</label></th>
                                    </tr>
                                    <tr>
                                        <th><h6>Cedula de ciudadania</h6></th>
                                        <th><label for="cedula">{{$cliente['cedula']}}</label></th>
                                    </tr>
                                    <tr>
                                        <th><h6>Fecha de Nacimiento</h6></th>
                                        <th><label for="mesa">{{$cliente['fecha_nacimiento']}}</label></th>
                                    </tr>
                                    <tr>
                                        <th><h6>Celular</h6></th>
                                        <th><label for="mesa">{{$cliente['celular']}}</label></th>
                                    </tr>
                                    <tr>
                                        <th><h6>Correo Electronico</h6></th>
                                        <th><label for="mesa">{{$cliente['email']}}</label></th>
                                    </tr>
                                    <tr>
                                        <th><h6>Direccion</h6></th>
                                        <th><label for="mesa">{{$cliente['direccion']}}</label></th>
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