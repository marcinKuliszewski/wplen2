<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Oferta;
use App\Models\Image;




class GaleriaController extends Controller
{
    public function __construct()
    {
        $oferta= new Oferta;
    }
    
   
    public function pokaz(Oferta $oferta)
    {
        echo $oferta->id;
         //$ofertaid=['oferta_id', '=', $oferta->id];
         $row = Image::where('oferta_id', $oferta->id)->orderBy('pozycja_img')->get();
         foreach($row as $wiersz)
         {
             print $wiersz->filename;
         }
        return view('galeria',compact('oferta'),compact('row'));
    }
 public function fotolista(Request $request)
    {
     
     $wart=$request->all();

     $tablicaa=implode('', $wart);
     $tablica=explode(',', $tablicaa);
     foreach($tablica as $rek)
     { 
          $bit=explode(':',$rek);
          print_r($bit);
          if(count($bit)>1)
          {
          print $bit['1'];
         Image::where('id', $bit[1])->update(['pozycja_img' => $bit[0]]);
          }
     }
     //print_r($bit);
        return response()->json(array('wartosc'=>'git','komunikat'=> 'Galeria zaktualizowana pomyślnie', '_token' =>csrf_token()), 200);
    }

}
