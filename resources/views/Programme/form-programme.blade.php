
@extends('layouts.include')

<div class="container" style="font-weight:800;">
<h1 class="armelle">Ajouter un nouveau Professeur</h1>
<form action="{{ url('ajouter-programme') }} " method="post" id="mt-form" >
@csrf

<div class="form-group">
  <label for="inputEmail4">Date</label>
  <input type="date" class="form-control" name="date" value="" id="Inputnom" placeholder="">
</div>

<div class="form-group">
  <label for="inputEmail4">Heures</label>
  <input type="datetime" class="form-control" name="heure" value="" id="Inputprenom" placeholder="" >
</div>

<div class="form-group">
  <label for="inputEmail4">Salle</label>
  <input type="text" class="form-control" name="salle" value="" id="Inputprenom" placeholder="" >
</div>

<div class="form-group">
  <label for="inputEmail4">Enseignant</label>
  <select name="enseignant_id" class="form-control" id="InputProfesseur">
  <option value=""></option>
  @foreach($enseignant as $enseignants)
  <option value="{{$enseignants->id}}">{{$enseignants->nom}} {{$enseignants->prenom}}</option>
  @endforeach
  </select>
</div>


<div class="form-group">
  <label for="inputEmail4">Matière</label>
  <select name="matiere_id" class="form-control" id="InputProfesseur">
  <option value=""></option>
  @foreach($matiere as $matieres)
  <option value="{{$matieres->id}}">{{$matieres->intitulle}}</option>
  @endforeach
  </select>
</div>


<div class="form-group">
  <label for="inputEmail4">Niveau</label>
  <select name="niveau_id" class="form-control" id="InputProfesseur">
  <option value=""></option>
  @foreach($niveau as $classe)
  <option value="{{$classe->id}}">{{$classe->niveau}}</option>
  @endforeach
  </select>
</div>

<div>
<button class="btn btn-primary" id="coleur" type="submit">Valider</button>
<button class="btn btn-danger" id="coleur" type="reset">Annuler</button>
</div>

</form>

