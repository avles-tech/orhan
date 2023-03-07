@extends('layout.app')
@section('contitle')
<title>{{$pagetitle}}</title>
<link href="{{asset('/css/simpleLightbox.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('/css/blogstyle.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
<!-- banner -->
<div class="banner1">
	
</div>
<!-- //banner -->
<div class="grid_3 grid_2 agileinfo" >
	<ol class="breadcrumb">
		<li><a href="/">Home</a></li>
		<li class="active">Portfolio</li>
	</ol>			
</div>

<!-- gallery -->
<div class="content two">
		<div class="container">
			<div class="blog-posts-section">		
				<!-- head-section -->
					<div class="head-section text-center">
                        <h2 class="w3l_header">Portfolio</h2>
			            <p class="quia">We provide our organization media images</p>
						<span> </span>
					</div>
					<!-- /head-section -->	
				<div class="blog-post-grids blog_grids">
					@if(count($galleries)>0)
						@foreach($galleries as $gallery)
						<div class="col-md-4 blog-posts">
							<div class="blog-post">
								<a href="/Portfolio/{{$gallery->name}}"><img src="/Uploads/gallery_cover_images/{{$gallery->cover_image}}" alt="{{$gallery->cover_image}}"></a>
								<a href="/Portfolio/{{$gallery->name}}" class="blog-title">{{$gallery->name}}</a>
								<span></span>
							</div>	
						</div>
						@endforeach
                    @else
                        <p>No Results found</p>
                    @endif
					<div class="clearfix"></div>
				</div>
			<div class="pagination text-center">
				{{ $galleries->links()}}
			</div>
			</div>
		</div>
	</div>
<!-- //gallery -->  
	
@endsection
