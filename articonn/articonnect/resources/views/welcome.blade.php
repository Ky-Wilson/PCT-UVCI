@extends('layouts.app')
@section('title',$pageTitle)

@section('content')

<<section class="banner-area home-three-banner" data-background="{{ asset('public/img/slider/b1.jpg') }}">
    <div class="container custom-container">
        <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-9">
                <div class="slider-content text-center">
                    <h2 class="wow fadeInUp" data-wow-delay=".9s">Le moyen fiable d'avoir un artisan</h2>
                    <p class="wow fadeInUp" data-wow-delay="1.2s">Exprimez votre besoin sur Articonnect est simple et rapide. Dites-nous simplement ce dont vous avez besoin et nous vous présenterons plusieurs artisans qualifiés près de chez vous. Ensuite, vous pourrez consulter leurs profils et faire votre choix.</p>
                    <a href="#" class="btn wow fadeInUp" data-wow-delay="1.5s">Comment ça marche ?</a>
                </div>
            </div>
        </div>
    </div>
    <div class="banner-car-search-wrap">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <form action="#" method="GET" class="car-search-form">
                        <div class="row align-items-end justify-content-center">
                            <div class="col custom-col-5">
                                <select name="metiers" class="selected" required>
                                    <option>Choisir un metiers</option>
                                    @foreach ($metiers as $list)
                                    <option value="{{ $list->slug }}">{{ $list->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col custom-col-5">
                                <select class="selected" name="ville" onchange="searchcommune(this.value);" required>
                                    <option>Choisir une Ville</option>
                                    <option value="abidjan">Abidjan</option>
                                    <option value="bouake">Bouaké</option>
                                    <option value="yamoussoukro">Yamoussoukro</option>
                                </select>
                            </div>
                            <div class="col custom-col-5" id="idcommune" style="display: none;">
                                <select name="commune" class="selected">
                                    <option>Choisir de commune</option>
                                    <option value="abobo">Abobo</option>
                                    <option value="adjame">Adjamé</option>
                                    <option value="Abobo">Abobo</option>
                                    <option value="anyama">Anyama</option>
                                    <option value="attecoube">Attécoubé</option>
                                    <option value="bingerville">Bingerville</option>
                                    <option value="cocody">Cocody</option>
                                    <option value="koumassi">Koumassi</option>
                                    <option value="marcory">Marcory</option>
                                    <option value="plateau">Plateau</option>
                                    <option value="port bouet">Port bouët</option>
                                    <option value="treichville">Treichville</option>
                                    <option value="songon">Songon</option>
                                    <option value="yopougon">Yopougon</option>
                                </select>
                            </div>
                            <div class="col custom-col-5">
                                <button class="btn" type="submit">TROUVER UN ARTISAN</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- banner-area-end -->

<!-- features-area -->
<section class="features-area gray-lite-bg pt-120 pb-90">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                <div class="features-item mb-30">
                    <div class="features-icon mb-25">
                        <img src="{{ asset('public/img/icon/authentication.png') }}" alt="">
                    </div>
                    <div class="features-content">
                        <h5>Authenticité Garantie</h5>
                        <p>Chaque produit est créé à la main par des artisans passionnés, avec attention et au respect des traditions</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                <div class="features-item mb-30">
                    <div class="features-icon mb-25">
                        <img src="{{ asset('public/img/icon/quality.png') }}" alt="">
                    </div>
                    <div class="features-content">
                        <h5>Qualité Artisanale</h5>
                        <p>Les artisans avec lesquels nous travaillons pour garantir des produits de haute qualité, durables et faits pour durer</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                <div class="features-item mb-30">
                    <div class="features-icon mb-25">
                        <img src="{{ asset('public/img/icon/support.png') }}" alt="">
                    </div>
                    <div class="features-content">
                        <h5>Soutien Locale</h5>
                        <p>En achetant sur notre site, vous soutenez directement les artisans locaux et contribuez à la préservation de métiers d'art</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                <div class="features-item mb-30">
                    <div class="features-icon mb-25">
                        <img src="{{ asset('public/img/icon/unique.png') }}" alt="">
                    </div>
                    <div class="features-content">
                        <h5>Produits Uniques</h5>
                        <p>Découvrez des pièces uniques, souvent personnalisables selon vos préférence qui reflètent votre style et vos valeurs</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- features-area-end -->

<!-- latest-cars-area -->
<section class="latest-cars-area latest-cars-three pt-120 pb-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6">
                <div class="section-title text-center mb-35">
                    <h2 class="overlay-title">Artisans</h2>
                    <span class="sub-title">Des produits d'artisans</span>
                    <h2 class="title">Quelques articles</h2>
                </div>
            </div>
        </div>
        <div class="latest-cars-wrapper">
            <div class="row latest-car-items-active">
                <div class="col-lg-4 col-md-6 grid-item grid-sizer">
                    <div class="latest-car-item mb-40">
                        <div class="latest-car-thumb">
                            <a href="#">
                                <img src="{{ asset('public/img/product/p1.jpg') }}" alt="">
                            </a>
                        </div>
                        <div class="latest-car-content-wrap">
                            <div class="latest-car-content">
                                <h5><a href="#">Pagnes Baoulé</a></h5>
                            </div>
                            <div class="latest-car-meta">
                                <ul>
                                    <li><i class="fas fa-book"></i>Tisserand</li>
                                    <li><i class="fas fa-user"></i> Koffi Stephane</li>
                                    <li><i class="fas fa-map-marker-alt"></i> Bouaké</li>
                                </ul>
                            </div>
                            <div class="latest-car-bottom">
                                <ul>
                                    <li><span class="total">Prix :</span><span class="price">45 000 FCFA</span></li>
                                    <li> <a href="#" class="btn btn-sm">Contacter</a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 grid-item grid-sizer">
                    <div class="latest-car-item mb-40">
                        <div class="latest-car-thumb">
                            <a href="inventory-details.html">
                                <img src="{{ asset('public/img/product/p2.jpg') }}" alt="">
                            </a>
                            <a href="#" class="btn book-btn">Acheter</a>
                        </div>
                        <div class="latest-car-content-wrap">
                            <div class="latest-car-content">
                                <h5><a href="inventory-details.html">Boubou Yacouba</a></h5>
                            </div>
                            <div class="latest-car-meta">
                                <ul>
                                    <li><i class="fas fa-book"></i>Tisserand</li>
                                    <li><i class="fas fa-user"></i> Serge Kassi</li>
                                    <li><i class="fas fa-map-marker-alt"></i> Man</li>
                                </ul>
                            </div>
                            <div class="latest-car-bottom">
                                <ul>
                                   <li><span class="total">Prix :</span><span class="price">22 000 FCFA</span></li>
                                   <li> <a href="#" class="btn btn-sm">Contacter</a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 grid-item grid-sizer">
                    <div class="latest-car-item mb-40">
                        <div class="latest-car-thumb">
                            <a href="inventory-details.html">
                                <img src="{{ asset('public/img/product/p3.jpg') }}" alt="">
                            </a>
                            <a href="#" class="btn book-btn">Acheter</a>
                        </div>
                        <div class="latest-car-content-wrap">
                            <div class="latest-car-content">
                                <h5><a href="inventory-details.html">Tabeau d'art</a></h5>
                            </div>
                            <div class="latest-car-meta">
                                <ul>
                                    <li><i class="fas fa-book"></i> Oeuvres d'art</li>
                                    <li><i class="fas fa-user"></i> Kouame judas</li>
                                    <li><i class="fas fa-map-marker-alt"></i> Cocody</li>
                                </ul>
                            </div>
                            <div class="latest-car-bottom">
                                <ul>
                                    <li><span class="total">Prix :</span><span class="price">75 000 FCFA</span></li>
                                    <li> <a href="#" class="btn btn-sm">Contacter</a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 grid-item grid-sizer">
                    <div class="latest-car-item mb-40">
                        <div class="latest-car-thumb">
                            <a href="#">
                                <img src="{{ asset('public/img/product/p4.jpg') }}" alt="">
                            </a>
                            <a href="#" class="btn book-btn">Acheter</a>
                        </div>
                        <div class="latest-car-content-wrap">
                            <div class="latest-car-content">
                                <h5><a href="#">Bijoux traditionnel</a></h5>
                            </div>
                            <div class="latest-car-meta">
                                <ul>
                                    <li><i class="fas fa-book"></i>Bijouterie</li>
                                    <li><i class="fas fa-user"></i> Esther Irié</li>
                                    <li><i class="fas fa-map-marker-alt"></i> Adjamé</li>
                                </ul>
                            </div>
                            <div class="latest-car-bottom">
                                <ul>
                                    <li><span class="total">Prix :</span><span class="price">25 000 FCFA</span></li>
                                    <li> <a href="#" class="btn btn-sm">Contacter</a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 grid-item grid-sizer">
                    <div class="latest-car-item mb-40">
                        <div class="latest-car-thumb">
                            <a href="inventory-details.html">
                                <img src="{{ asset('public/img/product/p5.jpg') }}" alt="">
                            </a>
                            <a href="#" class="btn book-btn">Acheter</a>
                        </div>
                        <div class="latest-car-content-wrap">
                            <div class="latest-car-content">
                                <h5><a href="inventory-details.html">Sandales traditionnelles</a></h5>
                            </div>
                            <div class="latest-car-meta">
                                <ul>
                                    <li><i class="fas fa-book"></i>Cordonnier</li>
                                    <li><i class="fas fa-user"></i> Diomandé Masse</li>
                                    <li><i class="fas fa-map-marker-alt"></i> Grand bassam</li>
                                </ul>
                            </div>
                            <div class="latest-car-bottom">
                                <ul>
                                   <li><span class="total">Prix :</span><span class="price">27 000 FCFA</span></li>
                                   <li> <a href="#" class="btn btn-sm">Contacter</a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 grid-item grid-sizer">
                    <div class="latest-car-item mb-40">
                        <div class="latest-car-thumb">
                            <a href="inventory-details.html">
                                <img src="{{ asset('public/img/product/p6.jpg') }}" alt="">
                            </a>
                            <a href="#" class="btn book-btn">Acheter</a>
                        </div>
                        <div class="latest-car-content-wrap">
                            <div class="latest-car-content">
                                <h5><a href="inventory-details.html">Paniers tissés</a></h5>
                            </div>
                            <div class="latest-car-meta">
                                <ul>
                                    <li><i class="fas fa-book"></i> Artisan</li>
                                    <li><i class="fas fa-user"></i>Arnauld Behé</li>
                                    <li><i class="fas fa-map-marker-alt"></i> Abobo</li>
                                </ul>
                            </div>
                            <div class="latest-car-bottom">
                                <ul>
                                    <li><span class="total">Prix :</span><span class="price">10 000 FCFA</span></li>
                                    <li> <a href="#" class="btn btn-sm">Contacter</a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="latest-car-btn text-center mt-10">
                        <a href="#" class="btn">VOIR PLUS D'ARTICLES</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- latest-cars-area-end -->

<!-- about-area -->
<section class="about-area about-bg pt-120 pb-120" data-background="{{ asset('public/img/bg/about_bg.jpg') }}">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-img-wrap">
                    <div class="row align-items-end">
                        <div class="col-sm-6">
                            <div class="about-exp">
                                <h2>03<span>+</span></h2>
                            </div>
                            <div class="about-img">
                                <img src="{{ asset('public/img/images/ab.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="about-img">
                                <img src="{{ asset('public/img/images/ab1.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-content-wrap">
                    <div class="section-title white-title mb-40">
                        <span class="sub-title">Qui somme-nous ?</span>
                        <h2 class="title">Notre mission : Promouvoir l'artisanat <span>Ivoirien</span></h2>
                    </div>
                    <div class="content">
                        <p>Nous sommes passionnés par la richesse et la diversité de l'artisanat ivoirien. Notre mission est de valoriser le savoir-faire unique des artisans locaux en offrant une plateforme dédiée à leurs créations authentiques. Découvrez des produits faits main qui incarnent l'héritage culturel et la créativité de la Côte d'Ivoire.</p>
                    </div>
                    <div class="about-list mb-40">
                        <ul>
                            <li>
                                <div class="icon"><i class="fas fa-check"></i></div>
                                Chaque produit est fabriqué à la main
                            </li>
                            <li>
                                <div class="icon"><i class="fas fa-check"></i></div>
                                Nous soutenons les artisans ivoiriens
                            </li>
                            <li>
                                <div class="icon"><i class="fas fa-check"></i></div>
                                Une large gamme de métiers artisanaux
                            </li>
                            <li>
                                <div class="icon"><i class="fas fa-check"></i></div>
                                Les produits portent en eux une histoire et des traditions
                            </li>
                        </ul>
                    </div>
                    <a href="#" class="btn">Voir plus</a>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="fact-area fact-bg pt-135 pb-70 jarallax parallax-img" data-background="{{ asset('public/img/bg.jpg') }}">
    <div class="fact-area-title">ARTICONNECT <span class="left"></span><span class="right"></span></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="fact-item mb-50">
                    <div class="fact-content">
                        <h3><span class="odometer" data-count="15"></span>+</h3>
                        <p>CATEGORIE DE METIERS</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="fact-item mb-50">
                    <div class="fact-content">
                        <h3><span class="odometer" data-count="5561"></span>+</h3>
                        <p>ARTISANS IVOIRIENS</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="fact-item mb-50">
                    <div class="fact-content">
                        <h3><span class="odometer" data-count="30"></span>+</h3>
                        <p>VILLES DU PAYS</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="fact-item mb-50">
                    <div class="fact-content">
                        <h3><span class="odometer" data-count="34"></span>K+</h3>
                        <p>CLIENTS SATISFAITS</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
