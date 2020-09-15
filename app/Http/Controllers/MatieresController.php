<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Matiere;
use App\Enseignant;
use App\Niveau;

class MatieresController extends Controller
{

    public function create(){
       
       $enseignant = Enseignant::all();
        return view('Matiere/form-matiere', ['enseignant'=>$enseignant]);
    }

    function store(Request $request)
    {
        $matiere=new Matiere();
        $matiere->intitulle=$request->intitulle;
        $matiere->volume=$request->volume;
        $matiere->enseignant_id=$request->enseignant_id;
        $matiere->save();

        return back();
    }
}
