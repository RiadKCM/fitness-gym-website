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


<div class="text-white"  class="contenu ActiveContenu">
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
        <button type="submit">Modifier un coach</button>
    </form> 
</div>

@endsection

