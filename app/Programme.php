<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Programme extends Model
{ 
    protected $guarded=[];

    public function enseignant(){
        return $this->belongsTo('App\Enseignant');
    }

    public function matiere(){
        return $this->belongsTo('App\Matiere');
    }

    public function niveau(){
        return $this->belongsTo('App\Niveau');
    }
}
