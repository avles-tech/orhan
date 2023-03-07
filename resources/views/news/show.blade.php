@extends('layout.app')

@section('contitle')

<title>{{$pagetitle}}</title>

<meta name="description" content="">

<meta name="keywords" content="" />

<link href="{{asset('/css/blogstyle.css')}}" rel="stylesheet" type="text/css" />

@endsection

@section('content')

<!-- banner -->

<div class="banner1"> 

	

</div>

<div class="grid_3 grid_2 agileinfo" >

	<ol class="breadcrumb">

		<li><a href="/">Home</a></li>

		<li><a href="/News">News</a></li>

		<li class="active">{{$news->title}}</li>

	</ol>			

</div>

<!-- //banner -->

<div class="content">

		<div class="container">

			<div class="single">				

				<!-- head-section -->

					<div class="head-section text-center">

						<h2>ORHAN'S NEWS</h2>

						<span> </span>

					</div>

					<!-- /head-section -->	

				<div class="single-top">

					<img  src="/Uploads/news_cover_images/{{$news->cover_image}}" alt="{{$news->cover_image}}"/>

				</div>

				<div class="top-single">

				<h2>{{$news->title}}</h2>

					<div class="grid-single">

						<div class="single-one"><span><i class="fa fa-calendar"></i>&nbsp;&nbsp;

							<?php 

                                $updateDate=$news->updated_at;

                                echo date_format(new DateTime($updateDate)," M d, Y")

                            ?> 

						</div></li>

						<div class="single-one"><span><i class="fa fa-clock"></i>&nbsp;&nbsp;

							<?php 

                                $updateDate=$news->updated_at;

                                echo date_format(new DateTime($updateDate)," h:i:s")

                            ?> 

						</span></div>

						<div class="clearfix"> </div>

					</div>

					<p class="eget">{!! $news->body !!}</p> 

					<!--

			<div class="single-middle">

				<ul class="social-share">

					<li><span>SHARE</span></li>

					<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>						

					<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></i></a></li>

					<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></i></a></li>				

				</ul>

				<i class="fa fa-retweet" aria-hidden="true"> </i>

				<div class="clearfix"> </div>

			</div> -->

			

		</div>

		</div>

	</div>

@endsection