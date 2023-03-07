<!-- footer -->
				
<div class="footer">
		<div class="container">
			<div class="col-md-4 agile_footer_grid">
				<h3>Contact Info</h3>
				<ul class="w3_address">
					<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>557 High Road, Wembley <span>Middlesex,</span> <span>HA0 2DW United Kingdom.</span></li>
					<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@orhan.org.uk">info@orhan.org.uk</a></li>
					<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i> 07831195979</li>
				</ul>
			</div>
			<div class="col-md-4 agile_footer_grid">
				<h3>About Us</h3>
				<p>Considering the history of the district, Vavuniya is one of the affected districts, suffered much in the civil war in Sri Lanka.</p>
				<ul class="agileits_social_list">
					<li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
				</ul>
			</div>
			<div class="col-md-4 agile_footer_grid">
				<h3>Latest News</h3>
				<ul class="agileits_w3layouts_footer_grid_list">
					<?php
						$newsget=DB::table('o_news')->orderBy('created_at','desc')->paginate(5);
					?>
					@if(count($newsget)>0)
						@foreach($newsget as $news)
						<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>
							<a href="/News/{{$news->title}}">{{$news->title}}</a>
						</li>
						@endforeach
                    @else
                        <p>No News Results found</p>
                    @endif
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<div class="agileinfo_copyright">
		<p>© 2018 Orhan. All rights reserved | Developed by <a href="http://www.adameveandapple.co.uk/">AdamEve&Apple</a></p>
	</div>
<!-- //footer -->

<!-- js -->
<script type="text/javascript" src="{{asset('/js/jquery-2.1.4.min.js')}}"></script>
<script src="{{asset('/js/simpleLightbox.js')}}"></script>
<script>
		$('.w3_agile_gallery_grid a').simpleLightbox();
	</script>
<!-- carousal -->
	<script src="{{asset('/js/slick.js')}}" type="text/javascript"></script>
	<script type="text/javascript">
		$(document).on('ready', function() {
		  $(".center").slick({
			dots: true,
			infinite: true,
			centerMode: true,
			slidesToShow: 2,
			slidesToScroll: 2,
			responsive: [
				{
				  breakpoint:800,
				  settings: {
					arrows: true,
					centerMode: false,
					slidesToShow: 1
				  }
				},
				{
				  breakpoint: 480,
				  settings: {
					arrows: true,
					centerMode: false,
					centerPadding: '40px',
					slidesToShow: 1
				  }
				}
			 ]
		  });
		});
	</script>
<!-- //carousal -->
<!-- //js -->
<script>
        $(function(){ 

  // parameters
  // image height
  var images_height = '650px';
  // array of images
  var images_url = [
      'images/banner.jpg',
      'images/banner-1.jpg',
      'images/banner-2.jpg'
  ];
  var images_count = images_url.length;

  // create nodes
  for(var j=0;j<images_count+1;j++){
      $('.banner ul').append('<li></li>')
  }

  // pagination
  for(var j=0;j<images_count;j++){
      if(j==0){
          $('.banner ol').append('<li class="current"></li>')
      }else{
          $('.banner ol').append('<li></li>')
      }
  }

  // convert images into backgrounds
  $('.banner ul li').css('background-image','url('+images_url[0]+')');
  
  $.each(images_url,function(key,value){
      $('.banner ul li').eq(key).css('background-image','url('+value+')');
  });

  $('.banner').css('height',images_height);

  $('.banner ul').css('width',(images_count+1)*100+'%');

  $('.banner ol').css('width',images_count*20+'px');
  $('.banner ol').css('margin-left',-images_count*20*0.5-10+'px');

  var num = 0;

  var window_width = $(window).width();

  $(window).resize(function(){
      window_width = $(window).width();
      $('.banner ul li').css({width:window_width});
      clearInterval(timer);
      nextPlay();
      timer = setInterval(nextPlay,2000);
  });

  $('.banner ul li').width(window_width);

  // pagination dots
  $('.banner ol li').mouseover(function(){
      $(this).addClass('current').siblings().removeClass('current');
      var i = $(this).index();
      //console.log(i);
      $('.banner ul').stop().animate({left:-i*window_width},500);
      num = i;
  });

  // autoplay
  var timer = null;

  function prevPlay(){
      num--;
      if(num<0){
          $('.banner ul').css({left:-window_width*images_count}).stop().animate({left:-window_width*(images_count-1)},500);
          num=images_count-1;
      }else{
          $('.banner ul').stop().animate({left:-num*window_width},500);
      }
      if(num==images_count-1){
          $('.banner ol li').eq(images_count-1).addClass('current').siblings().removeClass('current');
      }else{
          $('.banner ol li').eq(num).addClass('current').siblings().removeClass('current');

      }
  }

  function nextPlay(){
      num++;
      if(num>images_count){
          $('.banner ul').css({left:0}).stop().animate({left:-window_width},500);
          num=1;
      }else{
          $('.banner ul').stop().animate({left:-num*window_width},500);
      }
      if(num==images_count){
          $('.banner ol li').eq(0).addClass('current').siblings().removeClass('current');
      }else{
          $('.banner ol li').eq(num).addClass('current').siblings().removeClass('current');

      }
  }

  timer = setInterval(nextPlay,2000);

  // auto pause on mouse enter
  $('.banner').mouseenter(function(){
      clearInterval(timer);
      $('.banner i').fadeIn();
  }).mouseleave(function(){
      timer = setInterval(nextPlay,2000);
      $('.banner i').fadeOut();
  });

  // goto next
  $('.banner .right').click(function(){
      nextPlay();
  });

  // back to previous
  $('.banner .left').click(function(){
      prevPlay();
  });

});
    </script>

<!-- start-smoth-scrolling -->
<script type="text/javascript" src="{{asset('/js/move-top.js')}}"></script>
<script type="text/javascript" src="{{asset('/js/easing.js')}}"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
<!-- for bootstrap working -->
	<script src="{{asset('/js/bootstrap.js')}}"></script>
<!-- //for bootstrap working -->
<!-- //here ends scrolling icon -->
	<script src="{{asset('/js/owl.carousel.js')}}"></script>
	<script>
$(document).ready(function() { 
	$("#owl-demo").owlCarousel({
 
		autoPlay: 3000, //Set AutoPlay to 3 seconds
		autoPlay:true,
		items : 3,
		itemsDesktop : [640,5],
		itemsDesktopSmall : [414,4]
 
	});
	
}); 
</script>
<script type="text/javascript" src="{{asset('/js/numscroller-1.0.js')}}"></script>

<script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
<script src='https://cdn.rawgit.com/jackmoore/colorbox/master/jquery.colorbox-min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/js-cookie/2.1.3/js.cookie.min.js'></script>

<script  src="/js/index.js"></script>