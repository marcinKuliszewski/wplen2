@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
             <h2>Panel</h2>
            <form action="{{route('szukaj.szukarka')}}">
                <div class="form-group">
                 <input class="form-control" placeholder="Rodzaj" type="text" name="rodzaj">
                </div>
                 <div class="form-group">
                <input class="form-control" placeholder="Region" type="text" name="region">
                 </div>
                 <div class="form-group">
                <input class="form-control" placeholder="Cena maxymalna" type="text" name="cenado">
                 </div>
                 <div class="form-group">
                <button class="btn btn-default">WYSZUKAJ</button>
                 </div>
            </form>
        </div>
    </div>
</div>
@endsection