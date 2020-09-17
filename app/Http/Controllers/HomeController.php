<?php

namespace App\Http\Controllers;

use App\Niveau;
use App\Matiere;
use App\Programme;
use App\Enseignant;
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
        $matiere = Matiere::all();
        $niveau = Niveau::all();
        $enseignant = Enseignant::all();
        $programme = Programme::all();
        return view('home', ['programme'=>$programme, 'enseignant'=>$enseignant, 'niveau'=>$niveau, 'matiere'=>$matiere]);
    }
}
