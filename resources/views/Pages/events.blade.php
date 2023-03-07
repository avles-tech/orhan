@extends('layout.app')
@section('contitle')
<title>{{$pagetitle}}</title>
@endsection
@section('content')
<!-- Page Header Section Start Here -->
<div class="page-header-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="header-page">
                    <h1>TTW EVENTS</h1>
                    <ul>
                        <li><a href="/">Home</a> </li>
                        <li>Events</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Header Section End Here -->

<!-- Portfolio Start Here -->
<div class="portfolio-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center">
                <div class="single-portfolio">
                    <a href="/events/expo"><img src="img/portfolio/Expo/cover_image.jpg" alt="EXPO"></a>
                    <div class="overlay-area">
                        <div class="portfolio-informations">                                    
                            <a href="/events/expo"><i class="fa fa-link" aria-hidden="true"></i></a>
                        </div>
                        <div class="portfolio-details">
                            <h3>TTW EXPO</h3>
                            <p>February 9, 2015 / London</p>
                        </div>
                    </div>                            
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center">
                <div class="single-portfolio">
                    <a href="/events/kalyaana"><img src="/img/portfolio/Kalyaana_Events/cover_image.jpg" alt="Kalyaana"></a>
                    <div class="overlay-area">
                        <div class="portfolio-informations">                                    
                            <a href="/events/kalyaana"><i class="fa fa-link" aria-hidden="true"></i></a>
                        </div>
                        <div class="portfolio-details">
                            <h3>KALYAANA</h3>
                            <p>February 9, 2015 / London</p>
                        </div>
                    </div>                            
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Portfolio End Here -->    
@endsection