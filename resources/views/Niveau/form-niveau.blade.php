
@extends('layouts.include')

<div class="container" style="font-weight:800;">
<h1 class="armelle">Ajouter un Niveau</h1>
<form action="{{ url('ajouter-niveau') }} " method="post" id="mt-form" >
@csrf

<div class="form-group">
  <label for="inputEmail4">Niveau</label>
  <input type="text" class="form-control" name="niveau" value="" id="Inputnom" placeholder="">
</div>

<div>
<button class="btn btn-primary" id="coleur" type="submit">Valider</button>
<button class="btn btn-danger" id="coleur" type="reset">Annuler</button>
</div>

</form>

