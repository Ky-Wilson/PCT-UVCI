@extends('layouts.login')
@section('title',$pageTitle)
@section('content')

<section class="breadcrumb-area breadcrumb-bg" data-background="{{ asset('public/img/bg/breadcrumb_bg.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-content text-center">
                    <h2>Connectez-vous à votre comptre</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">Accueil</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Connexion</li>
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
                    <div class="login-wrap reg-wrap">
                        <h3 class="widget-title">Page de connexion</h3>
                        <form action="{{ route('artisan.login') }}" class="login-form" method="POST">
                            @csrf
                            <div class="form-grp">
                                <label for="tel">Numero de téléphone <span>*</span></label>
                                <input type="number" id="tel" class="@error('phone') is-invalid @enderror" name="tel" value="{{ old('tel') }}" required autocomplete="tel" autofocus>
                                @error('tel')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-grp">
                                <label for="password">Mot de passe <span>*</span></label>
                                <input type="password" id="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <button class="btn" type="submit">Connexion</button>
                        </form>
                        <p style="margin-top: 25px;">Vous n'avez pas de compte ? <a href="{{ url('/inscription') }}" style="font-weight: bold; color:orange">Inscrivez-vous.</a></p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
</section>

@endsection
