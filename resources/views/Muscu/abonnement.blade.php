

@extends('base')

@section('content')
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb-text">
                        <h2>Abonnements</h2>
                        <div class="bt-option">
                            <a href="{{ url('/') }}">Accueil</a>
                            <span>Abonnements</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Services Section Begin -->
    <section class="services-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Que faisons-nous ?</span>
                        <h2>REPOUSSEZ VOS LIMITES</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 order-lg-1 col-md-6 p-0">
                    <div class="ss-pic">
                        <img src="img/services/services-1.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-3 order-lg-2 col-md-6 p-0">
                    <div class="ss-text">
                        <h4>Entraînement personnel</h4>
                        <p>Découvrez une expérience d'entraînement personnel de qualité supérieure dans notre salle de sport !</p>
                        <a href="#">Explorez</a>
                    </div>
                </div>
                <div class="col-lg-3 order-lg-3 col-md-6 p-0">
                    <div class="ss-pic">
                        <img src="img/services/services-2.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-3 order-lg-4 col-md-6 p-0">
                    <div class="ss-text">
                        <h4>Cours de fitness en groupe</h4>
                        <p>Découvrez notre large gamme de Cours de fitness en groupe pour tous les niveaux de condition physique.</p>
                        <a href="#">Explorez</a>
                    </div>
                </div>
                <div class="col-lg-3 order-lg-8 col-md-6 p-0">
                    <div class="ss-pic">
                        <img src="img/services/services-4.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-3 order-lg-7 col-md-6 p-0">
                    <div class="ss-text second-row">
                        <h4>La musculation</h4>
                        <p>Sculptez votre corps et atteignez vos objectifs de forme grâce à la musculation dans notre salle de sport de premier choix !</p>
                        <a href="#">Explorez</a>
                    </div>
                </div>
                <div class="col-lg-3 order-lg-6 col-md-6 p-0">
                    <div class="ss-pic">
                        <img src="img/services/services-3.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-3 order-lg-5 col-md-6 p-0">
                    <div class="ss-text second-row">
                        <h4>Entraînement en force</h4>
                        <p>Expérimentez l'entraînement en force de haut niveau dans notre salle de sport de pointe !</p>
                        <a href="#">Explorez</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section End -->

    <!-- Banner Section Begin -->
    <section class="banner-section set-bg" data-setbg="img/banner-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="bs-text service-banner">
                        <h2>Exerce-toi jusqu'à ce que le corps obéisse</h2>
                        <div class="bt-tips">Là où la santé, la beauté et la forme se rencontrent.</div>
                        <a href="https://www.youtube.com/watch?v=1ujwZKjs-pQ" class="play-btn video-popup"><i
                                class="fa fa-caret-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Section End -->

    <!-- Pricing Section Begin -->
    <section class="pricing-section service-pricing spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Nos Plans</span>
                        <h2>Choisissez votre plan tarifaire</h2>
                    </div>
                </div> 
            </div>
            <div class="row justify-content-center">
                @foreach($abonnements as $abonnement)
                    <div class="col-lg-4 col-md-8">
                        <div class="ps-item">
                            <h3>Abonnement</h3>
                            <div class="pi-price">
                                <h2>{{ $abonnement->prix }}€</h2>
                                <span>{{ $abonnement->type_abonnement }}</span>
                            </div>
                            <ul>
                                <li>{{ $abonnement->description }}</li>
                            </ul>
                            <form method="POST" action="{{ route('souscrire', ['id_abonnement' => $abonnement->id]) }}">
                                @csrf
                                <button type="submit" class="primary-btn">Inscrivez-vous maintenant</button>
                            </form>                        
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Pricing Section End -->

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




