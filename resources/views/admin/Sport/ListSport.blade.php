@extends('admin.admin')

@section('title2','Liste des sports')

@section('content')

<div>
</div>
<div class="max-w-2xl mx-auto">    
    <div class="bg-transparent shadow-md rounded my-6 overflow-x-auto">
        <table class="w-full">
            <thead class="bg-gray-50 border-b-2 border-gray-200">
                <tr class="text-white text-sm uppercase leading-normal">
                    <th class="w-20 p-3 text-sm font-semibold tracking-wide text-center">ID</th>
                    <th class="p-3 text-sm font-semibold tracking-wide text-center">Sport</th>
                    <th class="w-24 p-3 text-sm font-semibold tracking-wide text-center">Description</th>
                    <th class="w-25 p-3 text-sm font-semibold tracking-wide text-center">Action</th>
                </tr>
            </thead>
            <tbody class="text-white text-sm font-light">
                @foreach($sports as $sport)
                <tr class="hover:bg-gray-100">
                    <td class="p-3 text-sm text-white">{{$sport->id}}</td>
                    <td class="p-3 text-sm text-white">{{$sport->nom_sport}}</td>
                    <td class="p-3 text-sm text-white">{{$sport->description}}</td>
                    <td class="">
                        <a href="/EditSport/{{$sport->id}}" class="btn btn-info">Modifier</a>
                        <a href="/DeleteSport/{{$sport->id}}" class="btn btn-danger">Supprimer</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
    
    <br><br>
</div>

<form action="#">
    <button><a href="/AddSport"class="text-white">Ajouter un sport</a></button>
</form>

@endsection