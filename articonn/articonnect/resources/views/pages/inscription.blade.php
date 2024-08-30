@extends('layouts.login')
@section('title',$pageTitle)
@section('content')

<section class="breadcrumb-area breadcrumb-bg" data-background="{{ asset('public/img/bg/breadcrumb_bg.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-content text-center">
                    <h2>Inscrivez vous sur articonnect</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">Accueil</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Inscription</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="login-register-area gray-lite pb-120">
    <div class="container">
        <div style="margin-top: -50px;">
            <div class="row">
                <div class="col-lg-6 offset-3">
                    <?php
                        $error = session()->get('error');
                        if($error)
                        {
                    ?>
                    <div class="alert alert-danger alert-dismissible fade show">
                        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2"><polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
                        <strong>Error!</strong> <?php echo $error; session()->remove('error'); ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                        </button>
                    </div>
                    <?php } ?>
                    <?php
                        $success = session()->get('success');
                        if($success)
                        {
                    ?>
                    <div class="alert alert-success alert-dismissible fade show">
                        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>
                        <strong>Success!</strong> <?php echo $success; session()->remove('success'); ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                        </button>
                    </div>
                    <?php } ?>
                    <div class="login-wrap reg-wrap">
                        <h3 class="widget-title">Formulaire d'inscription</h3>
                        <form action="{{ route('inscription.store') }}" class="login-form" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-grp">
                                        <label for="user">Nom & Prénoms <span>*</span></label>
                                        <input type="text" id="user" placeholder="Entrer" name="nom" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-grp">
                                        <label for="tel">Téléphone<span>*</span></label>
                                        <input type="number" name="tel" placeholder="0102030405" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-grp">
                                        <label for="email">Metiers <span>*</span></label>
                                        <select  name="metiers" class="selectclass" required>
                                            <option>Choisir votre metiers</option>
                                            @foreach ($metiers as $list)
                                            <option value="{{ $list->slug }}">{{ $list->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-grp">
                                        <label for="password">Mot de passe</label>
                                        <input type="password" id="password" name="pwd" placeholder="Entrer" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-grp">
                                        <label for="email">Ville <span>*</span></label>
                                        <select class="selectclass" name="ville" onchange="searchcommune(this.value);" required>
                                            <option>Choisir votre ville</option>
                                            <option value="abidjan">Abidjan</option>
                                            <option value="bouake">Bouaké</option>
                                            <option value="yamoussoukro">Yamoussoukro</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6" id="idcommune" style="display: none;">
                                    <div class="form-grp">
                                        <label for="email">Communes <span>*</span></label>
                                        <select class="selectclass" name="commune">
                                            <option>Choisir votre commune</option>
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
                                </div>
                            </div>
                            <button class="btn" type="submit">S'inscrire</button>
                        </form>
                        <p style="margin-top: 25px;">Vous êtes déjà inscris ? <a href="{{ url('/connexion') }}" style="font-weight: bold; color:orange">Connectez-vous.</a></p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
</section>

@endsection
