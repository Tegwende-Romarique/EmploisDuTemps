
@extends('layouts.include')

<div class="container" style="font-weight:800;">
<h1 class="armelle">Ajouter un nouveau Professeur</h1>
<form action="{{ url('ajouter-enseignant') }} " method="post" id="mt-form" >
@csrf

<div class="form-group">
  <label for="inputEmail4">Nom</label>
  <input type="text" class="form-control" name="nom" value="" id="Inputnom" placeholder="">
</div>

<div class="form-group">
  <label for="inputEmail4">Prenom</label>
  <input type="text" class="form-control" name="prenom" value="" id="Inputprenom" placeholder="" >
</div>

<div>
<button class="btn btn-primary" id="coleur" type="submit">Valider</button>
<button class="btn btn-danger" id="coleur" type="reset">Annuler</button>
</div>

</form>

