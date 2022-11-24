@extends('master')

<h6 hidden>{{$active2='active'}}</h6>

@section('hero_header')
<div class="container-xxl py-5 bg-primary hero-header mb-5">
    <div class="container my-5 py-5 px-lg-5">
        @if(Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
            @endif
        <div class="row g-5 py-5">
            <div class="col-12 text-center">
                {{-- <h1 class="text-white animated zoomIn">A propos de nous</h1> --}}
                <h1 class="text-white animated zoomIn">Le numérique au cœur de nos vies</h1>
                <h5 class="text-white animated zoomIn"><em>Cette vision guide tout ce que nous faisons</em></h5>


                <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a class="text-white" href="{{route('home')}}">Acceuil</a></li>
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
                {{-- <p class="mb-4">NUMEX
                    initie plusieurs projets sur le continent africain à travers un plan de développement des compétences numériques (nouvelles technologies)</p> --}}
                    <p class="mb-4">Numex est une plateforme qui initie plusieurs projets sur les nouvelles technologies. La plateforme constitue un lieu privilégié d'échanges d'expériences, d'informations, d'apprentissages ainsi que de la promotion du numérique.</p>
                <div class="row g-3">
                    <div class="section-title position-relative mb-4 pb-2">
                        {{-- <h6 class="position-relative text-primary ps-4">A propos</h6> --}}
                        <h2 class="mt-2">Nos qualités</h2>
                    </div>
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
                    {{-- <a class="btn btn-primary rounded-pill px-4 me-3" href="about.html">Voir plus</a> --}}
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


<div class="container-xxl py-5">
    <div class="container px-lg-5">
        <div class="row g-5">

            {{-- <div class="col-lg-6">
                <!-- <iframe width="500" height="320" src="https://www.youtube.com/embed/lcZDWo6hiuI"> </iframe> -->

                <img class="img-fluid wow zoomIn" data-wow-delay="0.5s" src="img/illu/motivation1.png">
            </div> --}}

            {{-- <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="section-title position-relative mb-4 pb-2">
                    <h6 class="position-relative text-primary ps-4">A propos</h6>
                    <h2 class="mt-2">Motivation</h2>
                </div>
                <p class="mb-4">Les progrès du numérique peuvent favoriser et accélérer la réalisation de chacun des 17 Objectifs de développement durable, notre plateforme se veut être le catalyseur qui va booster le numérique en Afrique.</p>
                <div class="row g-3">
                    <div class="col-sm-6">
                        <h6 class="mb-3"><i class="fa fa-search text-primary me-2"></i>Sens du progrès</h6>
                        <h6 class="mb-0"><i class="fa fa-search text-primary me-2"></i>Sens de l'intégration</h6>
                    </div>
                    <p class="mb-4">Jamais dans l’histoire une innovation ne s’est propagée aussi vite que les technologies numériques, nous sommes ce pont entre vous et le numérique.</p>
                </div>
                <div class="d-flex align-items-center mt-4">
                    <a class="btn btn-primary rounded-pill px-4 me-3" href="about.html">Voir plus</a>
                    <a class="btn btn-outline-primary btn-square me-3" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-primary btn-square me-3" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-primary btn-square me-3" href=""><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div> --}}


            <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                <div class="section-title position-relative mb-4 pb-2">
                    {{-- <h6 class="position-relative text-primary ps-4">A propos</h6> --}}
                    <h2 class="mt-2">Nos Objectifs:</h2>
                </div>
                <p class="mb-4">Les progrès du numérique peuvent favoriser et accélérer la réalisation de chacun des 17 Objectifs de développement durable, notre plateforme se veut être le catalyseur qui va booster le numérique en Afrique. Pous se faire, nous avons comme objectifs:</p>
                <div class="row g-3">
                    <div class="col-sm-12">
                        <h6 class="mb-3"><i class="fa fa-angle-right text-primary me-2"></i>Placer le numérique au cœur de vie des africains ;</h6>
                        <h6 class="mb-3"><i class="fa fa-angle-right text-primary me-2"></i>Lutter contre l’analphabétisation numérique ;</h6>
                        <h6 class="mb-3"><i class="fa fa-angle-right text-primary me-2"></i>Sensibilisation de la population africaine sur les bonnes pratiques numériques ;</h6>
                        <h6 class="mb-3"><i class="fa fa-angle-right text-primary me-2"></i>Offrir des formations à toute personne désireuse d’apprendre le numérique ;</h6>
                        <h6 class="mb-0"><i class="fa fa-angle-right text-primary me-2"></i>Créer un cadre d’échange entre les décideurs politiques, les chefs d’entreprises, les haut, cadres étatique et le peuple lambda en vue d’accélérer le développement du numériques en Afrique.</h6>
                    </div>
                    {{-- <p class="mb-4">Jamais dans l’histoire une innovation ne s’est propagée aussi vite que les technologies numériques, nous sommes ce pont entre vous et le numérique.</p> --}}
                </div>
                {{-- <div class="d-flex align-items-center mt-4">
                    <a class="btn btn-primary rounded-pill px-4 me-3" href="about.html">Voir plus</a>
                    <a class="btn btn-outline-primary btn-square me-3" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-primary btn-square me-3" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-primary btn-square me-3" href=""><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-linkedin-in"></i></a>
                </div> --}}
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

            @foreach ($members as $member)
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item">
                        <div class="d-flex">
                            <div class="flex-shrink-0 d-flex flex-column align-items-center mt-4 pt-5" style="width: 75px;">
                                <a class="btn btn-square text-primary bg-white my-1" href="{{$member->facebook}}"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square text-primary bg-white my-1" href="{{$member->twitter}}"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square text-primary bg-white my-1" href="{{$member->instagram}}"><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-square text-primary bg-white my-1" href="{{$member->linkedin}}"><i class="fab fa-linkedin-in"></i></a>
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

