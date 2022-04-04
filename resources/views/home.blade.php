@extends('layouts.master')
<?php
    $arrayJuego=array(
        array(
            'mesa' => '1',
            'tiempo' => '50'
        ),
        array(
            'mesa' => '2',
            'tiempo' => '35'
        ),
        array(
            'mesa' => '4',
            'tiempo' => '15'
        ),
        array(
            'mesa' => '5',
            'tiempo' => '5'
        ),
    )
?>

@section('content')
    <div class="row">
        @foreach( $arrayJuego as $key => $juego )
            <div class="col-xs-6 col-sm-4 col-md-3 text-center mt-3">
                <table class="table table-striped table-dark table-bordered">
                    <tbody>
                        <tr>
                            <th><h6>Mesa: </h6></th>
                            <th><label for="mesa">{{$juego['mesa']}}</label></th>
                        </tr>
                        <tr>
                            <th><h6>Tiempo(Minutos): </h6></th>
                            <th><label for="mesa">{{$juego['tiempo']}}</label></th>
                        </tr>
                        <tr>
                            <th class="text-center" colspan="2">
                                <button class="btn btn-light">
                                    Cobrar
                                </button>
                            </th>
                        </tr>
                    </tbody>
                </table>
            </div>
        @endforeach
    </div>
@stop