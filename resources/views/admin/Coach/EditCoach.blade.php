@extends('admin.admin')

@section('title2','Modifier un coach')

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


{{-- <div class="text-white"  class="contenu ActiveContenu">
    <form method="POST" action="{{ route('admin.coach.update') }}">
        @csrf
        <input type="text" placeholder="id"id="id" name="id" value="{{ $coachs ->id }}"> 
        <div>
            <input type="text" placeholder="Nom"id="nom" name="nom" value="{{ $coachs->nom }}">
        </div>
        <div>
            <input type="text" placeholder="Prenom"id="prenom" name="prenom" value="{{ $coachs ->prenom }}"> 
        </div>
        <div>
            <input type="number" placeholder="Sport"id="id_sport" name="id_sport" value="{{ $coachs->id_sport }}">
        </div>
        <div>
            <input type="file" placeholder="Photo"id="photo_path" name="photo_path" value="{{ $coachs->photo_path }}">
        </div>
        <button type="submit">Modifier un coach</button>
    </form> 
</div> --}}

<div class="text-white border-white">
    <form method="POST" action="{{ route('admin.coach.update') }}" class="border-white">
        @csrf
        <div class="max-w-md mx-auto"> <!-- Définition d'une largeur maximale pour la div -->
            <div class="mb-4 flex flex-wrap">
                <input type="text" placeholder="id" id="id" name="id" value="{{ $coachs ->id }}" class="border border-gray-300 rounded-md p-2 w-full mb-2">
                <input type="text" placeholder="Nom" id="nom" name="nom" value="{{ $coachs->nom }}" class="border border-gray-300 rounded-md p-2 w-full mb-2">
                <input type="text" placeholder="Prenom" id="prenom" name="prenom" value="{{ $coachs ->prenom }}" class="border border-gray-300 rounded-md p-2 w-full mb-2">
                <input type="number" placeholder="Sport" id="id_sport" name="id_sport" value="{{ $coachs->id_sport }}" class="border border-gray-300 rounded-md p-2 w-full mb-2">
                <input type="file" placeholder="Photo" id="photo_path" name="photo_path" value="{{ $coachs->photo_path }}" class="border border-gray-300 rounded-md p-2 w-full mb-2">
            </div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Modifier le coach</button>
        </div>
    </form> 
</div>



@endsection

