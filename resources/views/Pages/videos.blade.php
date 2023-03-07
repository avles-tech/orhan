@extends('layout.app')
@section('contitle')
<title>{{$pagetitle}}</title>
<style>
.ptext {
   overflow: hidden;
   text-overflow: ellipsis;
   display: -webkit-box;
   margin-top:12px;
   padding-top:4px;
   max-width:230px;
   max-height: 46px;      /* fallback */
   -webkit-line-clamp:1; /* number of lines to show */
   -webkit-box-orient: vertical;
}
</style>
<link href="{{asset('/css/blogstyle.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
<!-- banner -->
<div class="banner1">
</div>

<div class="grid_3 grid_2 agileinfo" >

	<ol class="breadcrumb">

		<li><a href="/">Home</a></li>

		<li class="active">Videos</li>

	</ol>			

</div>

<!-- //banner -->

<!-- //Blog -->

<div class="content two">

		<div class="container">

			<div class="blog-posts-section">		

				<!-- head-section -->

					<div class="head-section text-center">

                        <h2 class="w3l_header">Videos</h2>
						<span> </span>

					</div>

					<!-- /head-section -->	

				<div class="blog-post-grids blog_grids">
				<div class="row">
					@if(count($videos)>0)
						@foreach($videos as $video)
							<div class="col-md-4 blog-posts">
							<div class="blog-post">
							<object width="100%" 
								data="{{$video->url}}">
							</object>
							<h4 class="blog-title ptext">{{$video->title}}</h4>
							</div>
							</div>
						@endforeach
                    @else
                        <p>No Results found</p>
                    @endif
					</div>
					<div class="clearfix"></div>
					
				</div>
			<div class="pagination text-center">
			{{ $videos->links()}}
			</div>

			</div>

		</div>

	</div>

@endsection