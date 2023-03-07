@extends('layout.app')
@section('contitle')
<title>{{$pagetitle}}</title>

<link href="{{asset('/assets/css/style.css')}}" rel="stylesheet">
<style>
input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}

input[type=email], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}
.witer{
  width:100% !important;
  padding:15px !important;
}

.alert {
    padding: 20px;
    background-color: #f44336;
    color: white;
    opacity: 1;
    transition: opacity 0.6s;
    margin-bottom: 15px;
}

.alert.success {background-color: #4CAF50;}
.alert.info {background-color: #2196F3;}
.alert.warning {background-color: #ff9800;}

.closebtn {
    margin-left: 15px;
    color: white;
    font-weight: bold;
    float: right;
    font-size: 22px;
    line-height: 20px;
    cursor: pointer;
    transition: 0.3s;
}

.closebtn:hover {
    color: black;
}

</style>
@endsection
@section('content')<!-- banner -->
<div class="banner1">
	
</div>
<div class="grid_3 grid_2 agileinfo" >
	<ol class="breadcrumb">
		<li><a href="/">Home</a></li>
		<li class="active">Contact</li>
	</ol>			
</div>
<!-- //banner -->

<!-- contact -->
<section class="contact-w3ls">
	<div class="container">
		<div class="wthree-heading">
			<h2 class="w3l_header">Contact Us</h2>
			<p class="quia">If you have any further inquiry, please don't hesitate to contact us via telephone or email.</p>
		</div>
		<div class="con-top">
		<div class="col-lg-5 col-md-5 col-sm-5 contact-w3-agile2" data-aos="flip-left">
			<div class="contact-agileits">
				<h4>Get In Touch</h4>
				<form class="zform mt-3">
				<div class="row">
					  <div class="col-12">
						  <input class="form-control background-white" name="name" type="text" placeholder="Your Name" required> </div>
					  <div class="col-12 mt-6">
						  <input class="form-control background-white" name="mail" type="email" placeholder="Email" required> </div>
					  <div class="col-12 mt-6">
						  <input class="form-control background-white" name="phone" type="text" placeholder="phone" required> </div>
					  <div class="col-12 mt-6">
						  <input class="form-control background-white" name="subject" type="text" placeholder="Subject" required> </div>
					  <div class="col-12 mt-6">
						  <textarea class="form-control background-white" name="Message" rows="11" placeholder="Enter your descriptions here..." required></textarea>
					  </div>
					  <div class="col-12 mt-6">
					  <br> <input type="checkbox" class="background-white" id="checkme" name="term_status" value="Checked"> By submitting this form you agree to the terms of our <a href="/Privacy-Policy">Privacy Policy</a><br>
					  <input type="checkbox" name="news_letter_status" value="Checked"> I would like to receive new events, invites and newsletters by email, from Orhan<br><br>
					  </div>
					  <div class="col-12 mt-6">
						<div class="zform-feedback"></div>
					  </div>
					  <div class="col-12 mt-6">
						<button disabled id="sendNewSms" class="btn witer btn-primary" type="Submit">
						  <span class="color-white fw-600">Send Now</span>
						</button>
					  </div>
				  </div>
			  </form>          
			</div>
		</div>
		<div class="col-lg-1 col-md-1 col-sm-1 contact-w3-agile2" data-aos="flip-left">
		</div>		
		<div class="col-lg-6 col-md-6 col-sm-6 contact-w3-agile1" data-aos="flip-right">
			<h4 class="w3l-contact">Connect With Us</h4>
			<p class="contact-agile1"><strong>Phone :</strong>  07831195979</p>
			<p class="contact-agile1"><strong>Email :</strong> <a href="mailto:info@orhan.org.uk">info@orhan.org.uk</a></p>
			<p class="contact-agile1"><strong>Address :</strong> 557 High Road Wembley Middlesex HA0 2DW. United Kingdom</p>											
			
							<ul class="agileits_social_list">
								<li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
							</ul>
						
		</div>
		<div class="clearfix"></div>
		</div>
	</div>
</section>
<!-- map -->
<div class="w3l-map">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2480.883812943216!2d-0.30315538451344154!3d51.55202947964237!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487612340580c235%3A0xb406b08843f65397!2sSri+Kanth+%26+Co+Solicitors!5e0!3m2!1sen!2slk!4v1523989213346" allowfullscreen></iframe>
</div>
<script type="text/javascript">
      var checker = document.getElementById('checkme');
      var sendbtn = document.getElementById('sendNewSms');
      checker.onchange = function() {
        if(this.checked){
            sendbtn.disabled = false;
        }else{
            sendbtn.disabled = true;
        }
      };
      </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
        <script src="{{asset('/assets/lib/jquery/dist/jquery.min.js')}}"></script> 
        <script src="{{asset('/assets/lib/bootstrap/dist/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('/assets/js/core.js')}}"></script>
<!-- //map -->
@endsection