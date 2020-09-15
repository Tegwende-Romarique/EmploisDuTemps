<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enseignant extends Model
{
    protected $guarded=[];

    public function matiere(){
        return $this->hasMany('App\Matiere');
    }
}
