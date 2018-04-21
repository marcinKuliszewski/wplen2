<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Oferta;
use Illuminate\Support\Facades\DB;

class SzukajController extends Controller
{
    public function szukarka(Request $request) {
      
        $req_rodzaj= $request->input('rodzaj');
        $req_region=$request->input('region');
        $req_cenado=$request->input('cenado');
        
        if($req_rodzaj!='')
            {
            $rodzaj_wiersz=['typ', '=', $req_rodzaj];
            }
             else
             {
             $rodzaj_wiersz=['id', '>', '0'];
             }
        
        if($req_region!='')
            {
            $region_wiersz=['region', '=', $req_region];
            }
            else
            {
            $region_wiersz=['id', '>', '0'];
            }
            $req_cenado=intval($req_cenado);
        if($req_cenado!='')
            {
            $cenado_wiersz=['cenamax', '<=', $req_cenado];
            }
            else
            {
            $cenado_wiersz=['id', '>', '0'];
            }
        
     $wyniki = Oferta::where([$rodzaj_wiersz, $region_wiersz, $cenado_wiersz])->get();
 
      return view('szukarka.wynik',['wyniki'=>$wyniki]);
    } 
}
