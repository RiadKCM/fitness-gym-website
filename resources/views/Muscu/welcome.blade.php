@extends('base')

@section('content')
<!-- Hero Section Begin -->
<section class="hero-section">
    <div class="hs-slider owl-carousel">
        <div class="hs-item set-bg" data-setbg="img/hero/hero-1.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-6">
                        <div class="hi-text">
                            <span>Prends soin de ton corps</span>
                            <h1>Sois <strong>fort</strong> Entraîne-toi !</h1>
                            <a href="#" class="primary-btn">Plus d'infos</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hs-item set-bg" data-setbg="img/hero/hero-2.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-6">
                        <div class="hi-text">
                            <span>Prends soin de ton corps</span>
                            <h1>Sois <strong>fort</strong> Entraîne-toi !</h1>
                            <a href="#" class="primary-btn">Plus d'infos</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->

<!-- ChoseUs Section Begin -->
<section class="choseus-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <span>Pourquoi nous choisir ?</span>
                    <h2>REPOUSSEZ VOS LIMITES</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="cs-item">
                    <span class="flaticon-034-stationary-bike"></span>
                    <h4>Équipement moderne</h4>
                    <p>Les salles de sport modernes proposent des équipements avancés pour un entraînement efficace et motivant.</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="cs-item">
                    <span class="flaticon-033-juice"></span>
                    <h4>Plan nutritionnel sain</h4>
                    <p>
                        Un plan nutritionnel sain est essentiel pour maintenir une alimentation équilibrée,
                        fournir à votre corps les nutriments dont il a besoin, et favoriser une meilleure santé globale.</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="cs-item">
                    <span class="flaticon-002-dumbell"></span>
                    <h4>Plan d'entraînement professionnel</h4>
                    <p>Un plan d'entraînement professionnel est une feuille de route stratégique conçue pour développer
                        les compétences et les connaissances nécessaires à une carrière réussie.</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="cs-item">
                    <span class="flaticon-014-heart-beat"></span>
                    <h4>Adapté à vos besoins uniques</h4>
                    <p>Notre salle de sport propose des programmes d'entraînement adaptés
                        à vos besoins uniques pour vous aider à atteindre vos objectifs de fitness personnels.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ChoseUs Section End -->

<!-- Classes Section Begin -->
<section class="classes-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <span>Nos Cours</span>
                    <h2>CE QUE NOUS POUVONS VOUS OFFRIR</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="class-item">
                    <div class="ci-pic">
                        <img src="{{ url('img/classes/class-1.jpg') }}" alt="">
                    </div>
                    <div class="ci-text">
                        <span>FORCE</span>
                        <h5>La musculation</h5>
                        <a href="#"><i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="class-item">
                    <div class="ci-pic">
                        <img src="{{ url('img/classes/class-2.jpg') }}" alt="">
                    </div>
                    <div class="ci-text">
                        <span>Cardio</span>
                        <h5>Cyclisme en salle</h5>
                        <a href="#"><i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="class-item">
                    <div class="ci-pic">
                        <img src="{{ url('img/classes/class-3.jpg')}}" alt="">
                    </div>
                    <div class="ci-text">
                        <span>FORCE</span>
                        <h5>Kettlebell puissance</h5>
                        <a href="#"><i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="class-item">
                    <div class="ci-pic">
                        <img src="{{ url('img/classes/class-4.jpg') }}" alt="">
                    </div>
                    <div class="ci-text">
                        <span>Cardio</span>
                        <h4>Cyclisme en salle</h4>
                        <a href="#"><i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="class-item">
                    <div class="ci-pic">
                        <img src="{{ url('img/classes/class-5.jpg') }}" alt="">
                    </div>
                    <div class="ci-text">
                        <span>Entraînement</span>
                        <h4>Boxe</h4>
                        <a href="#"><i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ChoseUs Section End -->

<!-- Banner Section Begin -->
<section class="banner-section set-bg" data-setbg="img/banner-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="bs-text">
                    <h2>Inscrivez-vous dès maintenant pour obtenir plus d'offres</h2>
                    <div class="bt-tips">Là où la santé, la beauté et la forme se rencontrent.</div>
                    <a href="#" class="primary-btn  btn-normal">Inscription à un cours</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Banner Section End -->

<!-- Pricing Section Begin -->
<section class="pricing-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <span>Nos Plans</span>
                    <h2>Choisissez votre plan tarifaire</h2>
                </div>
            </div>
        </div>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

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
                            <button type="submit" class="primary-btn" >Inscrivez-vous maintenant</button>
                        </form>                        
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Pricing Section End -->

<!-- Gallery Section Begin -->
<div class="gallery-section">
    <div class="gallery">
        <div class="grid-sizer"></div>
        <div class="gs-item grid-wide set-bg" data-setbg="img/gallery/gallery-1.jpg">
            <a href="{{ url('img/gallery/gallery-1.jpg') }}" class="thumb-icon image-popup"><i class="fa fa-picture-o"></i></a>
        </div>
        <div class="gs-item set-bg" data-setbg="img/gallery/gallery-2.jpg">
            <a href="{{ url('img/gallery/gallery-2.jpg') }}" class="thumb-icon image-popup"><i class="fa fa-picture-o"></i></a>
        </div>
        <div class="gs-item set-bg" data-setbg="img/gallery/gallery-3.jpg">
            <a href="{{ url('img/gallery/gallery-3.jpg') }}" class="thumb-icon image-popup"><i class="fa fa-picture-o"></i></a>
        </div>
        <div class="gs-item set-bg" data-setbg="img/gallery/gallery-4.jpg">
            <a href="{{ url('img/gallery/gallery-4.jpg') }}" class="thumb-icon image-popup"><i class="fa fa-picture-o"></i></a>
        </div>
        <div class="gs-item set-bg" data-setbg="img/gallery/gallery-5.jpg">
            <a href="{{ url('img/gallery/gallery-5.jpg') }}" class="thumb-icon image-popup"><i class="fa fa-picture-o"></i></a>
        </div>
        <div class="gs-item grid-wide set-bg" data-setbg="img/gallery/gallery-6.jpg">
            <a href="{{ url('img/gallery/gallery-6.jpg') }}" class="thumb-icon image-popup"><i class="fa fa-picture-o"></i></a>
        </div>
    </div>
</div>
<!-- Gallery Section End -->

<!-- Team Section Begin -->
<section class="team-section spad">
    <div class="container">
        {{-- <div class="row">
            <div class="col-lg-12">
                <div class="team-title">
                    <div class="section-title">
                        <span>Our Team</span>
                        <h2>TRAIN WITH EXPERTS</h2>
                    </div>
                    <a href="#" class="primary-btn btn-normal appoinment-btn">appointment</a>
                </div>
            </div>
        </div> --}}
        <div class="row">
            <div class="ts-slider owl-carousel">
                @foreach($coachs as $coach)
                <div class="col-lg-4">
                    <div class="ts-item set-bg" data-setbg="{{ asset('storage/images/' . $coach->photo_path) }}">
                        <div class="ts_text">
                            <h4>{{ $coach->nom }} {{ $coach->prenom }}</h4>
                            <span>Gym Trainer</span>
                        </div>
                    </div>
                </div>
                @endforeach
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



