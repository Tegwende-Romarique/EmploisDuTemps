<?php

namespace App\Http\Controllers;

use App\Niveau;
use App\Matiere;
use App\Programme;
use App\Enseignant;
use Illuminate\Http\Request;

class ProgrammesController extends Controller
{
    
    public function create(){
        $matiere = Matiere::all();
        $niveau = Niveau::all();
        $enseignant = Enseignant::all();
        $programme = Programme::all();

        return view('Programme/form-programme', ['programme'=>$programme, 'enseignant'=>$enseignant, 'niveau'=>$niveau, 'matiere'=>$matiere]);
    }


    public function index(){
        $programme = Programme::all();
        $matiere = Matiere::all();
        $niveau = Niveau::all();
        $enseignant = Enseignant::all();
        
         return view('Programme/liste-programme', ['programme'=>$programme, 'enseignant'=>$enseignant, 'niveau'=>$niveau, 'matiere'=>$matiere]);
    }

    function store(Request $request)
    {
        $programme=new Programme();
        $programme->date=$request->date;
        $programme->heure=$request->heure;
        $programme->salle=$request->salle;
        $programme->enseignant_id=$request->enseignant_id;
        $programme->niveau_id=$request->niveau_id;
        $programme->matiere_id=$request->matiere_id;
        $programme->save();

        return back();
    }
}
