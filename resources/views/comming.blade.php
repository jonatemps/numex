@extends('master')

<h6 hidden>{{$active6='active'}}</h6>

@section('hero_header')
<div class="container-xxl py-5 bg-primary hero-header mb-5">
    <div class="container my-5 py-5 px-lg-5">
        <div class="row g-5 py-5">
            <div class="col-12 text-center">
                <h1 class="text-white animated zoomIn">Comming soon</h1>
                <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a class="text-white" href="/">Acceuil</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Comming soon</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
@endsection


@section('content')
<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container px-lg-5 text-center">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <i class="bi bi-exclamation-triangle display-1 text-primary"></i>
                <h1 class="display-1">Bientôt</h1>
                <h1 class="mb-4">Page en conception</h1>
                <p class="mb-4">Nous vous prions de revenir dans un avenir proche car notre équipe est entrain de travailler sur cette page. Merci !</p>
                <a class="btn btn-primary rounded-pill py-3 px-5" href="/">Retour à l'acceuil</a>
            </div>
        </div>
    </div>
</div>
@endsection
