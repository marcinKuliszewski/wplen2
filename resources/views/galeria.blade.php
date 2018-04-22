@extends('layouts.app')

@section('head')
    {!! HTML::style('//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css') !!}
@stop

@section('footer')
    {!! HTML::script('http://code.jquery.com/jquery-1.12.4.js') !!}
    {!! HTML::script('http://code.jquery.com/ui/1.12.1/jquery-ui.js') !!}
    <script>$("#sortable").sortable();</script>
@stop

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{$oferta->nazwa}} Galeria Zdjęć</div>

                <div class="panel-body">
                <ul id="sortable">
                     @foreach($row as $img)
                        <li>
                           <img src="{{ asset('/images/icon_sizee/'.$img->filename)}}">
                        </li>
                      @endforeach
                </ul>
                </div>
                
                <div class="panel-heading">{{$oferta->nazwa}}</div>
                <div class="panel-body">
                    
                    
  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection