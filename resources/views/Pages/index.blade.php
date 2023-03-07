@extends('layout.app')
@section('contitle')
<title>{{$pagetitle}}</title>
<link rel='stylesheet prefetch' href='https://cdn.rawgit.com/jackmoore/colorbox/master/example1/colorbox.css'>
<link rel="stylesheet" href="/css/mystyle.css">

@endsection
@section('content')
<!-- banner -->
<div class="banner-silder">
	<div class="banner">
	
		<ul>
			<li></li>
			<li></li>
			<li></li>
		</ul>
		<ol>
		</ol>
			<i class="left"></i><i class="right"></i>
			 <div class="banner_wthree_agile_info">
				 <h2>OUR GOAL</h2>
				<h3>To provide equal opportunities to vulnerable children in Sri Lanka.</h3>
				<a href="{{ env('CHARITY_LINK') }}" target="_blank" class="btn btn-primary">Donate Here</a>
					<div class="social_list_w3ls" style="margin-">
					<!---
						<a href="#" class="w3_agile_facebook_agile"><span class="fa fa-facebook" aria-hidden="true"></span></a>
						<a href="#" class="agile_twitter_agile"><span class="fa fa-twitter" aria-hidden="true"></span></a>
						<a href="#" class="w3_agile_dribble_agile"><span class="fa fa-dribbble" aria-hidden="true"></span></a>
						<a href="#" class="w3_agile_vimeo_agile"><span class="fa fa-vimeo" aria-hidden="true"></span></a>
					-->
					</div>
			</div>
	</div>	
</div>
<!-- //banner -->

<div id="modal-content">
  <h2 style="text-align:center" >GIVE A DONATION</h2>
  <hr>
  <i style="margin-left:45%; font-size:64px" class="fa fa-smile-o" aria-hidden="true"></i>
  <p style="text-align:center" >We need your help to support these vulnerable children of Puthuvalvupoonga, a school with specialised teachers in vavuniya, Sri Lanka. And we can not do this without your support. We need your help. </p>
  <a href="{{ env('CHARITY_LINK') }}" target="_blank" style="float:right" class="button ">Donate Now</a>
</div>




<!-- popular -->
<div class="popular-section-wthree ">
	<div class="container">	
		<div class="wthree-heading">
			<h2 class="w3l_header">About us</h2>
			<p class="quia">Disability is Not Inability</p>
		</div>
			<p class="bui">Considering the history of the district, Vavuniya is one of the affected districts, suffered much in the civil war in Sri Lanka. As a result, the number of persons with disabilities proportionately, increased. Furthermore, until 1999, there was neither rehabilitation nor registered non – governmental organizations existed to help the disabled and handicapped community.</p>
				<div class="popular-agileinfo">
				<!--
					<div class="col-md-3 popular-grid">
						<i class="fa fa-stack-exchange" aria-hidden="true"></i>
						<h4>Activities</h4>
						<p>D5 Socialia is a WordPress Theme which is Ideal for Social Organizations, NGOs, CBOs, Environmental Organizations, Societies, Climate Change Related Progrms.</p>
					</div> -->
					<div class="col-md-4 popular-grid">
						<i class="fa fa-bars" aria-hidden="true"></i>
						<h4>Our Mission</h4>
						<p>Provide services for personal with disabilities to have equal right  and opportunities with thier active participation on the concept of "Disability is Not Inability"</p>
					</div>
					<div class="col-md-4 popular-grid popular-grid-bottom">
						<i class="fa fa-square-o" aria-hidden="true"></i>
						<h4>Our Vision</h4>
						<p>Equal right and equal opportunities for persons with disabilities through barrier free society</p>
					</div>
					<div class="col-md-4 popular-grid">
						<i class="fa fa-building" aria-hidden="true"></i>
						<h4>Our Objective</h4>
						<p>Our over all goal is achieving equal rights, equal opportunities and equal participation of the persons with disabilities in order to make them equal citizens.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
	</div>
</div>
	<!-- //popular -->
