@extends('pages.template')
    <div class="content">
        <div class="title m-b-md">
         Modifier une boisson
        </div>

@section('contenu')

@foreach ($boisson as $uneBoisson)

<br>

<form action="/updateBoissonBdd/{{$uneBoisson->id}}" method="post">
  {{ csrf_field() }}
  <fieldset >
    <div class="form-group">
      <label for="textInput">Nom de la boisson</label>
      <input type="text" id="nameInput" name="nameInput" class="form-control" value="{{ $uneBoisson->nom}}">
    </div>
    <div class="form-group">
      <label for="textInput">Prix de la boisson</label>
      <input type="text" id="priceInput" name="priceInput" class="form-control" value="{{ $uneBoisson->prix}}">
    </div>
    <div class="form-group">
      <label for="textInput">Code de la boisson</label>
      <input type="text" id="codeInput" name="codeInput" class="form-control" value="{{ $uneBoisson->code}}">
    </div>

    
   <div class="form-group"> 
     <button type="submit" class="btn btn-danger">Modifier</button>
   </div>
 </fieldset>
</form>
 
  @endforeach
       
@endsection
