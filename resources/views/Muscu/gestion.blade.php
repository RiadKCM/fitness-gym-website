
@extends('base')

@section('content')
<!-- Team Section Begin -->
<section class="team-section team-page spad">
    <br><br><br><br><br><br><br><br>
    <div class="row justify-content-center align-items-center" style="height: 10vh;"></div>
        <div class="col-md-6">
            <div class="row">
                @if(isset($abonnementUtilisateur))
                <div class="overflow-x-auto">
                    <table class="table-auto border border-white text-white">
                        <thead>
                            <tr>
                                <th class="border border-white px-4 py-2">Type d'abonnement</th>
                                <th class="border border-white px-4 py-2">Prix</th>
                                <th class="border border-white px-4 py-2">Durée</th>
                                <th class="border border-white px-4 py-2">Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border border-white px-4 py-2">{{$abonnementUtilisateur->type_abonnement}}</td>
                                <td class="border border-white px-4 py-2">{{$abonnementUtilisateur->prix}}€</td>
                                <td class="border border-white px-4 py-2">{{$abonnementUtilisateur->duree_validite}} an</td>
                                <td class="border border-white px-4 py-2">{{$abonnementUtilisateur->description}}</td>
                            </tr>
                        </tbody>
                    </table>
                    <br>
                    <form action="{{ route('destroy.souscription', $abonnementUtilisateur->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Résilier l'abonnement</button>
                    </form>
                </div>
                @else
                <div class="text-white">
                    L'utilisateur n'a pas d'abonnement.
                </div>
                @endif
            </div>
        </div>
    </div>
</section>

<!-- Team Section End -->








<!-- Get In Touch Section Begin -->
<div class="gettouch-section">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="gt-text">
                    <i class="fa fa-map-marker"></i>
                    <p>333 Middle Winchendon Rd, Rindge,<br/> NH 03461</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="gt-text">
                    <i class="fa fa-mobile"></i>
                    <ul>
                        <li>125-711-811</li>
                        <li>125-668-886</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="gt-text email">
                    <i class="fa fa-envelope"></i>
                    <p>Support.gymcenter@gmail.com</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Get In Touch Section End -->
@endsection

