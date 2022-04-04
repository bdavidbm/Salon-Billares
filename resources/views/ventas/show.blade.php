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
    $venta = $arrayVenta[$id];
?>

@section('content')
<div class="row" style="margin-top:40px">
        <div class="offset-md-3 col-md-6">
            <div class="card text-white bg-dark">
                <div class="card-header text-center">
                    Venta
                </div>
                <div class="container card-body " style="padding:30px">
                    <div class="row">
                        <div class="col">
                            <table class="table table-striped table-dark table-bordered">
                                <tbody>
                                    <tr>
                                        <th><h6>Fecha: </h6></th>
                                        <th><label for="fecha">{{$venta['fecha']}}</label></th>
                                    </tr>
                                    <tr>
                                        <th><h6>Total: </h6></th>
                                        <th><label for="precio">{{$venta['precio']}}</label></th>
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