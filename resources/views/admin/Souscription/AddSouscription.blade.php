@extends('admin.admin')

@section('title2','Ajouter une souscription')

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
    <form method="POST" action="{{ route('admin.souscription.store') }}">
        @csrf
        <div>
            <input type="number" placeholder="Utilisateur"id="id_user" name="id_user">
        </div>
        <div>
            <input type="number" placeholder="Abonnement"id="id_abonnement" name="id_abonnement">
        </div>
        <button type="submit">Ajouter une souscription</button>
    </form>
</div>

@endsection

