@extends('admin.admin')

@section('title2','Modifier un sport')

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
    <form method="POST" action="{{ route('admin.sport.update') }}">
        @csrf
        <input type="text" placeholder="id"id="id" name="id" value="{{ $sports ->id }}"> 
        <div>
            <input type="text" placeholder="Nom"id="nom_sport" name="nom_sport" value="{{ $sports ->nom_sport }}"> 
        </div>
        <div>
            <textarea type="text" placeholder="Description" id="description" name="description" value="{{ $sports ->description }}"></textarea>
        </div>
        <button type="submit">Modifier un sport</button>
    </form> 
</div>

@endsection

