@extends('admin.admin')

@section('title2','Ajouter un cours')

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
    <form method="POST" action="{{ route('admin.cours.store') }}">
        @csrf
        <div>
            <input type="text" placeholder="Type de cours"id="type_cours" name="type_cours">
        </div>
        <div>
            <input type="text" placeholder="Intensité"id="intensite" name="intensite">
        </div>
        <div>
            <input type="text" placeholder="Capacité"id="capacite" name="capacite">
        </div>
        <div>
            <input type="time" placeholder="Durée"id="duree" name="duree">
        </div>
        <div>
            <input type="number" placeholder="Sport"id="id_sport" name="id_sport">
        </div>
        <div>
            <input type="number" placeholder="Coach"id="id_coach" name="id_coach">
        </div>
        <button type="submit">Ajouter un cours</button>
    </form>
</div>

@endsection

