@extends('admin.admin')

@section('title2','Liste des coachs')

@section('content')
<form action="#">
    <button><a href="{{ route('admin.coach.create') }}"class="text-white">Ajouter un coach</a></button>
</form>

@endsection