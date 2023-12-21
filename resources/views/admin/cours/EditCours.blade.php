@extends('admin.admin')

@section('title2','Modifier un cours')

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

{{-- 
<div class="text-white"  class="contenu ActiveContenu">
    <form method="POST" action="{{ route('admin.cours.update') }}">
        @csrf
        <input type="text" placeholder="id"id="id" name="id" value="{{ $cours ->id }}"> 
        <div>
            <input type="text" placeholder="Type de cours"id="type_cours" name="type_cours" value="{{ $cours->type_cours }}">
        </div>
        <div>
            <input type="text" placeholder="Intensité"id="intensite" name="intensite" value="{{ $cours ->intensite }}"> 
        </div>
        <div>
            <input type="text" placeholder="Capacité"id="capacite" name="capacite" value="{{ $cours ->capacite }}"> 
        </div>
        <div>
            <input type="text" placeholder="Durée"id="duree" name="duree" value="{{ $cours->duree }}">
        </div>
        <div>
            <input type="text" placeholder="Sport"id="id_sport" name="id_sport" value="{{ $cours->id_sport }}">
        </div>
        <div>
            <input type="text" placeholder="Coach"id="id_coach" name="id_coach" value="{{ $cours->id_coach }}">
        </div>
        <button type="submit">Modifier un cours</button>
    </form> 
</div> --}}

<div class="text-white border-white">
    <form method="POST" action="{{ route('admin.cours.update') }}" class="border-white">
        @csrf
        <div class="max-w-md mx-auto">
            <div class="mb-4 flex flex-wrap">
                <input type="text" placeholder="ID" id="id" name="id" value="{{ $cours->id }}" class="border border-gray-300 rounded-md p-2 w-full mb-2">
                <input type="text" placeholder="Type de cours" id="type_cours" name="type_cours" value="{{ $cours->type_cours }}" class="border border-gray-300 rounded-md p-2 w-full mb-2">
                <input type="text" placeholder="Intensité" id="intensite" name="intensite" value="{{ $cours->intensite }}" class="border border-gray-300 rounded-md p-2 w-full mb-2">
                <input type="text" placeholder="Capacité" id="capacite" name="capacite" value="{{ $cours->capacite }}" class="border border-gray-300 rounded-md p-2 w-full mb-2">
                <input type="text" placeholder="Durée" id="duree" name="duree" value="{{ $cours->duree }}" class="border border-gray-300 rounded-md p-2 w-full mb-2">
                <input type="text" placeholder="Sport" id="id_sport" name="id_sport" value="{{ $cours->id_sport }}" class="border border-gray-300 rounded-md p-2 w-full mb-2">
                <input type="text" placeholder="Coach" id="id_coach" name="id_coach" value="{{ $cours->id_coach }}" class="border border-gray-300 rounded-md p-2 w-full mb-2">
            </div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Modifier un cours</button>
        </div>
    </form> 
</div>


@endsection

