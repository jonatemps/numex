@extends('master')

<h6 hidden>{{$active7='active'}}</h6>
@section('style')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
<link href="{{asset('css/post.css')}}" rel="stylesheet">
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
                <h1 class="text-white animated zoomIn">Article</h1>
                <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a class="text-white" href="{{route('home')}}">Acceuil</a></li>
                        <li class="breadcrumb-item text-white "><a class="text-white" href="{{url('/posts')}}">Articles</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Article</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
@endsection


@section('service')

<div class="blog-single gray-bg">
    <div class="container">
        <div class="row align-items-start">
            <div class="col-lg-8 m-15px-tb">
                <article class="article">
                    <div class="article-img text-center">
                        <img src="{{$post->image}}" alt="Awesome Image">
                    </div>
                    <div class="article-title">
                        {{-- <h6><a href="#">Lifestyle</a></h6> --}}
                        <h2>{{$post->title}}</h2>
                        <div class="media">
                            <div class="avatar">
                                <img src="https://bootdey.com/img/Content/avatar/avatar6.png" title="" alt="">
                            </div>
                            <div class="media-body">
                                <label>{{$post->user->name}}</label>
                                <span>{{$post->formatDate()}}</span>
                            </div>
                        </div>
                    </div>
                    <div class="article-content">

                        {!! nl2br($post->content) !!}

                    </div>
                    <div class="nav tag-cloud">
                        <a href="">Design</a>
                        <a href="">Development</a>
                        <a href="">Forum</a>
                        <a href="">Smart phone</a>
                        <a href="">Marketing</a>
                        <a href="">Conférence</a>
                        <a href="">Managment</a>
                    </div>
                </article>
                {{-- <div class="contact-form article-comment">
                    <h4>Leave a Reply</h4>
                    <form id="contact-form" action="{{url('send/comment')}}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input name="Name" id="name" placeholder="Nom *" class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input name="Email" id="email" placeholder="Email *" class="form-control" type="email">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea name="message" id="message" placeholder="Votre message *" rows="4" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="send">
                                    <button class="px-btn theme"><span>Envoyer</span> <i class="arrow"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div> --}}
            </div>
            <div class="col-lg-4 m-15px-tb blog-aside">
                <!-- Author -->
                <div class="widget widget-author">
                    <div class="widget-title">
                        <h3>Author</h3>
                    </div>
                    <div class="widget-body">
                        <div class="media align-items-center">
                            <div class="avatar">
                                <img src="https://bootdey.com/img/Content/avatar/avatar6.png" title="" alt="">
                            </div>
                            <div class="media-body">
                                <h6>Salut, Je suis<br> {{$post->user->name}}</h6>
                            </div>
                        </div>
                        {{-- <p>I design and develop services for customers of all sizes, specializing in creating stylish, modern websites, web services and online stores</p> --}}
                    </div>
                </div>
                <!-- End Author -->
                <!-- Trending Post -->
                {{-- <div class="widget widget-post">
                    <div class="widget-title">
                        <h3>Trending Now</h3>
                    </div>
                    <div class="widget-body">

                    </div>
                </div> --}}
                <!-- End Trending Post -->
                <!-- Latest Post -->
                <div class="widget widget-latest-post">
                    <div class="widget-title">
                        <h3>Articles récents</h3>
                    </div>
                    <div class="widget-body">
                        @foreach ($posts as $post)
                        <div class="latest-post-aside media">
                            <div class="lpa-left media-body">
                                <div class="lpa-title">
                                    <h5><a href="{{route('article',$post->id)}}">{{$post->title}}</a></h5>
                                </div>
                                <div class="lpa-meta">
                                    <a class="name" href="#">
                                        {{$post->user->name}}
                                    </a>
                                    <a class="date" href="#">
                                        {{$post->formatDate()}}
                                    </a>
                                </div>
                            </div>
                            <div class="lpa-right">
                                <a href="{{route('article',$post->id)}}">
                                    <img src="{{$post->image}}" title="" alt="">
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <!-- End Latest Post -->
                <!-- widget Tags -->
                <div class="widget widget-tags">
                    <div class="widget-title">
                        <h3>Mots Clés</h3>
                    </div>
                    <div class="widget-body">
                        <div class="nav tag-cloud">
                            <a href="">Design</a>
                            <a href="">Development</a>
                            <a href="">Forum</a>
                            <a href="">Smart phone</a>
                            <a href="">Marketing</a>
                            <a href="">Conférence</a>
                            <a href="">Managment</a>
                        </div>
                    </div>
                </div>
                <!-- End widget Tags -->
            </div>
        </div>
    </div>
</div>

@endsection
