@extends('pages.template')
    <div class="content">
        <div class="title m-b-md">
         Détail d'une boisson
        </div>

@section('contenu')

 @foreach ($boisson as $uneBoisson)
 


        <table>
            
            <tr>
                <th>Boisson</th>
                <td>{{ $uneBoisson->nom}}</td>
            </tr>
            <tr>
                <th>Code</th>
                <td>{{ $uneBoisson->code}}</td>
            </tr>
            <tr>
                <th>Prix</th>
                <td>{{ $uneBoisson->prix/100}} €</td>
            </tr>

        </table>
     @endforeach      

        <br>

       
@endsection