<!-- banner-bottom -->
<div class="banner-bottom mid-section-agileits">
	<div class="col-md-7 bannerbottomleft">
			
	</div>
	<div class="col-md-5 bannerbottomright">
		<h2 style="color:white;" class="w3l_header">DONATE</h2>
		<p style="color:white;" class="quia">For a best and good cause</p>
		<p style="color:white;"><i class="fa fa-quote-left" aria-hidden="true"></i>Giving is not just about make a donation, it's about making a difference!&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-quote-right" aria-hidden="true"></i> <sub style="margin:15px" class="pull-right">-Kathy Calvin</sub></p>
		<a href="{{ env('CHARITY_LINK') }}" target="_blank" class="btn btn-primary">To Donate Click Here</a>
	</div>
	<div class="clearfix"></div>
</div>
<!-- //banner-bottom -->

<!-- team -->
<!--
	<div class="team">
		<div class="container">
			 <div class="wthree-heading">
				<h3 class="w3l_header">Our Team</h3>
				<p class="quia">Orhan Best and dedicated members </p>
			</div>
			<div class="agile_inner_grids">
				<div class="col-md-4 w3_agile_team_grid_info">
				   <img src="images/t1.jpg" alt=" " class="img-responsive" />
					<h3>President</h3>
					<p>Mr. K. K. Senthilgiri</p>
					<ul class="footer_list_icons team_icons_agile">
					<!--
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								-->
								<!--
					</ul>
				</div>
				<div class="col-md-4 w3_agile_team_grid_info">
					  <img src="images/t4.jpg" alt=" " class="img-responsive" />
					<h3>Secretary</h3>
				   <p>Mr. S. Srikanthalingam</p>
					<ul class="footer_list_icons team_icons_agile">
					<!--
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin"></i></a></li>	
						--><!--
					</ul>
				</div>
				<div class="col-md-4 w3_agile_team_grid_info">
					  <img src="images/t3.jpg" alt=" " class="img-responsive" />
					<h3>Treasurer</h3>
						<p>Mr. T. Thiagalingam</p>
					<ul class="footer_list_icons team_icons_agile">
					<!--
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						--><!--
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div> -->
<!-- team -->
<!-- feedback -->
	<div class="feedback">
		<div class="container">
			<div class="wthree-heading feedback-heading">
				<h3 class="w3l_header two">WE NEED YOUR HELP!</h3>
				<p class="quia">We need your help to support these vulnerable children of Puthuvalvupoonga in srilanka.</p>
			</div>
			
			<div class="col-md-8 agile_footer_grid">
			<div class="feedback-info">
			<div class="feedback-top">
				<p>We need your help to support these vulnerable children of Puthuvalvupoonga,  a school with specialised teachers  in vavuniya, Sri Lanka.
					<br><br>These childeren have been facing some extremely tough challenges in life to realise their dreams. We need your help in way of little contribution so that these children lead a normal life. And we can not do this  without your support. We need your help.
					<br><br>Every contibution to our Charity will be used to educate and build a better life for these childern.</li>
			</div>
		</div>
			</div>
			<div class="col-md-4 agile_footer_grid">
			<div class="contact-agileits">
				<h2 style="color:white">Let us know you are available</h2>
				<form action="#" method="post" class="horizontal">
					<div class="control-group form-group">
                        <div class="controls">
                            <label style="color:white" class="contact-p1">Full Name:</label> 
                            <input type="text" class="form-control" name="name" id="name" Placeholder=" " required="">
                            <p class="help-block"></p>
                        </div>
					</div>	
					<div class="control-group form-group">
                        <div class="controls">
                            <label style="color:white" class="contact-p1">Email Address:</label>
                            <input type="email" class="form-control" name="email" id="email" Placeholder=" " required="">
							<p class="help-block"></p>
						</div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label style="color:white" class="contact-p1">Phone Number:</label>
                            <input type="tel" class="form-control" name="phone" id="phone" Placeholder=" " required="">
							<p class="help-block"></p>
						</div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <button style=" text-align:center;" type="submit" class="btn btn-primary">Send <i class="fa fa-caret-right"></i></button>	
				</form>            
			</div>
		</div>
		</div>
	</div>
<!-- //feedback -->
@endsection