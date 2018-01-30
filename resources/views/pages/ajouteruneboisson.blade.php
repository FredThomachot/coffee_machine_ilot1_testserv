@extends('pages.template')
    <div class="content">
        <div class="title m-b-md">
         Ajouter une boisson
        </div>

@section('contenu')

<br>

<form action="/ajouteruneboissonBdd" method="post">
  {{ csrf_field() }}
  <fieldset >
    <div class="form-group">
      <label for="textInput">Nom de la boisson</label>
      <input type="text" id="nameInput" name="nameInput" class="form-control">
    </div>
    <div class="form-group">
      <label for="textInput">Code de la boisson</label>
      <input type="text" id="codeInput" name="codeInput" class="form-control">
    </div>
    <div class="form-group">
      <label for="numberInput">Prix de la boisson</label>
      <input type="number" id="priceInput" name="priceInput" class="form-control">
    </div>
    
   <div class="form-group"> 
     <button type="submit" class="btn btn-primary">Ajouter</button>
   </div>
 </fieldset>
</form>
       
@endsection
