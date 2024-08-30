@extends('layouts.login')
@section('title',$pageTitle)
@section('content')

<section class="breadcrumb-area breadcrumb-bg" data-background="{{ asset('public/img/bg/breadcrumb_bg.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-content text-center">
                    <h2>Les produits d'artisans</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">Accueil</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Articles artisans</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="latest-cars-area latest-cars-three pt-60 pb-120">
    <div class="container">
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
                    <nav class="text-center">
                        <ul class="pagination">
                            <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
