@extends('layouts.app')

@section('head')
    {!! HTML::style('//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css') !!}
    {!! HTML::style('<meta name="csrf-token" content="{{ csrf_token() }}" />') !!}
@stop

@section('footer')
    {!! HTML::script('http://code.jquery.com/jquery-1.12.4.js') !!}
    {!! HTML::script('http://code.jquery.com/ui/1.12.1/jquery-ui.js') !!}
    <script>
    
        
    $('#galery-save').click(function()
    {
       
        var token=$('input[name="_token"]').val();
     console.log(token);  
     var jso='';
          $('.img-mini').each(function ( index ) {
                       jso +=index+":"+$( this ).data('id')+','; 
                       
                      });
                      jso = jso;
                    
                     
          console.log(jso);
        $.ajax({
                url         : '/fotolista',
                type        : 'get',
                contentType : 'aplication/json', 
                dataType    : 'json', 
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                data        : { 
                           
                           jso
                             },
                 success:function(response){
                      console.log("Dane otrzymane-> " + response.wartosc );
                      $('#komunikat').text(response.komunikat);
                     }
                
             });
            });
    </script>
    <script>$("#sortable").sortable();</script>
@stop

@section('content')
 <input  name="_token" value="{{csrf_token()}}">
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{$oferta->nazwa}} Galeria Zdjęć</div>

                <div class="panel-body">
                     <a class="btn" href="{{route('upload',$oferta)}}">DODAJ ZDJECIA</a>
                    <div id="komunikat">
                        
                    </div>
                <ul id="sortable">
                     @foreach($row as $img)
                        <li class="img-mini" data-id="{{$img->id}}">
                           <img src="{{ asset('/images/icon_sizee/'.$img->filename)}}">
                        </li>
                      @endforeach
                </ul>
                    <button id="galery-save">zapisz</button>
                </div>
                
                <div class="panel-heading">{{$oferta->nazwa}}</div>
                <div class="panel-body">
                    
                    
  
                </div>
            </div>
        </div>
    </div>
</div>

@endsection