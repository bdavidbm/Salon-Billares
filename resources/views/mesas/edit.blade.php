@extends('layouts.master')

@section('content')
<div class="row" style="margin-top:40px">
        <div class="offset-md-3 col-md-6">
            <div class="card text-white bg-dark">
                <div class="card-header text-center">
                    Editar Mesa
                </div>
                <div class="container card-body " style="padding:30px">
                    <div class="row">
                        <div class="col">
                            <table class="table table-striped table-dark table-bordered">
                                <tbody>
                                    <div class="form-group">
                                        <tr>
                                            <th><label for="descripcion">Descripcion: </label></th>
                                            <th><input type="text" name="descripcion" class="form-control" placeholder="{{$mesa['descripcion']}}"></th>
                                        </tr>
                                    </div>
                                    <div class="form-group">
                                        <tr>
                                            <th><label for="precio">Precio: </label></th>
                                            <th><input type="number" name="precio" class="form-control" placeholder="{{$mesa['presio']}}"></th>
                                        </tr>
                                    </div>
                                    <div class="form-group">
                                        <tr>
                                            <th><label for="minuto">Minutos por Precio: </label></th>
                                            <th><input type="number" name="precio" class="form-control" placeholder="{{$mesa['minutos_presio']}}"></th>
                                        </tr>
                                    </div>
                                    <div class="form-group">
                                        <tr>
                                            <th class="text-center" colspan="3">
                                                <button type="submit" class="btn btn-light" style="padding:8px 100px;margin-top:25px;">
                                                    Modificar Mesa
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