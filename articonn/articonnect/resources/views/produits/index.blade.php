@extends('layouts.login')
@section('title',$pageTitle)
@section('content')

<section class="breadcrumb-area breadcrumb-bg" data-background="{{ asset('public/img/bg/breadcrumb_bg.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-content text-center">
                    <h2>Nos artisans</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">Accueil</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Liste artisans</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="inventory-details-area gray-lite-bg pt-60 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <aside class="inventory-sidebar">
                    <div class="widget inventory-widget">
                        <div class="advisor-wrap mb-25">
                            <div class="advisor-thumb">
                                <img src="{{ asset('public/img/user.png') }}" alt="">
                            </div>
                            <div class="advisor-info">
                                <h5><a href="#">Cedric Koffi</a></h5>
                               <div>
                                    <ul>
                                        <li class="profile" style="font-weight: bold"><i class="fas fa-book"></i> Tisserand</li>
                                        <li class="profile"><i class="flaticon-phone-call"></i> +225 07 06 45 88 17</li>
                                        <li><i class="fas fa-map-marker-alt"></i> Cocody Chateau</li>
                                    </ul>
                               </div>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
            <div class="col-lg-4">
                <aside class="inventory-sidebar">
                    <div class="widget inventory-widget">
                        <div class="advisor-wrap mb-25">
                            <div class="advisor-thumb">
                                <img src="{{ asset('public/img/user.png') }}" alt="">
                            </div>
                            <div class="advisor-info">
                                <h5><a href="#">Amadou Bérenger</a></h5>
                               <div>
                                    <ul>
                                        <li class="profile" style="font-weight: bold"><i class="fas fa-book"></i> Art et décoration</li>
                                        <li class="profile"><i class="flaticon-phone-call"></i> +225 05 64 93 95 25</li>
                                        <li><i class="fas fa-map-marker-alt"></i> Abobo </li>
                                    </ul>
                               </div>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
            <div class="col-lg-4">
                <aside class="inventory-sidebar">
                    <div class="widget inventory-widget">
                        <div class="advisor-wrap mb-25">
                            <div class="advisor-thumb">
                                <img src="{{ asset('public/img/user.png') }}" alt="">
                            </div>
                            <div class="advisor-info">
                                <h5><a href="#">Kouamé Georgette</a></h5>
                               <div>
                                    <ul>
                                        <li class="profile" style="font-weight: bold"><i class="fas fa-book"></i> Couture</li>
                                        <li class="profile"><i class="flaticon-phone-call"></i> +225 07 48 45 38 43</li>
                                        <li><i class="fas fa-map-marker-alt"></i> Yopougon</li>
                                    </ul>
                               </div>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
        <div class="row" style="margin-top: 35px;">
            <div class="col-lg-4">
                <aside class="inventory-sidebar">
                    <div class="widget inventory-widget">
                        <div class="advisor-wrap mb-25">
                            <div class="advisor-thumb">
                                <img src="{{ asset('public/img/user.png') }}" alt="">
                            </div>
                            <div class="advisor-info">
                                <h5><a href="#">Kouadio Franck</a></h5>
                               <div>
                                    <ul>
                                        <li class="profile" style="font-weight: bold"><i class="fas fa-book"></i> Menuiserie</li>
                                        <li class="profile"><i class="flaticon-phone-call"></i> +225 07 47 33 88 57</li>
                                        <li><i class="fas fa-map-marker-alt"></i> Marcory</li>
                                    </ul>
                               </div>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
            <div class="col-lg-4">
                <aside class="inventory-sidebar">
                    <div class="widget inventory-widget">
                        <div class="advisor-wrap mb-25">
                            <div class="advisor-thumb">
                                <img src="{{ asset('public/img/user.png') }}" alt="">
                            </div>
                            <div class="advisor-info">
                                <h5><a href="#">ADAMAN</a></h5>
                               <div>
                                    <ul>
                                        <li class="profile" style="font-weight: bold"><i class="fas fa-book"></i> Menuiserie</li>
                                        <li class="profile"><i class="flaticon-phone-call"></i> +225 07 06 45 88 17</li>
                                        <li><i class="fas fa-map-marker-alt"></i> Port Bouet </li>
                                    </ul>
                               </div>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
            <div class="col-lg-4">
                <aside class="inventory-sidebar">
                    <div class="widget inventory-widget">
                        <div class="advisor-wrap mb-25">
                            <div class="advisor-thumb">
                                <img src="{{ asset('public/img/user.png') }}" alt="">
                            </div>
                            <div class="advisor-info">
                                <h5><a href="#">Meite Aboubacar</a></h5>
                               <div>
                                    <ul>
                                        <li class="profile" style="font-weight: bold"><i class="fas fa-book"></i> Maçonnerie</li>
                                        <li class="profile"><i class="flaticon-phone-call"></i> +225 07 06 45 88 17</li>
                                        <li><i class="fas fa-map-marker-alt"></i> Port Bouet</li>
                                    </ul>
                               </div>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
        </div>

        <div class="row" style="margin-top: 20px; padding-left: 45px">
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
</section>

@endsection
