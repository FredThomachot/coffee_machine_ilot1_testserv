@extends('pages.template')
@section('title')
Ingredients
@endsection

@section('title_page')
 <div class="title m-b-md">
 Ingrédients
 </div>
@endsection


@section('contenu')
<div>
            <form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend class="legend">Ingredients Ajout Supression</legend>

<!-- Multiple Radios -->
<div class="form-group">
  <label class="col-md-4 control-label" for="radios">Sugar</label>
  <div class="col-md-4">
  <div class="radio">
    <label for="radios-0">
      <input name="radios" id="radios-0" value="1" checked="checked" type="radio">
      Reloaded
    </label>
	</div>
  <div class="radio">
    <label for="radios-1">
      <input name="radios" id="radios-1" value="2" type="radio">
      Delet
    </label>
	</div>
  </div>
</div>

<!-- Multiple Radios -->
<div class="form-group">
  <label class="col-md-4 control-label" for="radios">Cocoa</label>
  <div class="col-md-4">
  <div class="radio">
    <label for="radios-0">
      <input name="radios" id="radios-0" value="1" checked="checked" type="radio">
      Reloaded
    </label>
	</div>
  <div class="radio">
    <label for="radios-1">
      <input name="radios" id="radios-1" value="2" type="radio">
      Delet
    </label>
	</div>
  </div>
</div>

<!-- Multiple Radios -->
<div class="form-group">
  <label class="col-md-4 control-label" for="radios">Thé</label>
  <div class="col-md-4">
  <div class="radio">
    <label for="radios-0">
      <input name="radios" id="radios-0" value="1" checked="checked" type="radio">
      Reloaded
    </label>
	</div>
  <div class="radio">
    <label for="radios-1">
      <input name="radios" id="radios-1" value="2" type="radio">
      Delet
    </label>
	</div>
  </div>
</div>

<!-- Multiple Radios -->
<div class="form-group">
  <label class="col-md-4 control-label" for="radios">Coffee</label>
  <div class="col-md-4">
  <div class="radio">
    <label for="radios-0">
      <input name="radios" id="radios-0" value="1" checked="checked" type="radio">
      Reloaded
    </label>
	</div>
  <div class="radio">
    <label for="radios-1">
      <input name="radios" id="radios-1" value="2" type="radio">
      Delet
    </label>
	</div>
  </div>
</div>

<!-- Multiple Radios -->
<div class="form-group">
  <label class="col-md-4 control-label" for="radios">Milk</label>
  <div class="col-md-4">
  <div class="radio">
    <label for="radios-0">
      <input name="radios" id="radios-0" value="1" checked="checked" type="radio">
      Reloaded
    </label>
	</div>
  <div class="radio">
    <label for="radios-1">
      <input name="radios" id="radios-1" value="2" type="radio">
      Delet
    </label>
	</div>
  </div>
</div>

<!-- Multiple Radios -->
<div class="form-group">
  <label class="col-md-4 control-label" for="radios">Water</label>
  <div class="col-md-4">
  <div class="radio">
    <label for="radios-0">
      <input name="radios" id="radios-0" value="1" checked="checked" type="radio">
      Reloaded
    </label>
	</div>
  <div class="radio">
    <label for="radios-1">
      <input name="radios" id="radios-1" value="2" type="radio">
      Delet
    </label>
	</div>
  </div>
</div>

</fieldset>
</form>
 </div>



<form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend class="legend">Ajouter Ingredients</legend>

<!-- Appended Input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="appendedtext">Nouvel Ingredient</label>
  <div class="col-md-5">
    <div class="input-group">
      <input id="appendedtext" name="appendedtext" class="form-control" placeholder="Du vin pour le Fred" type="text">
      <span class="input-group-addon">Ajouter</span>
    </div>
    
  </div>
</div>
</fieldset>
</form>



<legend class="legend">Quantité Ingrédients</legend>
<table>
 <tr>
    <th>Ingredients</th>
    <th>Quantité</th>
  </tr>
  <tr>
    <td>Sugar</td>
    <td>450</td>
  </tr>
  <tr>
    <td>Cocoa</td>
    <td>50</td>
  </tr>
  <tr>
    <td>Thé</td>
    <td>250</td>
  </tr>
  <tr>
    <td>Coffee</td>
    <td>150</td>
  </tr>
  <tr>
    <td>Milk</td>
    <td>150</td>
  </tr>
  <tr>
    <td>Water</td>
    <td>600</td>
  </tr>
</table><br>
@endsection