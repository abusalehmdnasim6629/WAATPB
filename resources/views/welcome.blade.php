@extends('layouts.webview')

@section('content')
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Advent Pro' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Amarante' rel='stylesheet'>
<!-- <script src='https://kit.fontawesome.com/a076d05399.js'></script> -->


<style>
	body{
		background:#F1F4F6;
	}
 
 .wh{
	
	/* box-shadow:0 10px 16px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19); */
	box-shadow: 0 0.46875rem 2.1875rem rgba(4, 9, 20, 0.03), 0 0.9375rem 1.40625rem rgba(4, 9, 20, 0.03), 0 0.25rem 0.53125rem rgba(4, 9, 20, 0.05), 0 0.125rem 0.1875rem rgba(4, 9, 20, 0.03);
	background-color:white;
	color:black;
	border-radius:10px;
 }
 .wh p{
	font-family: 'Advent Pro';
	
 }
 .wh:hover{
	cursor:pointer;
	
	
 }
 .wh:hover p{
	
	
 }
 .sr{
	/* box-shadow:0 2px 5px rgb(0,1.0,1.0); */
	/* box-shadow:0 10px 16px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19); */
	box-shadow: 0 0.46875rem 2.1875rem rgba(4, 9, 20, 0.03), 0 0.9375rem 1.40625rem rgba(4, 9, 20, 0.03), 0 0.25rem 0.53125rem rgba(4, 9, 20, 0.05), 0 0.125rem 0.1875rem rgba(4, 9, 20, 0.03);
	border-radius:50%;
	background-color: white;
	/* background-image: linear-gradient(to right, white, #a9dcdf); */
	height:180px;
	width:180px;

 }
 .sr:hover{
	
	cursor:pointer;

	transform: scale(1.2);
	transition-duration: 2s;
	
 }
 .sr i:hover{
	transform: rotate(360deg);
	transition-duration: 1s;
 }

 .vd a img{
	/* box-shadow:0 10px 16px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19); */
	box-shadow: 0 0.46875rem 2.1875rem rgba(4, 9, 20, 0.03), 0 0.9375rem 1.40625rem rgba(4, 9, 20, 0.03), 0 0.25rem 0.53125rem rgba(4, 9, 20, 0.05), 0 0.125rem 0.1875rem rgba(4, 9, 20, 0.03);
	height:400px;
	border-radius:5px;
 }
 .hi{
	/* box-shadow:0 10px 16px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19); */
	box-shadow: 0 0.46875rem 2.1875rem rgba(4, 9, 20, 0.03), 0 0.9375rem 1.40625rem rgba(4, 9, 20, 0.03), 0 0.25rem 0.53125rem rgba(4, 9, 20, 0.05), 0 0.125rem 0.1875rem rgba(4, 9, 20, 0.03);
	background-color:#85c1e9;
	border-radius:10px;
    color:white;
	padding:20px;
	
 }
 .hi:hover{
	cursor:pointer;
	font-size:20px;
 }
 /* .his{
	
	background-image:
    linear-gradient(
      to top, 
      white, 
      #f5f5f5 , 
      white
	  

    );
 } */
 /* .gl{
	background-image:
    linear-gradient(
      to bottom, 
      white,  
      #f5f5f5, 
      white
	  

    );
 } */
 .ev{
	  /* box-shadow:0 2px 5px rgb(0,1.0,1.0); */
	  box-shadow: 0 0.46875rem 2.1875rem rgba(4, 9, 20, 0.03), 0 0.9375rem 1.40625rem rgba(4, 9, 20, 0.03), 0 0.25rem 0.53125rem rgba(4, 9, 20, 0.05), 0 0.125rem 0.1875rem rgba(4, 9, 20, 0.03);
	  height:400px;
      border-left: 40px;
      border-right: 40px;
      top: 70px;
      left: -10px;
      transform: rotate(-70deg);
	  
	  transition-duration: 1s;
 }
 .ev:hover{
	border-left: 0px;
    border-right: 0px;
    top: 0px;
	left:0px;
	cursor:pointer;
	transform: rotate(0deg);
	transform: scale(1.2);
	transition-duration:2s;
	
 }
 .im{
	border:0px; 
    transform: scale(1.0);
	transition-duration:2s;
 }
 .im:hover{
    transform: scale(1.2);
	transition-duration: 2s;
 }
 .gd{
	 border-radius:10px;
 }
 .pp{
	
  
 }
 .pp:hover{
	
	cursor:pointer; 
	font-size: 20px; 
	

 }
 .learn{
	 background:white;
	 color:black;
 }
 .learn:hover{
	 border:1px solid white;
	transform: scale(1.5);
	transition-duration: .5s;
 }
 .title{
	font-family: 'Amarante';
 }
 #gl{
	background:#1C2833;
 }
 .image {
  display: block;
  width: 100%;
  height: auto;
}

