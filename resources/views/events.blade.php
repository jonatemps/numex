@extends('master')

<h6 hidden>{{$active4='active'}}</h6>

@section('style')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
<link href="{{asset('css/posts.css')}}" rel="stylesheet">
@endsection

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
                <h1 class="text-white animated zoomIn">Evénements</h1>
                <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a class="text-white" href="#">Acceuil</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Evénements</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
@endsection


@section('service')
<div class="container blog-page">
    <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
        <h6 class="position-relative d-inline text-primary ps-4">Nos Evénements</h6>
        <h2 class="mt-2">Surveillez nos mouvements</h2>
    </div>
    <div class="row clearfix">
        @foreach ($events as $event)
            <div class="col-lg-4 col-md-12">
                <div class="card single_post">
                    {{-- <div class="header">
                        <h2><strong>Latest</strong> Post</h2>
                    </div> --}}

                    <div class="body">
                        <div class="img-post m-b-15">
                            <img src="{{$event->image}}" alt="Awesome Image">
                            <div class="social_share">
                                <a href="{{$event->facebook}}" class="btn btn-primary btn-icon btn-icon-mini btn-round"><i class="zmdi zmdi-facebook"></i></a>
                                <a href="{{$event->instagram}}" class="btn btn-primary btn-icon btn-icon-mini btn-round"><i class="zmdi zmdi-instagram"></i></a>
                                <a href="{{$event->twitter}}" class="btn btn-primary btn-icon btn-icon-mini btn-round"><i class="zmdi zmdi-twitter"></i></a>
                                <a href="{{$event->linkedin}}" class="btn btn-primary btn-icon btn-icon-mini btn-round"><i class="zmdi zmdi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="body">
                            <ul class="meta">
                                {{-- <li><a href="javascript:void(0);"><i class="zmdi zmdi-account col-blue"></i>Posted By: John Smith</a></li>
                                <li><a href="javascript:void(0);"><i class="zmdi zmdi-label col-amber"></i>Technology</a></li>
                                <li><a href="javascript:void(0);"><i class="zmdi zmdi-comment-text col-blue"></i>Comments: 3</a></li> --}}
                                <li><a href="javascript:void(0);"><i class="zmdi zmdi-calendar col-blue"></i>Il y'a deux heurs</a></li>
                                <li><a href="javascript:void(0);"><i class="zmdi zmdi-alarm col-blue"></i>Dans deux heurs</a></li>
                            </ul>
                        </div>
                        <h3 class="m-t-0 m-b-5"><a href="blog-details.html">{{$event->title}}</a></h3>
                        <p>{{$event->description}}</p>
                        {{-- <a href="blog-details.html" title="read more" class="btn btn-round btn-primary zmdi zmdi-watch"> Dans une heure</a> --}}
                        {{-- <a class="btn px-3 mt-auto mx-auto" href="">Read More</a> --}}
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
