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


<div class="text-white"  class="contenu ActiveContenu">
    <form method="POST" action="{{ route('admin.participation.update') }}">
        @csrf
        <input type="text" placeholder="id"id="id" name="id" value="{{ $participations ->id }}"> 
        <div>
            <input type="text" placeholder="Date de participation"id="date_participation" name="date_participation" value="{{ $participations->nom }}">
        </div>
        <div>
            <input type="text" placeholder="Utilisateur"id="id_user" name="id_user" value="{{ $participations ->id_user }}"> 
        </div>
        <div>
            <input type="text" placeholder="Cours"id="id_cours" name="id_cours" value="{{ $participations->id_cours }}">
        </div>
        <button type="submit">Modifier une participation</button>
    </form> 
</div>

@endsection

