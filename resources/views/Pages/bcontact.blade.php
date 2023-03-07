@extends('layout.app')

@section('contitle')

<title>{{$pagetitle}}</title>

@endsection

@section('content')<!-- banner -->

<div class="banner1">

	

</div>

<div class="grid_3 grid_2 agileinfo" >

	<ol class="breadcrumb">

		<li><a href="/">Home</a></li>

		<li class="active">Bank Contact</li>

	</ol>			

</div>

<!-- //banner -->

<div class="services two">

		<div class="container">

		<div class="wthree-heading">

		<h2 class="w3l_header">Bank Information</h2>

		<p class="quia">If you require more information about organization bank details, please feel free to contact us.</p>

	</div>

			

			<div class="agile_inner_grids">	

				<div class="col-md-6 wthree_services_grid_left">
				<a href="/assets/pdf/Standing Order Mandate.pdf" Download="Standing Order Mandate"><img src="/images/pdf.png" alt="Standing order mandate" class="img-responsive" /></a>
				<p style="margin-top:-15px; margin-left:29px;"><Strong>Download Standing Order Mandate</Strong></p>

					<!--
					<h3>A Donation</h3>
					<h4>Why We Need</h4>
					<p style="text-align:justify;"> In order to enable us to incrementally achieve our New Projects, in the care and welfare of the Disabled & Mentally retarded persons who, unlike other differently able persons are incapable of even begging for their daily activities, we shall be greatly honored if you could assist us to carry our projects (current and proposed) by a generous donation.</p>
					<p style="text-align:justify;"> Cash or Cheques, All cheques should be crossed and drawn in favor of “ORHAN” Organization for Rehabilitation of the Handicapped – Vavuniya District”</p>
					-->
				</div>

				<div class="col-md-6 wthree_services_grid_right">

				<br><h3><strong>OUR BANK INFO</strong></h3><br><br>

					<ul class="list-group w3-agile">

					<li class="list-group-item"><b>Bank - HSBC</b></li>

					<li class="list-group-item"><b>A/c Name - ORHAN SRILANKA (UK)</b></li>

					<li class="list-group-item"><b>Sortcode- 404609​</b></li>

					<li class="list-group-item"><b>A/C Number 21349864</b></li>

					</ul>

					<div class="clearfix"> </div>

				</div>

				<div class="clearfix"> </div>

			</div>

		

		</div>

	</div>

@endsection