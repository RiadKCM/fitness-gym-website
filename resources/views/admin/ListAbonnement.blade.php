@extends('admin.admin')

@section('title2','Liste des abonnements')

@section('content')
<div>
</div>
<form action="#">
    <button><a href="{{ route('admin.abonnement.create') }}"class="text-white">Ajouter un abonnement</a></button>
</form>

@endsection