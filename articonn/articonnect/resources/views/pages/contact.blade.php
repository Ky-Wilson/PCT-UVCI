@extends('layouts.login')
@section('title',$pageTitle)
@section('content')

<section class="breadcrumb-area breadcrumb-bg" data-background="{{ asset('public/img/bg/breadcrumb_bg.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-content text-center">
                    <h2>Nos contacts</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">Accueil</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Contacts</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="contact-area pt-120 mb-120">
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-lg-6">
                <div class="contact-info-wrap">
                    <div class="section-title text-left mb-25">
                        <span class="sub-title">contacts</span>
                        <h2 class="title">Notre adresse assistance</h2>
                        <div class="line"><img src="{{ asset('public/img/images/title_line.png') }}" alt=""></div>
                    </div>
                    <p>Les informations de contact sont les données que vous fournissez qui permet à l'equipe de Articonnect de vous contacter. </p>
                    <ul class="contact-info-list">
                        <li>
                            <div class="icon"><i class="fas fa-map-marker-alt"></i></div>
                            <div class="content">
                                <h5>Situation géographique</h5>
                                <p>Abidjan Cocody 2 plateaux</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon"><i class="fas fa-phone-alt"></i></div>
                            <div class="content">
                                <h5>Telephone</h5>
                                <p><a href="tel:123456789">+225 01 02 03 04 05</a></p>
                            </div>
                        </li>
                        <li>
                            <div class="icon"><i class="far fa-envelope"></i></div>
                            <div class="content">
                                <h5>Email</h5>
                                <p><a href="info@articonnect.ci"><span class="__cf_email__">info@articonnect.ci</span></a></p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-7 col-lg-6">
                <div class="contact-form-wrap">
                    <div class="login-wrap">
                        <h3 class="widget-title">Formulaire de <span>contact</span></h3>
                        <form action="#" class="login-form">
                            <div class="form-grp">
                                <label for="name">Nom & Prenoms <span>*</span></label>
                                <input type="text" id="name" placeholder="Entrer">
                            </div>
                            <div class="form-grp">
                                <label for="email"> Email <span>*</span></label>
                                <input type="email" id="email" placeholder="Entrer">
                            </div>
                            <div class="form-grp">
                                <label for="message">Votre message <span>*</span></label>
                                <textarea name="message" id="message" placeholder="Hello..."></textarea>
                            </div>
                            <button class="btn">Envoyer</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
