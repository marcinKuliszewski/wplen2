@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <a class="btn btn-default" href="/home">Panel Urzytkownika</a>
            <a class="btn btn-default" href="{{route('upload',$oferta)}}"> Galeria</a>
            <div class="panel panel-default">
                <div class="panel-heading">Podgląd Oferty</div>

                <div class="panel-body">
  
    
                   
                     {{$oferta->nazwa}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

