@extends('master')

<h6 hidden>{{$active5='active'}}</h6>

@section('hero_header')
<div class="container-xxl py-5 bg-primary hero-header mb-5">
    <div class="container my-5 py-5 px-lg-5">
        <div class="row g-5 py-5">
            <div class="col-12 text-center">
                <h1 class="text-white animated zoomIn">Partenaires</h1>
                <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a class="text-white" href="#">Acceuil</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">partenaires</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
@endsection


@section('project')

<div class="container-xxl py-5">
    <div class="container px-lg-5">
        <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="position-relative d-inline text-primary ps-4">Nos Partenaires</h6>
            <h2 class="mt-2">Découvrez avec qui nous collaborons</h2>
        </div>
        <div class="row mt-n2 wow fadeInUp" data-wow-delay="0.1s">
            <div class="col-12 text-center">
                <ul class="list-inline mb-5" id="portfolio-flters">
                    <li class="btn px-3 pe-4 active" data-filter="*">Tous</li>
                    <li class="btn px-3 pe-4" data-filter=".first">Platinium</li>
                    <li class="btn px-3 pe-4" data-filter=".second">Gold</li>
                    <li class="btn px-3 pe-4" data-filter=".third">Bronze</li>
                </ul>
            </div>
        </div>
        <div class="row g-4 portfolio-container">
            @foreach ($partners as $partner)
                <div class="col-lg-4 col-md-6 portfolio-item {{$partner->category}} wow zoomIn" data-wow-delay="0.1s">
                    <div class="position-relative rounded overflow-hidden">
                        <img class="img-fluid w-100" src="{{$partner->logo}}" alt="">
                        <div class="portfolio-overlay">
                            {{-- <a class="btn btn-light" href="img/portfolio-1.jpg" data-lightbox="portfolio"><i class="fa fa-plus fa-2x text-primary"></i></a> --}}
                            <div class="mt-auto">
                                <small class="text-white"><i class="fa fa-trophy me-2"></i>{{$partner->cat()}}</small>
                                <a class="h5 d-block text-white mt-1 mb-0" href="">{{$partner->name}}</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            {{-- <div class="col-lg-4 col-md-6 portfolio-item second wow zoomIn" data-wow-delay="0.3s">
                <div class="position-relative rounded overflow-hidden">
                    <img class="img-fluid w-100" src="img/portfolio-2.jpg" alt="">
                    <div class="portfolio-overlay">
                        <a class="btn btn-light" href="img/portfolio-2.jpg" data-lightbox="portfolio"><i class="fa fa-plus fa-2x text-primary"></i></a>
                        <div class="mt-auto">
                            <small class="text-white"><i class="fa fa-folder me-2"></i>Web Design</small>
                            <a class="h5 d-block text-white mt-1 mb-0" href="">Project Name</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item first wow zoomIn" data-wow-delay="0.6s">
                <div class="position-relative rounded overflow-hidden">
                    <img class="img-fluid w-100" src="img/portfolio-3.jpg" alt="">
                    <div class="portfolio-overlay">
                        <a class="btn btn-light" href="img/portfolio-3.jpg" data-lightbox="portfolio"><i class="fa fa-plus fa-2x text-primary"></i></a>
                        <div class="mt-auto">
                            <small class="text-white"><i class="fa fa-folder me-2"></i>Web Design</small>
                            <a class="h5 d-block text-white mt-1 mb-0" href="">Project Name</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item second wow zoomIn" data-wow-delay="0.1s">
                <div class="position-relative rounded overflow-hidden">
                    <img class="img-fluid w-100" src="img/portfolio-4.jpg" alt="">
                    <div class="portfolio-overlay">
                        <a class="btn btn-light" href="img/portfolio-4.jpg" data-lightbox="portfolio"><i class="fa fa-plus fa-2x text-primary"></i></a>
                        <div class="mt-auto">
                            <small class="text-white"><i class="fa fa-folder me-2"></i>Web Design</small>
                            <a class="h5 d-block text-white mt-1 mb-0" href="">Project Name</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item first wow zoomIn" data-wow-delay="0.3s">
                <div class="position-relative rounded overflow-hidden">
                    <img class="img-fluid w-100" src="img/portfolio-5.jpg" alt="">
                    <div class="portfolio-overlay">
                        <a class="btn btn-light" href="img/portfolio-5.jpg" data-lightbox="portfolio"><i class="fa fa-plus fa-2x text-primary"></i></a>
                        <div class="mt-auto">
                            <small class="text-white"><i class="fa fa-folder me-2"></i>Web Design</small>
                            <a class="h5 d-block text-white mt-1 mb-0" href="">Project Name</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item second wow zoomIn" data-wow-delay="0.6s">
                <div class="position-relative rounded overflow-hidden">
                    <img class="img-fluid w-100" src="img/portfolio-6.jpg" alt="">
                    <div class="portfolio-overlay">
                        <a class="btn btn-light" href="img/portfolio-6.jpg" data-lightbox="portfolio"><i class="fa fa-plus fa-2x text-primary"></i></a>
                        <div class="mt-auto">
                            <small class="text-white"><i class="fa fa-folder me-2"></i>Web Design</small>
                            <a class="h5 d-block text-white mt-1 mb-0" href="">Project Name</a>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</div>


@endsection


@section('tesmonial')

<div class="container-xxl bg-primary testimonial py-5 my-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5 px-lg-5">
        <div class="owl-carousel testimonial-carousel">
            <div class="testimonial-item bg-transparent border rounded text-white p-4">
                <i class="fa fa-quote-left fa-2x mb-3"></i>
                <p>Il faut absolument que les usages applicatifs qui vont être développés par le Numérique puissent répondre au besoin des gens.</p>
                <div class="d-flex align-items-center">
                    <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-1.jpg" style="width: 50px; height: 50px;">
                    <div class="ps-3">
                        <h6 class="text-white mb-1">Eberande Kolongele</h6>
                        <small>Ministre du numérique / RDC</small>
                    </div>
                </div>
            </div>
            <div class="testimonial-item bg-transparent border rounded text-white p-4">
                <i class="fa fa-quote-left fa-2x mb-3"></i>
                <p>Faire du numérique congolais un levier d'integration, de bonne gouvernance, de croissance économique, d'amélioration du climat des affaires et de progrès social.</p>
                <div class="d-flex align-items-center">
                    <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-2.jpg" style="width: 50px; height: 50px;">
                    <div class="ps-3">
                        <h6 class="text-white mb-1">Felix Antoine Tshisekedi</h6>
                        <small>Président / RDC</small>
                    </div>
                </div>
            </div>
            <div class="testimonial-item bg-transparent border rounded text-white p-4">
                <i class="fa fa-quote-left fa-2x mb-3"></i>
                <p>Les solutions numériques ne peuvent pas émerger du néant. Les dirigeants doivent intégrer la mise en oeuvre des technologies numériques dans un écosystème de l'innovation, et il n'y a pas de temps à perdre.</p>
                <div class="d-flex align-items-center">
                    <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-3.jpg" style="width: 50px; height: 50px;">
                    <div class="ps-3">
                        <h6 class="text-white mb-1">Cristina Duarte</h6>
                        <small>Séc. Gén. Adj. des nations Unies</small>
                    </div>
                </div>
            </div>
            <div class="testimonial-item bg-transparent border rounded text-white p-4">
                <i class="fa fa-quote-left fa-2x mb-3"></i>
                <p>En absence d'infrastructures traditionnelles, le numérique permet de faire des sauts qualitatifs, dans le domaines de l'énergie par exemple, sans avoir à réaliser un investissement de départ conséquen. </p>
                <div class="d-flex align-items-center">
                    <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-4.jpg" style="width: 50px; height: 50px;">
                    <div class="ps-3">
                        <h6 class="text-white mb-1">Rebecca Enonchong</h6>
                        <small>PDG D'Apps Tech</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
