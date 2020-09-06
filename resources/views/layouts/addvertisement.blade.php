<style>
.imk{
	position: relative;
    animation: swing; /* referring directly to the animation's @keyframe declaration */
    animation-duration: 2s; 
   
}

.watch{
  position: absolute;
  top: 50%;
  left:93%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  
}

@media screen and (min-width: 1600px) {
    .watch{
  position: absolute;
  top: 50%;
  left:94%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  
}
}
</style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
<?php 
       $res = DB::table('tbl_advertisement')
              ->inRandomOrder()
              ->limit(1)
              ->get();
    
    ?>
     <!-- <div class="d-block fixed-bottom  text-right"> -->
     <div class="display-inline fixed-bottom text-white text-right"  id="ad">
            <button type="button" class="close" id="close" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
                           @foreach($res as $r)
                           <a href="#" class="d-inline mb-4 h-100" >
								<!-- <img class="img-fluid img-thumbnail" style="width:200px;height:200px;"
									src="{{URL::to($r->advertisement_image)}}" alt="image"> -->
									<img class="img-fluid img-thumbnail imk" style="width:200px;height:200px;"
									src="image/B7BztJSiUBecU2yNIOoM.png" alt="image">
									<a class="btn btn-danger btn-lg watch" data-fancybox="gallery" href="video/v1.mp4"><i class="fas fa-play-circle" ></i></a>
							</a>
							
                            @endforeach
     </div>
     <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
     <script>
        
        $(document).ready(function(){
  
                      $("#close").click(function(){
                      $("#ad").hide();
                      });
  
  
  
                  
  
              });
          
      
   
  </script>