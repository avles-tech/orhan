@extends('layout.app')

@section('contitle')

<title>{{$pagetitle}}</title>

<link href="{{asset('/css/blogstyle.css')}}" rel="stylesheet" type="text/css" />

<style>
.ptext {
   overflow: hidden;
   text-overflow: ellipsis;
   display: -webkit-box;
   max-width:230px;
   max-height: 49px;      /* fallback */
   -webkit-line-clamp:1; /* number of lines to show */
   -webkit-box-orient: vertical;
}
.pdtext{
	overflow: hidden;
   text-overflow: ellipsis;
   display: -webkit-box;
   max-width:340px;
   height: 56px;      /* fallback */
   -webkit-line-clamp:2; /* number of lines to show */
   -webkit-box-orient: vertical;
}
</style>
@endsection

@section('content')

<!-- banner -->

<div class="banner1">

	

</div>

<div class="grid_3 grid_2 agileinfo" >

	<ol class="breadcrumb">

		<li><a href="/">Home</a></li>

		<li class="active">News</li>

	</ol>			

</div>

<!-- //banner -->

<!-- //Blog -->

<div class="content two">

		<div class="container">

			<div class="blog-posts-section">		

				<!-- head-section -->

					<div class="head-section text-center">

                        <h2 class="w3l_header">News</h2>

			            <p class="quia">We provide through many different story from our organization </p>

						<span> </span>

					</div>

					<!-- /head-section -->	

				<div class="blog-post-grids blog_grids">

					@if(count($news)>0)

						@foreach($news as $newss)

						<div class="col-md-4 blog-posts">

							<div class="blog-post">

								<a href="/News/{{$newss->title}}"><img src="/Uploads/news_cover_images/{{$newss->cover_image}}" alt="{{$newss->cover_image}}"></a>

								<a href="/News/{{$newss->title}}" class="blog-title ptext">{{$newss->title}}</a>

								<p class="sub_head">Posted by <a href="">{{$newss->author}}</a> on <?php 

                                $updateDate=$newss->updated_at;

                                echo date_format(new DateTime($updateDate)," d/m/Y")

                            ?> </p>

								<span style="margin-top:-10px;"></span>

								<p class="pdtext" style="text-align:justify;">{{$newss->description}}</p>

							</div>	

						</div>

						@endforeach

                    @else

                        <p>No Results found</p>

                    @endif

					<div class="clearfix"></div>

				</div>

			<div class="pagination text-center">

				{{ $news->links()}}

			</div>

			</div>

		</div>

	</div>

@endsection