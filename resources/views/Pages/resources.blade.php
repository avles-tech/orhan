@extends('layout.app')
@section('contitle')
<title>{{$pagetitle}}</title>
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
		<li class="active">Resource</li>
	</ol>
</div>
<div class="stats-bottom contact">
		<div class="container">

			<div class="wthree-heading">
			<h3 class="w3l_header">ORHAN Resources</h3>
		</div>
        <div class="blog-post-grids blog_grids">
            @if(count($resources)>0)
				@foreach($resources as $resource)
                    <div class="col-md-3 blog-posts">
                        <div class="blog-post">
                            <a href=""><img src="/images/pdf.png" alt="{{$resource->name}}"></a>
                            <a href="" style="text-align:center"><h3>{{$resource->name}}</h3></a>
                            <hr>
                            <p>{{$resource->description}}</p>
                            <a href="/Uploads/resource_documents/{{$resource->file}}" download class="btn btn-info pull-right" style="text-align:center">Download</a>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                @endforeach
            @else
                <p>No Results found</p>
            @endif
        <div class="clearfix"></div>
    </div>
		</div>
	</div>
@endsection