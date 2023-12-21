@extends('admin.admin')

@section('title2','Modifier un sport')

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
    <form method="POST" action="{{ route('admin.sport.update') }}">
        @csrf
        <input type="text" placeholder="id"id="id" name="id" value="{{ $sports ->id }}"> 
        <div>
            <input type="text" placeholder="Nom"id="nom_sport" name="nom_sport" value="{{ $sports ->nom_sport }}"> 
        </div>
        <div>
            <textarea placeholder="Description" id="description" name="description">{{ $sports->description }}</textarea>
        </div>
        <button type="submit">Modifier un sport</button>
    </form> 
</div> --}}

<div class="text-white border-white">
    <form method="POST" action="{{ route('admin.sport.update') }}" class="border-white">
        @csrf
        <div class="max-w-md mx-auto">
            <input type="text" placeholder="ID" id="id" name="id" value="{{ $sports->id }}" class="border border-gray-300 rounded-md p-2 w-full mb-2">
            <input type="text" placeholder="Nom" id="nom_sport" name="nom_sport" value="{{ $sports->nom_sport }}" class="border border-gray-300 rounded-md p-2 w-full">
            <textarea placeholder="Description" id="description" name="description" class="border border-gray-300 rounded-md p-2 w-full">{{ $sports->description }}</textarea>    
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Modifier un sport</button>
        </div>
    </form> 
</div>


@endsection

