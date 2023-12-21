@extends('admin.admin')

@section('title2','Liste des cours')

@section('content')
<div class="max-w-2xl mx-auto">   
<div class="bg-transparent shadow-md rounded my-6 overflow-x-auto">
    <table class="w-full">
        <thead class="bg-gray-50 border-b-2 border-gray-200">
            <tr class="text-white text-sm uppercase leading-normal">
                <th class="w-10 p-3 text-sm font-semibold tracking-wide text-center">ID</th>
                <th class="w-20 p-3 text-sm font-semibold tracking-wide text-center">Type de cours</th>
                <th class="w-20 p-3 text-sm font-semibold tracking-wide text-center">intensite</th>
                <th class="w-50 p-3 text-sm font-semibold tracking-wide text-center">capacite</th>
                <th class="w-50 p-3 text-sm font-semibold tracking-wide text-center">Durée</th>
                <th class="w-50 p-3 text-sm font-semibold tracking-wide text-center">Sport</th>
                <th class="w-50 p-3 text-sm font-semibold tracking-wide text-center">Coach</th>
                <th class="w-20 p-3 text-sm font-semibold tracking-wide text-center">Action</th>
            </tr>
        </thead>
        <tbody class="text-white text-sm font-light">
            @foreach($cours as $cour)
            <tr class="hover:bg-gray-100">
                <td class="p-3 text-sm text-white">{{$cour->id}}</td>
                <td class="p-3 text-sm text-white">{{$cour->type_cours}}</td>
                <td class="p-3 text-sm text-white">{{$cour->intensite}}</td>
                <td class="p-3 text-sm text-white">{{$cour->capacite}} personnes</td>
                <td class="p-3 text-sm text-white">{{$cour->duree}}</td>
                <td class="p-3 text-sm text-white">{{$cour->id_sport}}</td>
                <td class="p-3 text-sm text-white">{{$cour->id_coach}}</td>
                <td>
                    <a href="/EditCours/{{$cour->id}}" class="btn btn-info">Modifier</a>
                    <a href="/DeleteCours/{{$cour->id}}" class="btn btn-danger">Supprimer</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>


<br><br>
</div>
<form action="#">
    <button><a href="/AddCours"class="text-white">Ajouter un cours</a></button>
</form>

@endsection