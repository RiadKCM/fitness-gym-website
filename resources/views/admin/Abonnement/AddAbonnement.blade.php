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
    <form method="POST" action="{{ route('admin.abonnement.store') }}" class="px-20 pt-6 pb-8 mb-4">
        @csrf
        <div>
            <input type="text" placeholder="Type d'abonnement"id="type_abonnement" name="type_abonnement">
        </div>
        <div>
            <input type="number" placeholder="Prix"id="prix" name="prix">
        </div>
        <div>
            <input type="number" placeholder="Durée"id="duree_validite" name="duree_validite">
        </div>
        <div>
            <textarea type="text" placeholder="Description" id="description" name="description"></textarea>
        </div>
        <button type="submit">Ajouter un abonnement</button>
    </form>
</div>

@endsection

