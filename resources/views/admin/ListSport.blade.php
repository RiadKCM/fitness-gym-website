@extends('admin.admin')

@section('title2','Liste des sports')

@section('content')
<form action="#">
    <button><a href="{{ route('admin.sport.create') }}"class="text-white">Ajouter un sport</a></button>
</form>

@endsection