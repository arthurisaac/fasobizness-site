<?php

namespace App\Http\Controllers;

use App\Annonce;
use Illuminate\Http\Request;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //recuperation des donnees de la BD
        //$affiche_pub = Affiches_pub::all();
        $annonce = Annonce::all();
        
        // dd($annonce);
        return view('home', compact('annonce'));
    }
}
