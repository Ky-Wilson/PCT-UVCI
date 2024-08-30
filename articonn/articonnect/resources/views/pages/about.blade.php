@extends('layouts.login')
@section('title',$pageTitle)
@section('content')

<section class="breadcrumb-area breadcrumb-bg" data-background="{{ asset('public/img/bg/breadcrumb_bg.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-content text-center">
                    <h2>Presentation</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">Accueil</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Qui sommes-nous ?</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="inner-about-area gray-lite-bg pt-120 pb-60">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="inner-about-img mb-75">
                    <img src="{{ asset('public/img/about_img.jpg') }}" alt="">
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-10">
                <div class="inner-about-content mb-60">
                    <div class="section-title mb-25">
                        <span class="sub-title">ARTICONNECT</span>
                        <h2 class="title">Notre mission : Promouvoir l'artisanat <span>Ivoirien</span></h2>
                        <div class="line"><img src="{{ asset('public/img/images/title_line.png') }}" alt=""></div>
                    </div>

                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-8">
                <div class="about-features-item">
                    <div class="icon">
                        <i class="flaticon-fan"></i>
                    </div>
                    <div class="content">
                        <h5>Engagement Local</h5>
                        <p>Nous soutenons l'économie locale en collaborant directement avec des artisans ivoiriens, favorisant ainsi le développement durable.</p>
                    </div>
                </div>
                <div class="about-features-item">
                    <div class="icon">
                        <i class="flaticon-piston"></i>
                    </div>
                    <div class="content">
                        <h5>Diversité des Métiers</h5>
                        <p>De la poterie à la bijouterie, explorez une large gamme de métiers artisanaux reflétant la richesse culturelle de la Côte d'Ivoire.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-8">
                <p>Nous sommes passionnés par la richesse et la diversité de l'artisanat ivoirien. Notre mission est de valoriser le savoir-faire unique des artisans locaux en offrant une plateforme dédiée à leurs créations authentiques. Découvrez des produits faits main qui incarnent l'héritage culturel et la créativité de la Côte d'Ivoire.</p>
            </div>
        </div>
    </div>
</section>


@endsection
