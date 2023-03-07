@extends('layout.admin')
@section('contitle')
<title>{{$pagetitle}}</title>
@endsection
@section('rightNavActive')
<?php $selection="dashboard" ?>
@endsection
@section('content')
 <!-- Page wrapper  -->
 <div class="page-wrapper">
 <!-- Bread crumb -->
 <div class="row page-titles">
	 <div class="col-md-5 align-self-center">
		 <h3 class="text-primary">Dashboard</h3> </div>
	 <div class="col-md-7 align-self-center">
		 <ol class="breadcrumb">
			 <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
			 <li class="breadcrumb-item active">Dashboard</li>
		 </ol>
	 </div>
 </div>
 <!-- End Bread crumb -->
 <!-- Container fluid  -->
 <div class="container-fluid">
	 <!-- Start Page Content -->
	 <div class="row">
		<div class="col-lg-12">
			<div class="card-content">
				<div class="alert alert-secondary alert-dismissible fade show">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<strong>Welcome</strong> {{ Auth::user()->name}}!
				</div>
			</div>
		</div>
					
		 <div class="col-md-3">
			 <div class="card bg-pink p-20">
				 <div class="media widget-ten">
					 <div class="media-left meida media-middle">
						 <span style="font-size:4em;"><i class="fa fa-newspaper-o"></i></span>
					 </div>
					 <div class="media-body media-text-right">
						 <h2 class="color-white">
						 <?php 
							$getnews=DB::table('o_news')->get();
							$getnewscount=count($getnews);
							echo $getnewscount;
						 ?>
						 </h2>
						 <p class="m-b-0">News Count</p>
					 </div>
				 </div>
			 </div>
		 </div>
		 <div class="col-md-3">
			 <div class="card bg-success p-20">
				 <div class="media widget-ten">
					 <div class="media-left meida media-middle">
						 <span style="font-size:4em;"><i class="fa fa-table"></i></span>
					 </div>
					 <div class="media-body media-text-right">
						 <h2 class="color-white">
							<?php 
								$getgallery=DB::table('galleries')->get();
								$getgallerycount=count($getgallery);
								echo $getgallerycount;
							?>
						 </h2>
						 <p class="m-b-0">Gallery</p>
					 </div>
				 </div>
			 </div>
		 </div>
		 <div class="col-md-3">
			 <div class="card bg-danger p-20">
				 <div class="media widget-ten">
					 <div class="media-left meida media-middle">
						 <span style="font-size:4em;"><i class="fa fa-files-o"></i></span>
					 </div>
					 <div class="media-body media-text-right">
						 <h2 class="color-white">
						 	<?php 
								$getResource=DB::table('resources')->get();
								$getresourcecount=count($getResource);
								echo $getresourcecount;
							?>
						 </h2>
						 <p class="m-b-0">Resources</p>
					 </div>
				 </div>
			 </div>
		 </div>
	 </div>

	 
	 <!-- /# row -->

	 <!-- End PAge Content -->
 </div>
 <!-- End Container fluid  -->
@endsection
