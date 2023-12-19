@extends('admin.baseAdmin')



@section('content')
<div class="flex flex-wrap justify-content-center ">
    <form action="">
        <x-primary-button style="width: 150px;">
            <a href="{{ route('admin.ListUtilisateur') }}" class="text-white">Utilisateur</a>
        </x-primary-button>

        <x-primary-button style="width: 150px;">
            <a href="{{ route('admin.ListCoach') }}" class="text-white">Coach</a>
        </x-primary-button>

        <x-primary-button style="width: 150px;">
            <a href="{{ route('admin.ListAbonnement') }}" class="text-white">Abonnement</a>
        </x-primary-button>
    </form>
<br>
    <form action="">
        <x-primary-button style="width: 150px;">
            <a href="{{ route('admin.ListSport') }}" class="text-white">Sport</a>
        </x-primary-button>

        <x-primary-button style="width: 150px;">
            <a href="{{ route('admin.ListSouscription') }}" class="text-white">Souscription</a>
        </x-primary-button>

        <x-primary-button style="width: 150px;">
            <a href="{{ route('admin.ListCours') }}" class="text-white">Cours</a>
        </x-primary-button>
    </form>
<br>
    <form action="">
        <x-primary-button style="width: 150px;">
            <a href="{{ route('admin.ListParticipation') }}" class="text-white">Participation</a>
        </x-primary-button>
    </form>
</div>
@endsection


