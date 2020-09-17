
@extends('layouts.dashboard') 
@section('main-content')
<body>
<!---->
<main>

<div class="container my-5">
       <div class="card-body text-center">
   
    <h4 class="card-title">Programme de la semaine </label></h4>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
  </div>
    <div class="card">
        <button id="add__new__list" type="button" class="btn btn-success position-absolute" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fas fa-plus"></i> Add a new List</button>
       
       
        <table class="table table-hover  table-bordered">
            <thead>
              <tr>
                <th scope="col">Niveau</th>
                <th scope="col">Dates</th>
                <th scope="col">Heures</th>
                <th scope="col">Matière</th>
                <th scope="col">Enseignant</th>
                <th scope="col">Salle</th>
              </tr>
            </thead>

            @foreach($programme as $key)     
        
            <tbody>
              <tr>
                <th scope="row">{{$key->Niveau->niveau}}</th>
                <td>{{$key->heure}}</td>
                <td>{{$key->heure}}</td>
                <td>{{$key->Matiere->intitulle}}</td>
                <td>{{$key->Enseignant->nom}} {{$key->Enseignant->prenom}}</td>
                <td>{{$key->salle}}</td>
              </tr>
            </tbody>
            @endforeach
          </table>
          
    </div>
    <!-- Large modal -->
  

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
          <div class="card-body text-center">
            <h4 class="card-title">Special title treatment</h4>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          </div>
            <div class=" card col-8 offset-2 my-2 p-3">
          <form>
            <div class="form-group">
              <label for="listname">List name</label>
              <input type="text" class="form-control" name="listname" id="listname" placeholder="Enter your listname">
            </div>
            <div class="form-group">
              <label for="datepicker">Deadline</label>
              <input  type="text" class="form-control" name="datepicker" id="datepicker" placeholder="Pick up a date">
            </div>
            <div class="form-group">
                                    <label for="datepicker">Add a list item</label>
                <div class="input-group">

                  <input type="text" class="form-control" placeholder="Add an item" aria-label="Search for...">
                  <span class="input-group-btn">
                    <button class="btn btn-secondary" type="button">Go!</button>
                  </span>
                </div>
              </div>
           <div class="form-group text-center">
             <button type="submit" class="btn btn-block btn-primary">Sign in</button>
          </div>
        </form>
    </div>
    </div>
  </div>
</div>
</div>
</main>
<!---->
</body>
@endsection