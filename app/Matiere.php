<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matiere extends Model
{
    protected $guarded=[];

    public function enseignant(){
        return $this->belongsTo('App\Enseignant');
    }
    
    public function niveau(){
        return $this->belongsToMany('App\Niveau');
    }
}
