@extends('admin.admin')

@section('title2','Modifier un abonnement')

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
    <form method="POST" action="{{ route('admin.abonnement.update') }}">
        @csrf
        <input type="text" placeholder="id"id="id" name="id" value="{{ $abonnements ->id }}"> 
        <div>
            <input type="text" placeholder="Type d'abonnement"id="type_abonnement" name="type_abonnement" value="{{ $abonnements->type_abonnement }}">
        </div>
        <div>
            <input type="number" placeholder="Prix"id="prix" name="prix" value="{{ $abonnements ->prix }}"> 
        </div>
        <div>
            <input type="number" placeholder="Durée"id="duree_validite" name="duree_validite" value="{{ $abonnements->duree_validite }}">
        </div>
        <div>
            <textarea type="text" placeholder="Description" id="description" name="description" value="{{ $abonnements ->description }}"></textarea>
        </div>
        <button type="submit">Modifier un abonnement</button>
    </form> 
</div>

@endsection

