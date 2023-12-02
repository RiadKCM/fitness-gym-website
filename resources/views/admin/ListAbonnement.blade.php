@extends('admin.admin')

@section('title2','Liste des abonnements')

@section('content')

<form action="#">
    <button><a href="{{ route('admin.AddAbonnement') }}"class="text-white">Ajouter un abonnement</a></button>
</form>

@endsection