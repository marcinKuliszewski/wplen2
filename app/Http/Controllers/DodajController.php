<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Oferta;
use Illuminate\Support\Facades\Auth;



class DodajController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function add_foto(Request $request) 
     {
        $img = $request->file('file'); //access dropzone files
         $oferta= new Oferta;
         $oferta->find(1);
          $oferta->adres ='dupa';
           $oferta->save();
        
     } 
   public function edycja(Oferta $oferta) 
     {
       // Session::put('nr_oferty', 'value');
        return view('dodaj.podglad',compact('oferta'));
     }  
    public function zapisz(Request $request) {
        
       $request->flash(); 
       
        $oferta= new Oferta;
        $oferta->find(1);
        $oferta->inde = $request->input('inde');
        $oferta->user_id = Auth::user()->id;
        $oferta->nazwa = $request->input('nazwa');
        $oferta->typ = $request->input('typ');
        $oferta->adres = $request->input('adres');
        $oferta->wojew = $request->input('wojew');
        $oferta->region = $request->input('region');
        $oferta->telefon = $request->input('telefon');
        $oferta->telefon2 = $request->input('telefon2');
        $oferta->email = $request->input('email');
        $oferta->obowiazkowejadlo = $request->input('obowiazkowejadlo');
        $oferta->jadlonamiejscu = $request->input('jadlonamiejscu');
        $oferta->sniadanie = $request->input('sniadanie');
        $oferta->obiad = $request->input('obiad');
        $oferta->kolacja = $request->input('kolacja');
        $oferta->obiadokolacja = $request->input('obiadokolacja');
        $oferta->iloscmiejsc = $request->input('iloscmiejsc');
        $oferta->iloscpokoi = $request->input('iloscpokoi');
        $oferta->ilosclazienek = $request->input('ilosclazienek');
        $oferta->okolica = $request->input('okolica');
        $oferta->opis = $request->input('opis');
        $oferta->piktogram = serialize($request->input('piktogram'));
        $oferta->cenamin = $request->input('cenamin');
        $oferta->cenamax = $request->input('cenamax');
        $oferta->dostdo = $request->input('dostdo');
        $oferta->dostod = $request->input('dostod');
        $oferta->opiscen = $request->input('opiscen');
        $oferta->dodatkowe = serialize($request->input('dodatkowe'));
        $oferta->wiecej = $request->input('wiecej');
        $oferta->poz_x = $request->input('poz_x');
        $oferta->poz_y = $request->input('poz_y');
        $oferta->aktualizacja = $request->input('aktualizacja');
        $oferta->link = $request->input('link');
       
        
        $id_wiersz=['user_id', '=', Auth::user()->id];
        $nazwa_wiersz=['nazwa', '=', $request->input('nazwa')];
       $czy_juz_jest = Oferta::where([$id_wiersz, $nazwa_wiersz])->get(); 
        
       $i=0;
       foreach($czy_juz_jest as $ile_czy)
       {
         print $i++; 
       }
        if($i=='')
        {
            $oferta->save();
        }
        
        
        
        
       return view('dodaj.podglad',compact('oferta'));
    }
}
?>