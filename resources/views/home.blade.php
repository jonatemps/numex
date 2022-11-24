@extends('master')
@section('title')
    <title>Numex - Page d'acceuil</title>
@endsection
<h6 hidden>{{$active1='active'}}</h6>

@section('hero_header')

<div class="container-xxl py-5 bg-primary hero-header mb-5">
    <div class="container my-5 py-5 px-lg-5">
        @if(Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
            @endif
        <div class="row g-5 py-5">
            <div class="col-lg-6 text-center text-lg-start">
                <h1 class="text-white mb-4 animated zoomIn">Façonnons le futur grâce au numérique !</h1>
                {{-- <p class="text-white pb-3 animated zoomIn">Que l'humanité considère le vrai interêt du numérique dans la vie de tous les jours et les bonnes pratiques qui vont avec. Tirons profit du numérique en le mettant à sa place.</p> --}}
                <p class="text-white pb-3 animated zoomIn">Utiliser de la bonne façon le numérique est un facteur de développement social et économique. Grâce au numérique déclenchez votre processus d'intégration.</p>
                <a href="/about" class="btn btn-light py-sm-3 px-sm-5 rounded-pill me-3 animated slideInLeft">A propos de nous</a>
                <a href="/contact" class="btn btn-outline-light py-sm-3 px-sm-5 rounded-pill animated slideInRight">Nous contacter</a>
            </div>
            <div class="col-lg-6 text-center text-lg-start">
                <img class="img-fluid" src="img/illu/PngItem.png" alt="">
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
                {{-- <p class="mb-4">NUMEX
                    initie plusieurs projets sur le continent africain à travers un plan de développement des compétences numériques (nouvelles technologies)</p> --}}
                    <p class="mb-4">Numex est une plateforme qui initie plusieurs projets sur les nouvelles technologies. La plateforme constitue un lieu privilégié d'échanges d'expériences, d'informations, d'apprentissages ainsi que de la promotion du numérique.</p>
                <div class="row g-3">
                    <div class="col-sm-6">
                        <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i>Sens de l'innovation</h6>
                        <h6 class="mb-0"><i class="fa fa-check text-primary me-2"></i>Equipe Professionelle</h6>
                    </div>
                    <div class="col-sm-6">
                        <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i>Disponibilité 24/7</h6>
                        <h6 class="mb-0"><i class="fa fa-check text-primary me-2"></i>Excellence</h6>
                    </div>
                </div>
                <div class="d-flex align-items-center mt-4">
                    <a class="btn btn-primary rounded-pill px-4 me-3" href="/about">Voir plus</a>
                    <a class="btn btn-outline-primary btn-square me-3" href="https://m.facebook.com/numexinternational/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-primary btn-square me-3" href="https://twitter.com/numexdrc?t=hC2oSS7biFZT_8a2DgupOw&s=09" target="_blank"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-primary btn-square me-3" href="http://instagram.com/numexdrc?utm_source=qr" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-outline-primary btn-square" href="https://www.linkedin.com/company/numex-rdc/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
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

@section('service')
<div class="container-xxl py-5">
    <div class="container px-lg-5">
        <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="position-relative d-inline text-primary ps-4">Nos Services</h6>
            <h2 class="mt-2">Nos axes d'activités</h2>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.1s">
                <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                    <div class="service-icon flex-shrink-0">
                        <i class="fa fa-users fa-2x"></i>
                    </div>
                    <h5 class="mb-3">Forum</h5>
                    <p>Il s'agit d'un haut cadre d'échange pour les acteurs du numérique africains et internationaux.</p>
                    <!-- <a class="btn px-3 mt-auto mx-auto" href="">Read More</a> -->
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                    <div class="service-icon flex-shrink-0">
                        <i class="fa fa-tag fa-2x"></i>
                    </div>
                    <h5 class="mb-3">Formation</h5>
                    <p>Numex propose une panoplie des formations afin de répondre aux besoins des compétences numérique.</p>
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
                    <p>Numex se veut être une passerelle entre vous et le numérique par son système de recommandation.</p>
                    <!-- <a class="btn px-3 mt-auto mx-auto" href="">Read More</a> -->
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                    <div class="service-icon flex-shrink-0">
                        <i class="fa fa-briefcase fa-2x"></i>
                    </div>
                    <h5 class="mb-3">After work numérique</h5>
                    <p>Un cadre d'échanges qui favorise le réseautage entre les passionés du numérique.</p>
                    <!-- <a class="btn px-3 mt-auto mx-auto" href="">Read More</a> -->
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                    <div class="service-icon flex-shrink-0">
                        <i class="fa fa-book fa-2x"></i>
                    </div>
                    <h5 class="mb-3">Publication</h5>
                    <p>Publication des guides d'utilsation, magasines et bonnes pratiques.</p>
                    <!-- <a class="btn px-3 mt-auto mx-auto" href="">Read More</a> -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@section('tesmonial')

<div class="container-xxl bg-primary testimonial py-5 my-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5 px-lg-5">
        <div class="owl-carousel testimonial-carousel">
            @foreach ($testimonies as $testimony)
                <div class="testimonial-item bg-transparent border rounded text-white p-4">
                    <i class="fa fa-quote-left fa-2x mb-3"></i>
                    <p>{{strlen($testimony->content) <= 165 ? $testimony->content : substr($testimony->content,0,165).'...'}}</p>
                    <div class="d-flex align-items-center">
                        <img class="img-fluid flex-shrink-0 rounded-circle" src="{{$testimony->authorAvatar}}" style="width: 50px; height: 50px;">
                        <div class="ps-3">
                            <h6 class="text-white mb-1">{{$testimony->authorName}}</h6>
                            <small>{{$testimony->authorTitle}}</small>
                        </div>
                    </div>
                </div>
            @endforeach
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

            @foreach ($members as $member)
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item">
                        <div class="d-flex">
                            <div class="flex-shrink-0 d-flex flex-column align-items-center mt-4 pt-5" style="width: 75px;">
                                <a class="btn btn-square text-primary bg-white my-1" href="{{$member->facebook ?? ''}}"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square text-primary bg-white my-1" href="{{$member->twitter ?? ''}}"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square text-primary bg-white my-1" href="{{$member->instagram ?? ''}}"><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-square text-primary bg-white my-1" href="{{$member->linkedin ?? ''}}"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                            <img class="img-fluid rounded w-100" src="{{asset($member->photo)}}" alt="{{$member->name}}">
                        </div>
                        <div class="px-4 py-3">
                            <h5 class="fw-bold m-0">{{$member->name}}</h5>
                            <small>{{$member->fonction}}</small>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
