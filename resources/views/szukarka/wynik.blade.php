@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h2>Wynik</h2>
            @foreach($wyniki as $wynik)
            
            <br>
            {{$wynik->id}}
            - 
            {{$wynik->nazwa}}
            -
            {{$wynik->typ}}
             -
            {{$wynik->region}}
             -
            {{$wynik->cenamax}}
            
            @endforeach;
            
           
        </div>
    </div>
</div>
@endsection