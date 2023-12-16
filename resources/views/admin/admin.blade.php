@extends('admin.baseAdmin')



@section('content')
<div class="flex flex-wrap justify-content-center ">
    <form action="">
        <button style="width: 150px;">
            <a href="{{ route('admin.ListUtilisateur') }}" class="text-white">Utilisateur</a>
        </button>

        <button style="width: 150px;">
            <a href="{{ route('admin.ListCoach') }}" class="text-white">Coach</a>
        </button>

        <button style="width: 150px;">
            <a href="{{ route('admin.ListAbonnement') }}" class="text-white">Abonnement</a>
        </button>
    </form>
<br>
    <form action="">
        <button style="width: 150px;">
            <a href="{{ route('admin.ListSport') }}" class="text-white">Sport</a>
        </button>

        <button style="width: 150px;">
            <a href="{{ route('admin.ListSouscription') }}" class="text-white">Souscription</a>
        </button>

        <button style="width: 150px;">
            <a href="{{ route('admin.ListCours') }}" class="text-white">Cours</a>
        </button>
    </form>
<br>
    <form action="">
        <button style="width: 150px;">
            <a href="{{ route('admin.ListParticipation') }}" class="text-white">Participation</a>
        </button>
    </form>
</div>
@endsection


