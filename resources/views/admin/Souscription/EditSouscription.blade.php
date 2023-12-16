@extends('admin.admin')

@section('title2','Modifier une souscription')

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
    <form method="POST" action="{{ route('admin.souscription.update') }}">
        @csrf
        <input type="number" placeholder="id"id="id" name="id" value="{{ $souscriptions ->id }}"> 
        <div>
            <input type="number" placeholder="Utilisateur"id="id_user" name="id_user" value="{{ $souscriptions ->id_user }}"> 
        </div>
        <div>
            <input type="number" placeholder="Cours"id="id_cours" name="id_cours" value="{{ $souscriptions->id_abonnement }}">
        </div>
        <button type="submit">Modifier une souscription</button>
    </form> 
</div>

@endsection

