@extends('admin.admin')

@section('title2','Modifier un abonnement')

@section('content')

@if (session('status'))
    <div class="alert alert-succes">
        {{ session('status') }}
    </div>
@endif

<ul>
    @foreach ($errors->all() as $error)
        <li class="alert alert-danger">{{ $error }}</li>    
    @endforeach
</ul>


<div class="text-white border-white">
    <form method="POST" action="{{ route('admin.abonnement.update') }}" class="border-white">
        @csrf
        <div class="max-w-md mx-auto"> <!-- Définition d'une largeur maximale pour la div -->
            <div class="mb-4 flex flex-wrap">
                <input type="text" id="id" name="id" placeholder="ID" value="{{ $abonnements->id }}" class="border-2 border-white rounded-md p-2 w-full sm:w-auto text-gray-800 mb-2 sm:mb-0 mr-4">
                <input type="text" id="type_abonnement" name="type_abonnement" placeholder="Type d'abonnement" value="{{ $abonnements->type_abonnement }}" class="border-2 border-white rounded-md p-2 w-full sm:w-auto text-gray-800 mb-2 sm:mb-0 mr-4">
                <input type="number" id="prix" name="prix" placeholder="Prix" value="{{ $abonnements->prix }}" class="border-2 border-white rounded-md p-2 w-full sm:w-auto text-gray-800 mb-2 sm:mb-0 mr-4">
                <input type="number" id="duree_validite" name="duree_validite" placeholder="Durée" value="{{ $abonnements->duree_validite }}" class="border-2 border-white rounded-md p-2 w-full sm:w-auto text-gray-800 mb-2 sm:mb-0 mr-4">
                <textarea id="description" name="description" placeholder="Description" class="border-2 border-white rounded-md p-2 w-full text-gray-800 resize-none">{{ $abonnements->description }}</textarea>
            </div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Modifier l'abonnement</button>
        </div>
    </form> 
</div>




@endsection

