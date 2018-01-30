


@extends('pages.template')
       
@section('title_page', 'Boissons')
        

@section('contenu')

        

        <table>
            <tr> 
                <th><a href="listeparid" type="button" class="btn btn-primary btn-sm">trier par ID#</th>  
                <th><a href="listeparnom" type="button" class="btn btn-primary btn-sm">trier par nom</th> 
                <th><a href="listeparprix" type="button" class="btn btn-primary btn-sm">trier par prix</th>
                <th colspan="3"><a href="ajouteruneboisson" type="button" class="btn btn-primary btn-lg">Ajouter une boisson<br></th>
            </tr>
            <tr>
                @foreach ($boissons as $maBoisson)

                <td>{{$maBoisson->id}}</td>
                <td>{{ $maBoisson->nom}}</td>
                <td>{{ $maBoisson->prix/100}} €</td>
                <td><a href="boisson/{{$maBoisson->id}}" type="button" class="btn btn-outline-danger">Détail</td>
                <td><a href="update/{{$maBoisson->id}}" type="button" class="btn btn-warning">Modifier</td>
                <td><a href="suppBoissonBdd/{{$maBoisson->id}}" type="button" class="btn btn-danger">Supprimer</td>
            </tr>
                
            @endforeach


        </table><br>

       

    
       
@endsection