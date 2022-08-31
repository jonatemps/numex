@extends('master')

<h6 hidden>{{$active2='active'}}</h6>

@section('hero_header')
<div class="container-xxl py-5 bg-primary hero-header mb-5">
    <div class="container my-5 py-5 px-lg-5">
        <div class="row g-5 py-5">
            <div class="col-12 text-center">
                <h1 class="text-white animated zoomIn">A propos</h1>
                <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a class="text-white" href="#">Acceuil</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">A propos</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
@endsection

@section('about')
<div class="container-xxl py-5">
    <div class="container px-lg-5">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="section-title position-relative mb-4 pb-2">
                    <h6 class="position-relative text-primary ps-4">A propos</h6>
                    <h2 class="mt-2">Nos activités sont axées sur la promotion du numérique</h2>
                </div>
                <p class="mb-4">NUMEX
                    initie plusieurs projets sur le continent africain à travers un plan de développement des compétences numériques (nouvelles technologies)</p>
                <div class="row g-3">
                    <div class="col-sm-6">
                        <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i>Sens de l'innovation</h6>
                        <h6 class="mb-0"><i class="fa fa-check text-primary me-2"></i>Equipe Professionelle</h6>
                    </div>
                    <div class="col-sm-6">
                        <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i>Disponible 24/7</h6>
                        <h6 class="mb-0"><i class="fa fa-check text-primary me-2"></i>Collaboratif</h6>
                    </div>
                </div>
                <div class="d-flex align-items-center mt-4">
                    <a class="btn btn-primary rounded-pill px-4 me-3" href="about.html">Voir plus</a>
                    <a class="btn btn-outline-primary btn-square me-3" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-primary btn-square me-3" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-primary btn-square me-3" href=""><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-lg-6">
                <!-- <iframe width="500" height="320" src="https://www.youtube.com/embed/lcZDWo6hiuI"> </iframe> -->

                <img class="img-fluid wow zoomIn" data-wow-delay="0.5s" src="img/illu/PngItem_.png">
            </div>
        </div>
    </div>
</div>
@endsection


@section('team')

<div class="container-xxl py-5">
    <div class="container px-lg-5">
        <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="position-relative d-inline text-primary ps-4">Notre Equipe</h6>
            <h2 class="mt-2">Rencontrez les membres de notre équipe</h2>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                <div class="team-item">
                    <div class="d-flex">
                        <div class="flex-shrink-0 d-flex flex-column align-items-center mt-4 pt-5" style="width: 75px;">
                            <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                        <img class="img-fluid rounded w-100" src="img/team-3.jpg" alt="">
                    </div>
                    <div class="px-4 py-3">
                        <h5 class="fw-bold m-0">Noah Michael</h5>
                        <small>Designer</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="team-item">
                    <div class="d-flex">
                        <div class="flex-shrink-0 d-flex flex-column align-items-center mt-4 pt-5" style="width: 75px;">
                            <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                        <img class="img-fluid rounded w-100" src="img/team-2.jpg" alt="">
                    </div>
                    <div class="px-4 py-3">
                        <h5 class="fw-bold m-0">Emma William</h5>
                        <small>Manager</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item">
                    <div class="d-flex">
                        <div class="flex-shrink-0 d-flex flex-column align-items-center mt-4 pt-5" style="width: 75px;">
                            <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                        <img class="img-fluid rounded w-100" src="img/team-1.jpg" alt="">
                    </div>
                    <div class="px-4 py-3">
                        <h5 class="fw-bold m-0">Jhon Doe</h5>
                        <small>CEO</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item">
                    <div class="d-flex">
                        <div class="flex-shrink-0 d-flex flex-column align-items-center mt-4 pt-5" style="width: 75px;">
                            <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                        <img class="img-fluid rounded w-100" src="img/team-1.jpg" alt="">
                    </div>
                    <div class="px-4 py-3">
                        <h5 class="fw-bold m-0">Jhon Doe</h5>
                        <small>CEO</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="team-item">
                    <div class="d-flex">
                        <div class="flex-shrink-0 d-flex flex-column align-items-center mt-4 pt-5" style="width: 75px;">
                            <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                        <img class="img-fluid rounded w-100" src="img/team-2.jpg" alt="">
                    </div>
                    <div class="px-4 py-3">
                        <h5 class="fw-bold m-0">Emma William</h5>
                        <small>Manager</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                <div class="team-item">
                    <div class="d-flex">
                        <div class="flex-shrink-0 d-flex flex-column align-items-center mt-4 pt-5" style="width: 75px;">
                            <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                        <img class="img-fluid rounded w-100" src="img/team-3.jpg" alt="">
                    </div>
                    <div class="px-4 py-3">
                        <h5 class="fw-bold m-0">Noah Michael</h5>
                        <small>Designer</small>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>


@endsection

