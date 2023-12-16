@extends('admin.admin')

@section('title2','Liste des participations')

@section('content')
<div class="max-w-2xl mx-auto">   
<div class="bg-transparent shadow-md rounded my-6 overflow-x-auto">
    <table class="w-full">
        <thead class="bg-gray-50 border-b-2 border-gray-200">
            <tr class="text-white text-sm uppercase leading-normal">
                <th class="w-10 p-3 text-sm font-semibold tracking-wide text-center">ID</th>
                <th class="w-20 p-3 text-sm font-semibold tracking-wide text-center">Date de participation</th>
                <th class="w-20 p-3 text-sm font-semibold tracking-wide text-center">Utilisateur</th>
                <th class="w-50 p-3 text-sm font-semibold tracking-wide text-center">Cours</th>
                <th class="w-20 p-3 text-sm font-semibold tracking-wide text-center">Action</th>
            </tr>
        </thead>
        <tbody class="text-white text-sm font-light">
            @foreach($participations as $participation)
            <tr class="hover:bg-gray-100">
                <td class="p-3 text-sm text-white">{{$participation->id}}</td>
                <td class="p-3 text-sm text-white">{{$participation->date_participation}}</td>
                <td class="p-3 text-sm text-white">{{$participation->id_user}} an</td>
                <td class="p-3 text-sm text-white">{{$participation->id_cours}}</td>
                <td>
                    <a href="#" class="btn btn-info">Modifier</a>
                    <a href="#" class="btn btn-danger">Supprimer</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>


<br><br>
</div>
<form action="#">
    <button><a href="/AddParticipation"class="text-white">Ajouter une participation</a></button>
</form>

@endsection