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
</div>

@endsection

