@extends('master')

<h6 hidden>{{$active6='active'}}</h6>

@section('hero_header')
<div class="container-xxl py-5 bg-primary hero-header mb-5">
    <div class="container my-5 py-5 px-lg-5">
        <div class="row g-5 py-5">
            <div class="col-12 text-center">
                <h1 class="text-white animated zoomIn">Projets</h1>
                <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a class="text-white" href="#">Acceuil</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Projets</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
@endsection


@section('service')
<div class="container-xxl py-5">
    <div class="container px-lg-5">
        <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="position-relative d-inline text-primary ps-4">Nos Evénements</h6>
            <h2 class="mt-2">Surveillez nos mouvements</h2>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.1s">
                <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                    <div class="service-icon flex-shrink-0">
                        <i class="fa fa-users fa-2x"></i>
                    </div>
                    <h5 class="mb-3">Forum</h5>
                    <p>Il s'agit d'un haut cadre d'échange pour les acteurs du numérique africains et internationnaux.</p>
                    <!-- <a class="btn px-3 mt-auto mx-auto" href="">Read More</a> -->
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                    <div class="service-icon flex-shrink-0">
                        <i class="fa fa-tag fa-2x"></i>
                    </div>
                    <h5 class="mb-3">Formation</h5>
                    <p>Numex propose une panoplie des formations afin de repondre aux besoins de compétences numériques.</p>
                    <!-- <a class="btn px-3 mt-auto mx-auto" href="">Read More</a> -->
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                    <div class="service-icon flex-shrink-0">
                        <i class="fa fa-bullhorn fa-2x"></i>
                    </div>
                    <h5 class="mb-3">Sensibilisation</h5>
                    <p>Montrer comment le numérique peut être un facteur du développement économique et social.</p>
                    <!-- <a class="btn px-3 mt-auto mx-auto" href="">Read More</a> -->
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.1s">
                <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                    <div class="service-icon flex-shrink-0">
                        <i class="fa fa-eye fa-2x"></i>
                    </div>
                    <h5 class="mb-3">Recommandation</h5>
                    <p>Numex se veux être une passerelle entre vous et le numerique par son système de recommandation.</p>
                    <!-- <a class="btn px-3 mt-auto mx-auto" href="">Read More</a> -->
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                    <div class="service-icon flex-shrink-0">
                        <i class="fa fa-briefcase fa-2x"></i>
                    </div>
                    <h5 class="mb-3">After work numérique</h5>
                    <p>Un cadre d'échange qui favorise le réseautage entre les passionés du numérique.</p>
                    <!-- <a class="btn px-3 mt-auto mx-auto" href="">Read More</a> -->
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                    <div class="service-icon flex-shrink-0">
                        <i class="fa fa-book fa-2x"></i>
                    </div>
                    <h5 class="mb-3">Publication</h5>
                    <p>Publication des guides d'utilsation, magasizes et bonnes pratiques.</p>
                    <!-- <a class="btn px-3 mt-auto mx-auto" href="">Read More</a> -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
