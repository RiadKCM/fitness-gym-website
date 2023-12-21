@extends('admin.admin')

@section('title2','Modifier un utilisateur')

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
    <form method="POST" action="{{ route('admin.utilisateur.update') }}">
        @csrf
        <input type="text" placeholder="id"id="id" name="id" value="{{ $users ->id }}"> 
        <div>
            <input type="text" placeholder="Nom"id="name" name="name" value="{{ $users->name }}">
        </div>
        <div>
            <input type="text" placeholder="email"id="email" name="email" value="{{ $users ->email }}"> 
        </div>
        <div>
            <input type="text" placeholder="Admin"id="is_admin" name="is_admin" value="{{ $users ->is_admin }}"> 
        </div>
        <button type="submit">Modifier un utilisateur</button>
    </form> 
</div>

@endsection

