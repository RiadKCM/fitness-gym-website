@extends('admin.admin')

@section('title2','Liste des coachs')

@section('content')
<div class="max-w-2xl mx-auto">   
<div class="bg-transparent shadow-md rounded my-6 overflow-x-auto">
    <table class="w-full">
        <thead class="bg-gray-50 border-b-2 border-gray-200">
            <tr class="text-white text-sm uppercase leading-normal">
                <th class="w-20 p-3 text-sm font-semibold tracking-wide text-center">ID</th>
                <th class=" p-3 text-sm font-semibold tracking-wide text-center">Nom</th>
                <th class="w-40 p-3 text-sm font-semibold tracking-wide text-center">Prenom</th>
                <th class="w-20 p-3 text-sm font-semibold tracking-wide text-center">Sport</th>
                <th class="w-20 p-3 text-sm font-semibold tracking-wide text-center">Photo</th>
                <th class="w-20 p-3 text-sm font-semibold tracking-wide text-center">Action</th>
            </tr>
        </thead>
        <tbody class="text-white text-sm font-light">
            @foreach($coachs as $coach)
            <tr class="hover:bg-gray-100">
                <td class="p-3 text-sm text-white">{{$coach->id}}</td>
                <td class="p-3 text-sm text-white">{{$coach->nom}}</td>
                <td class="p-3 text-sm text-white">{{$coach->prenom}}</td>
                <td class="p-3 text-sm text-white">{{$coach->id_sport}}</td>
                <td class="p-3 text-sm text-white">{{$coach->photo_path}}</td>

                <td>
                    <a href="/EditCoach/{{$coach->id}}" class="btn btn-info">Modifier</a>
                    <a href="/DeleteCoach/{{$coach->id}}" class="btn btn-danger">Supprimer</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>


<br><br>
</div>
<form action="#">
    <button><a href="/AddCoach"class="text-white">Ajouter un coach</a></button>
</form>

@endsection