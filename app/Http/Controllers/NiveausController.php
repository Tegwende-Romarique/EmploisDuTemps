<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Niveau;
use App\Matiere;



class NiveausController extends Controller
{

    public function create(){
        return view('Niveau/form-niveau');
    }


    public function index(){
        $matiere = Matiere::all();
        $niveau = Niveau::all();
        return view('Niveau/liste-niveau');
    }

    function store(Request $request)
    {
        $niveau=new Niveau();
        $niveau->niveau=$request->niveau;
        $niveau->save();

        return back();
    }
}