.overlay {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height:425px;
  border-radius:20px;
  width: 100%;
  opacity: 0;
  margin-top:22px;
  transition: .5s ease;
  background-color: #e4ebe5;
}

.containerrr:hover .overlay {
  opacity: .5;
}

.text {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}

</style>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
<main class="main">

	<!-- Start Slider
		============================================= -->
	<div id="home" class="hero-section">
		<div class="hero-slider">
			<!-- owl Slider Begin -->
			<div class="hero-single overlay-single overlay-shape">
				<div class="container">
					<div class="row">
						<div class="col-xl-13 col-sm-12">
							<div class="hero-content">
								<h2 style="color:white;">{{$header->header_title ?? ''}}</h2>
							</div>
						</div>
						<div class="col-xl-6">
							<div class="hero-content">
								<p class="mb-20" data-aos="zoom-in">
									{{$header->header_description ?? ''}}
								</p>
								<div class="hro-btn">
									<a href="#about" class="theme-btn smooth-menu learn ">Learn More</a>
								</div>
							</div>
						</div>
						<div class="col-xl-6">
							<div class="hero-img">
								<img src="{{asset('assets/img/header/banner_img.webp')}}" alt="thumb">
							</div>
						</div>
					</div>
				</div>
			</div><!-- single Slider End -->
		</div>
	</div>
	<!-- End hero -->

	<!-- Start About
		============================================= -->
	<div id="about" class="about-area de-padding ser">
		<div class="container">
			<div class="row text-justify wh p-4" data-aos="zoom-in">
				<div class="col-md-6">
					<h2 style="font-size:25px;">Who we are</h2>
					<p data-aos="fade-right" class="pp">
						{{$about->about_description}}
					</p>

					<h2 style="font-size:25px;">Vision</h2>
					<p data-aos="fade-up" class="pp">
						{{$about->about_vision}}
					</p>

				</div>
				<div class="col-md-6">
					<h2 style="font-size:25px;">Mission</h2>
					<p data-aos="fade-left" class="pp">
						{{$about->about_mission}}
					</p>

					<h2 style="font-size:25px;">Who can be a member</h2>
					<p data-aos="fade-up" class="pp">
						{{$about->about_member}}
					</p>
				</div>
			</div>

	<div class="event-all text-center mt-30">
		<a href="#service" class="theme-btn smooth-menu learn">Read More</a>
	</div>

	</div>
	</div>
	

	<div class="container-fluid" >
		<div class="row ser" id="service">
		<div class="col-sm-10 mx-auto"> 
		  <div class="row" >
		    <div class="col-sm-10 mx-auto site-title">
			            <h2 class="col-md my-5 title">Services</h2>
						<p>Our Memeber Facilated With</p>
			</div>
		   </div>
		   <div class="row">
			<div class="col-md-6 text-center">
		    <div class="service-wrapper grid-3">
				<div class="single-service pink sr" data-aos="zoom-in" >
				   <i class='fas fa-hand-holding-heart'></i>
					<h3>{{$welfare->service_title}}</h3>
				</div>
				<div class="single-service orange sr" data-aos="zoom-out">
					<i class="fas fa-graduation-cap"></i>
					<h3>{{$training->service_title}}</h3>
				</div>
				<div class="single-service pink grn sr" data-aos="zoom-in">
					<i class="fas fa-briefcase"></i>
					<h3>{{$job->service_title}}</h3>
				</div>
				<div class="single-service orange sr" data-aos="zoom-out">
					<i class="fas fa-flask text-info"></i>
					<h3>{{$research->service_title}}</h3>
				</div>
				<div class="single-service orange sr" data-aos="zoom-in">
					<i class="fas fa-map-marker-alt" style="color:#ff0103;"></i>
					<h3>{{$blood->service_title}}</h3>
				</div>
				<div class="single-service pearl sr" data-aos="zoom-out">
					<i class="fas fa-database"></i>
					<h3>{{$database->service_title}}</h3>
			
				</div>
			</div>
		 
		 </div>

		 <div class="col-md-6">
		    <div class="row vd">
			  <div class="col-md-10 mx-auto ">
				@if($video == null )
					
				@else
				<!-- <iframe  width="100%"  src="https://www.youtube.com/embed/{{$video->video_id}}" frameborder="1"  allowfullscreen allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="1000"></iframe></a> -->
				<div class="containerrr">
					<!-- <a class="ig border"  ><img src="{{$video->thumbnail_image}}" class="image" alt="thumb"></a> -->
					<a class="ig border"  ><img src="image/B7BztJSiUBecU2yNIOoM.png" class="image" alt="thumb"></a>
					<div class="overlay">
						<!-- <div class="text"><a data-fancybox="gallery" href="https://www.youtube.com/embed/{{$video->video_id}}" class="btn btn-danger btn-lg">Watch</a></div> -->
						<div class="text"><a data-fancybox="gallery" href="video/v1.mp4" class="btn btn-danger btn-lg">Watch</a></div>
					</div>
				</div>
				@endif
				
			  </div>
			</div>	
		 </div>
		 </div>
		 </div>
		</div>
	</div>
	<!-- End Service -->

	<!-- Start History
		============================================= -->
	<div class="history his de-padding" id="history">
		<div class="container hi" data-aos="zoom-out">
		  
			<div class="row">
				<div class="col-xl-8 offset-xl-2">
					<div class="site-title">
						<h2 class="title">History</h2>
					</div>
				</div>
			</div>
			<div class="history-wrapper">
				<article class="text-center">
					<p class="text-justify" data-aos="zoom-in" style="font-family: 'Advent Pro';">
						{{$history->first_paragraph}}
					</p>

					<a href="{{URL::to('/full-history')}}" class="theme-btn learn">Read full history</a>
				</article>
			</div>
		
		</div>
	</div>
	<!-- End History -->
   
	<!-- Start Event
		============================================= -->
	<div class="event-area bg de-padding his" id="event">
		<div class="container">
			<div class="row">
				<div class="col-xl-8 offset-xl-2">
					<div class="site-title">
						<h2 class="title">Events</h2>
					</div>
				</div>
			</div>
			<div class="event-wrapper grid-3">
				<?php foreach($event as $e){ ?>
				<div class="event-box text-center ">
					<div class="event-img">
						<img src="{{URL::to($e->event_image)}}" class="ev"alt="thumb">
						<div class="event-date">
							<?php  $time = strtotime($e->event_date);
							Session::put('e_id',$e->event_id);
							?>

							<p class="event-countdown" data-date="{{date("M d, Y 00:00:00" , $time)}}"></p>
							<br />
							<p>{{date("d-F", $time)}}</p>
							{{date("Y", $time)}}
						</div>
					</div>
					<div class="join-btn">
						<a href="{{URL::to('/join')}}" class="theme-btn">Join</a>
					</div>
				</div>
				<?php  } ?>


			</div>
		</div>
		<div class="event-all text-center mt-30">
			<a href="{{URL::to('/view-all-event')}}" class="theme-btn learn">View All Event</a>
		</div>
	</div>
	<!-- End Event -->

	<!-- start gallery -->
	<div class="event-area bg  gl" id="gallary">
		<div class="container">

			<div class="container">
				<div class="row">
					<div class="col-xl-8 offset-xl-2">
						<div class="site-title">
							<h2 class="title">Gallary</h2>
						</div>
					</div>
				</div>



				<hr class="mt-2 mb-5">
                
				<div class="row" id="gl">
				   @foreach($g_category as $gc)
				   <div class="col-md mx-auto" >
				        
						<?php 
						   $imageByCategory = DB::table('tbl_gallary')
							  ->where('category_id',$gc->id)
							  ->get();
						
						?>
						<div class="row gd">
						
						<div class="col-md text-center mx-auto">
						<marquee behavior="alternate" direction="up" onmouseover="this.stop();" onmouseout="this.start();" scrolldelay="0" height="500">
						    @foreach($imageByCategory as $ibc)
							<a href="{{URL::to($ibc->image)}}" class="mb-4 h-100" id="marquee" >
								<img class="img-fluid img-thumbnail mx-auto im" style="width:100%;height:200px;border-bottom:2px solid black;"
									src="{{URL::to($ibc->image)}}" alt="image">
							</a>
							@endforeach
						</marquee>
					    </div>
						
					   </div>
					   
				   </div>
				   
				   @endforeach
				
				</div>

			</div>
			<div class="event-all text-center mt-30 mb-5">
						<a href="{{URL::to('/view-all')}}" class="theme-btn learn">View All</a>
			</div>
		</div>

		<!-- end gallary -->

		

</main>
 @include('layouts.addvertisement')

	 
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

<script>
        
	  $(document).ready(function(){

					$("#close").click(function(){
	    	        $("#ad").hide();
					});



				

			});
        
    
 
</script>