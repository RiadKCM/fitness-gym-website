@extends('admin.admin')

@section('title2','Ajouter un abonnement')

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
    <form method="POST" action="">
        @csrf
        <div>
            <label for="type_abonnements"></label>
            <input type="text" placeholder="Type d'abonnement"id="type_abonnements" name="type_abonnements">
        </div>
        <div>
            <label for="prix"></label>
            <input type="text" placeholder="Prix"id="prix" name="prix">
        </div>
        <div>
            <label for="duree_validite"></label>
            <input type="text" placeholder="Durée"id="duree_validite" name="duree_validite">
        </div>
        <div>
            <label for="Description"></label>
            <textarea type="text" placeholder="Description" id="Description" name="Description"></textarea>
        </div>
        <button type="submit">Ajouter un abonnement</button>
    </form>
</div>

@endsection

