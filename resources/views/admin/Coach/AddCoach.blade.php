@extends('admin.admin')

@section('title2','Ajouter un coach')

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


<div class="text-white"  class="contenu ActiveContenu">
    <form method="POST" action="{{ route('admin.coach.store') }}">
        @csrf
        <div>
            <input type="text" placeholder="Nom"id="nom" name="nom">
        </div>
        <div>
            <input type="text" placeholder="Prenom"id="prenom" name="prenom">
        </div>
        <div>
            <input type="number" placeholder="Sport"id="id_sport" name="id_sport">
        </div>
        <button type="submit">Ajouter un coach</button>
    </form>
</div>

@endsection

