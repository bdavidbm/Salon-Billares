@extends('layouts.master')
<?php
    $arrayJuego=array(
        array(
            'mesa' => '1',
            'tiempo' => '50',
            'precio' => '2500'
        ),
        array(
            'mesa' => '2',
            'tiempo' => '35',
            'precio' => '1750'
        ),
        array(
            'mesa' => '4',
            'tiempo' => '15',
            'precio' => '750'
        ),
        array(
            'mesa' => '5',
            'tiempo' => '5',
            'precio' => '250'
        ),
    );
    $juego = $arrayJuego[$id];
?>

@section('content')
<div class="row" style="margin-top:40px">
    <div class="offset-md-3 col-md-6">
       <div class="card text-white bg-dark">
          <div class="card-header text-center">
              Cobrar
          </div>
          <div class="container card-body " style="padding:30px">
              <div class="row">
                  <div class="col">
                    <table class="table table-striped table-dark table-bordered">
                        <tbody>
                            <div class="form-group">
                                <tr>
                                    <th><h6>Mesa</h6></th>
                                    <th><label for="mesa">{{$juego['mesa']}}</label></th>
                                </tr>
                            </div>
                            <div class="form-group">
                                <tr>
                                    <th><h6>Tiempo</h6></th>
                                    <th><label for="tiempo">{{$juego['tiempo']}}</label></th>
                                </tr>
                            </div>
                            <div class="form-group">
                                <tr>
                                    <th><h6>Total a Pagar</h6></th>
                                    <th><label for="total">{{$juego['precio']}}</label></th>                                
                                </tr>
                            </div>
                            <div class="form-group">
                                <tr>
                                    <th><label for="title">C.C.</label></th>
                                    <th><input type="number" name="cedula" id="cedula" class="form-control" placeholder="1234567890"></th>
                                </tr>
                            </div>
                            <div class="form-group">
                                <tr>
                                    <th class="text-center" colspan="3">
                                        <button type="submit" class="btn btn-light" style="padding:8px 100px;margin-top:25px;">
                                        Cobrar
                                        </button>
                                    </th>
                                </tr>
                            </div>
                        </tbody>
                    </table>
                  </div>
              </div>
          </div>

          <!--
        <div class="card-body" style="padding:30px">

             {{-- TODO: Abrir el formulario e indicar el método POST --}}

             {{-- TODO: Protección contra CSRF --}}

             <div class="form-group">
                <label for="title">Título</label>
                <input type="text" name="title" id="title" class="form-control">
             </div>

             <div class="form-group">
                {{-- TODO: Completa el input para el año --}}
             </div>

             <div class="form-group">
                {{-- TODO: Completa el input para el director --}}
             </div>

             <div class="form-group">
                {{-- TODO: Completa el input para el poster --}}
             </div>

             <div class="form-group">
                <label for="synopsis">Resumen</label>
                <textarea name="synopsis" id="synopsis" class="form-control" rows="3"></textarea>
             </div>

             <div class="form-group text-center">
                <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                    Añadir película
                </button>
             </div>

             {{-- TODO: Cerrar formulario --}}

          </div> -->
       </div>
    </div>
 </div>
@stop