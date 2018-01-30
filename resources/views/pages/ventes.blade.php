@extends('pages.template')
@section('title')
Ventes
@endsection

@section('title_page')
<div class="title m-b-md">Ventes</div>
@endsection


@section('contenu')

<table>
    <th>N° de vente</th>
    <th>Boisson</th>
    <th>date</th>
    <th>select</th>
    @foreach ($ventes as $element)
    <tr>
        @foreach ($element as $order)
        <td> {{ $order }} </td>
        @endforeach
        <td><input type="checkbox" name={{ $order }} value="3" /></td>
    </tr>
    @endforeach
</table>


<form action="" method="post">
    <select name="boisson">
        <option selected disabled>Drink selection</option>
        @foreach ($boissons as $element)
        <option value={{ $element['name'] }} > {{ $element['name'] }}</option>
        @endforeach
    </select>
    <select name="sucre">
        <option selected disabled>Sugar selection</option>
        @for ($i = 0; $i <= $nbSugar && $i < 5 ; $i++)
        <option value={{ $i }} > {{ $i }}</option>
        @endfor
    </select>
    <input type="submit" name="submit" value="ajouter une vente">
</form>

@endsection
