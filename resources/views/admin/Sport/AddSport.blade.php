@extends('admin.admin')

@section('title2','Ajouter un sport')

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
    <form method="POST" action="{{ route('admin.sport.store') }}">
        @csrf
        <div>
            <input type="text" placeholder="Sport"id="nom_sport" name="nom_sport">
        </div>
        <div>
            <textarea type="text" placeholder="Description" id="description" name="description"></textarea>
        </div>
        <button type="submit">Ajouter un sport</button>
    </form>
</div>

@endsection