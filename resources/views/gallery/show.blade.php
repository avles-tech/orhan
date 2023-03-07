@extends('layout.app')
@section('contitle')
<title>{{$pagetitle}}</title>
<link href="{{asset('/css/simpleLightbox.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
<!-- banner -->
<div class="banner1">
	
</div>
<!-- //banner -->
<div class="grid_3 grid_2 agileinfo" >
	<ol class="breadcrumb">
		<li><a href="/">Home</a></li>
		<li class="active"><a href="/Portfolio">Portfolio</a></li>
        <li class="active">{{$gallerys->name}}</li>
	</ol>			
</div>
<!-- gallery -->
	<div class="banner-bottom gallery">
		<div class="container">
		
		<div class="wthree-heading">
			<h2 class="w3l_header">{{$gallerys->name}} Gallery</h2>
			<p class="quia">We provide our organization media images</p>
		</div>
			<div class="w3ls_gallery_grids">
                @if(count($gImg)>0)
                    @foreach($gImg as $image)
                    <div class="col-md-4 w3_agile_gallery_grid">
                        <div class="agile_gallery_grid">
                            <a title="{{$image->description}}" href="/Uploads/gallery_images/{{$image->image}}">
                                <div class="agile_gallery_grid1">
                                    <img src="/Uploads/gallery_images/{{$image->image}}" alt="{{$image->image}}" class="img-responsive" />
                                    <div class="w3layouts_gallery_grid1_pos">
                                    <br>
                                        <h3>{{$image->description}}</h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    @endforeach
                @else
                    <p>No Results found</p>
                 @endif
				<div class="clearfix"></div>
			</div>
            <div class="pagination pull-right">
				{{ $gImg->links()}}
			</div>
		</div>
	</div>
<!-- //gallery -->  
	
@endsection
