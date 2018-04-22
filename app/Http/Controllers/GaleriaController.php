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
         $row = Image::where('oferta_id', $oferta->id)->get();
         foreach($row as $wiersz)
         {
             print $wiersz->filename;
         }
        return view('galeria',compact('oferta'),compact('row'));
    }

   

}
