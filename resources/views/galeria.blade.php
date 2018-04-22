@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{$oferta->nazwa}} Galeria Zdjęć</div>

                <div class="panel-body">
                
                </div>
                
                <div class="panel-heading">{{$oferta->nazwa}}</div>
                <div class="panel-body">
                     @foreach($oferta as $ofertt)
                     
                     @endforeach
                     <br>
                     <a class="btn btn-default" href="/dodaj">Dodaj</a>
                     
                </div>
            </div>
        </div>
    </div>
</div>
@endsection