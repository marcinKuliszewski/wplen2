<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Oferta;

class GaleriaController extends Controller
{
    public function __construct()
    {
        $oferta= new Oferta;
    }
    
   
    public function pokaz(Oferta $oferta)
    {
        return view('galeria',compact('oferta'));
    }

   

}
