@extends('admin.admin')

@section('title2','Ajouter une participation')

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
    <form method="POST" action="{{ route('admin.participation.store') }}">
        @csrf
        <div>
            <input type="text" placeholder="Date de participation"id="date_participation" name="date_participation">
        </div>
        <div>
            <input type="text" placeholder="Utilisateur"id="id_user" name="id_user">
        </div>
        <div>
            <input type="text" placeholder="Cours"id="id_cours" name="id_cours">
        </div>
        <button type="submit">Ajouter une participation</button>
    </form>
</div>

@endsection

