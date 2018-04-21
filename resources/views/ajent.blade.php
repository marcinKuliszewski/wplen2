@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Panel uzytkownika</div>

                <div class="panel-body">
                    Witaj {{$ajent->name}}
                    <br>
                    Status - {{$ajent->status}}
                </div>
                
                <div class="panel-heading">Twoje oferty</div>
                <div class="panel-body">
                     @foreach($oferty as $oferta)
                     <br>
                     <a href="{{route('dodaj.edycja',$oferta)}}"> {{$oferta->nazwa}}</a>
                      <br>
                      {{print_r($_POST)}}
                     @endforeach
                     <br>
                     <a class="btn btn-default" href="/dodaj">Dodaj</a>
                     
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
