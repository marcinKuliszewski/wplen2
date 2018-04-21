<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Oferta;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function ajent()
    {
       $ajent = Auth::user();
       if($ajent->admin =='admin')
       {
         $ajent->status="Administrator";  
       }
       else
       {
         $ajent->status="Użytkownik";  
       }
       $ajent_id = Auth::user()->id;
        $oferty = Oferta::where(['user_id'=>$ajent_id])->get();
        return view('ajent',['ajent'=>$ajent,'oferty'=>$oferty]);
    }
}
