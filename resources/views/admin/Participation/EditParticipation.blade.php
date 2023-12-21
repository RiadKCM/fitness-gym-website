@extends('admin.admin')

@section('title2','Modifier une participation')

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
    <form method="POST" action="{{ route('admin.participation.update') }}">
        @csrf
        <input type="text" placeholder="id"id="id" name="id" value="{{ $participations ->id }}"> 
        <div>
            <input type="text" placeholder="Date de participation"id="date_participation" name="date_participation" value="{{ $participations->date_participation }}">
        </div>
        <div>
            <input type="text" placeholder="Utilisateur"id="id_user" name="id_user" value="{{ $participations ->id_user }}"> 
        </div>
        <div>
            <input type="text" placeholder="Cours"id="id_cours" name="id_cours" value="{{ $participations->id_cours }}">
        </div>
        <button type="submit">Modifier une participation</button>
    </form> 
</div> --}}

<div class="text-white border-white">
    <form method="POST" action="{{ route('admin.participation.update') }}" class="border-white">
        @csrf
        <div class="max-w-md mx-auto">
            <div class="mb-4 flex flex-wrap">
                <input type="text" placeholder="ID" id="id" name="id" value="{{ $participations->id }}" class="border border-gray-300 rounded-md p-2 w-full mb-2">
                <input type="text" placeholder="Date de participation" id="date_participation" name="date_participation" value="{{ $participations->date_participation }}" class="border border-gray-300 rounded-md p-2 w-full mb-2">
                <input type="text" placeholder="Utilisateur" id="id_user" name="id_user" value="{{ $participations->id_user }}" class="border border-gray-300 rounded-md p-2 w-full mb-2">
                <input type="text" placeholder="Cours" id="id_cours" name="id_cours" value="{{ $participations->id_cours }}" class="border border-gray-300 rounded-md p-2 w-full mb-2">
            </div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Modifier une participation</button>
        </div>
    </form> 
</div>


@endsection

