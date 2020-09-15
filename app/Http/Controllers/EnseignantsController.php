<?php

namespace App\Http\Controllers;

use App\Enseignant;
use Illuminate\Http\Request;

class EnseignantsController extends Controller
{

    public function create()
    {

        return view('Enseignant/form-enseignant');
    }

    public function index(){
        $enseignant = Enseignant::all();
        return redirect('Enseignant/liste-enseignant');
    }
    

    function store(Request $request)
    {
        $enseignant=new Enseignant();
        $enseignant->nom=$request->nom;
        $enseignant->prenom=$request->prenom;
        $enseignant->save();

        return back();
    }
}
