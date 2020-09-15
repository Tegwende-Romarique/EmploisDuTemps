
@extends('layouts.include')

<div class="container" style="font-weight:800;">
<h1 class="armelle">Ajouter un nouveau Professeur</h1>
<form action="{{ url('ajouter-matiere') }} " method="post" id="mt-form" >
@csrf

<div class="form-group">
  <label for="inputEmail4">Intitullé</label>
  <input type="text" class="form-control" name="intitulle" value="" id="Inputnom" placeholder="">
</div>

<div class="form-group">
  <label for="inputEmail4">volume</label>
  <input type="text" class="form-control" name="volume" value="" id="Inputprenom" placeholder="" >
</div>

<div class="form-group">
  <label for="inputEmail4">Professeur</label>
  <select name="enseignant_id" class="form-control" id="InputProfesseur">
  <option value=""></option>
  @foreach($enseignant as $professeur)
  <option value="{{$professeur->id}}">{{$professeur->nom}} {{$professeur->prenom}}</option>
  @endforeach
  </select>
</div>

<div>
<button class="btn btn-primary" id="coleur" type="submit">Valider</button>
<button class="btn btn-danger" id="coleur" type="reset">Annuler</button>
</div>

</form>

