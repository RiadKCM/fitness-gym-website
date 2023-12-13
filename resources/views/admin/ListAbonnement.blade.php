@extends('admin.admin')

@section('title2','Liste des abonnements')

@section('content')
<div>
</div>
<div class="max-w-2xl mx-auto">    
    <div class="bg-transparent shadow-md rounded my-6 overflow-x-auto">
        <table class="w-full">
            <thead class="bg-gray-50 border-b-2 border-gray-200">
                <tr class="text-white text-sm uppercase leading-normal">
                    <th class="w-10 p-3 text-sm font-semibold tracking-wide text-center">ID</th>
                    <th class="w-20 p-3 text-sm font-semibold tracking-wide text-center">Type</th>
                    <th class="w-20 p-3 text-sm font-semibold tracking-wide text-center">Durée</th>
                    <th class="w-50 p-3 text-sm font-semibold tracking-wide text-center">Description</th>
                    <th class="w-20 p-3 text-sm font-semibold tracking-wide text-center">Action</th>
                </tr>
            </thead>
            <tbody class="text-white text-sm font-light">
                @foreach($abonnements as $abonnement)
                <tr class="hover:bg-gray-100">
                    <td class="p-3 text-sm text-white">{{$abonnement->id}}</td>
                    <td class="p-3 text-sm text-white">{{$abonnement->type_abonnement}}</td>
                    <td class="p-3 text-sm text-white">{{$abonnement->duree_validite}} an</td>
                    <td class="p-3 text-sm text-white">{{$abonnement->description}}</td>
                    <td>
                        <a href="/EditAbonnement/{{$abonnement->id}}" class="btn btn-info">Modifier</a>
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
    <button><a href="/AddAbonnement"class="text-white">Ajouter un abonnement</a></button>
</form>

@endsection