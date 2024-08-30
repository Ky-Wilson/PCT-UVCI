@extends('layouts.login')
@section('title',$pageTitle)
@section('content')


<section class="breadcrumb-area breadcrumb-bg" data-background="{{ asset('public/img/bg/breadcrumb_bg.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-content text-center">
                    <h2>Compte artisan</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">Accueil</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Mon compte</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb-area-end -->

<!-- author-profile-area -->
<div class="author-profile-area gray-lite-bg pt-120 pb-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-4 col-lg-5 col-md-9 order-2 order-lg-0">
                <aside class="author-profile-sidebar">
                    <div class="author-profile-wrap">
                        <div class="author-profile-thumb">
                            <img src="{{ asset('public/img/user.png') }}" alt="">
                        </div>
                        <h5 class="name">{{ Auth::guard('artisan')->user()->nom }}</h5>
                        <span class="des">{{ Auth::guard('artisan')->user()->metier_id }}</span>
                        <div class="location">
                            <p><i class="flaticon-phone-call"></i> {{ Auth::guard('artisan')->user()->tel }} <i class="fas fa-map-marker-alt"></i>{{ Auth::guard('artisan')->user()->ville }}</p>
                        </div>
                        <div class="author-profile-btn mt-2">
                            <a href="#" class="btn black">Ajouter un article</a>
                            <a href="{{ url('/logout') }}" class="btn">Deconnexion</a>
                        </div>
                    </div>
                </aside>
            </div>
            <div class="col-xl-8 col-lg-7 col-md-9">
                <div class="inventory-list-item">
                    <div class="inventory-list-thumb">
                        <img src="{{ asset('public/img/product/p3.jpg')}}" alt="">
                    </div>
                    <div class="inventory-list-content">
                        <h6><a href="#">Art et décoration</a></h6>
                        <h4><a href="#">Tabeau d'art</a></h4>
                        <p class="location"><i class="fas fa-map-marker-alt"></i>Abidjan Cocody</p>
                        <div class="inv-item-meta">
                            <ul>
                                <li class="call"><a href="tel:0987654321"><i class="fas fa-phone-alt"></i>Call</a></li>
                                <li>Model : 2020</li>
                                <li>Doors : 2</li>
                                <li>260,000 miles</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
