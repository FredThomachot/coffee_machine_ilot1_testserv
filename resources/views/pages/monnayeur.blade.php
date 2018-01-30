@extends('pages.template')
@section('title')
Monnayeur
@endsection
@section('link')
    href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet"
@endsection

@section('title_page')
    <div class="title m-b-md">Monnayeur</div>
@endsection


@section('contenu')

    <br />
    <legend class="text-center container-fluid"><h1>Gestion de la caisse</h1></legend>
    <br />
    <br />
    <div class="listeMoney container">
        <h2 class="text-center">..Pièces disponibles & Stock..</h2>
        <table class="table table-hover">
            <tr>
                <th>Pièces</th>
                <th>Stock</th>
                <th></th>
            </tr>
            @foreach ($moneyInfos as $availableMoney => $value)<tr>
                <td>{{$availableMoney / 100}} €uros</td>
                <td>{{$value}}</td>
                <td><input name="checkboxes" id="checkboxes-{{$availableMoney}}" value="{{$availableMoney}}" type="checkbox"></td>
            </tr>
            @endforeach
        </table>
    </div>
    <br />
    <div class="text-center">
        <button id="button2id" name="button2id" class="btn btn-lg btn-outline-secondary">Recharger</button>
    </div>
    <br />
    <hr class="container" />
    <div>
        <h2 class="text-center">..Recettes..</h2>
    </div>
    <br />
    <div>
        <h3><u>Recette de la journée :</u></h3>
        <p>/!\ A FAIRE : 'yield' ventes ... €uros /!\</p>
        <br />
        <h3><u>Recette de la semaine :</u></h3>
        <p>/!\ A FAIRE : 'yield' ventes ... €uros /!\</p>
        <h3><u>Recette du mois :</u></h3>
        <p>/!\ A FAIRE : 'yield' ventes ... €uros /!\</p>
        <br />
    </div>
@endsection

    