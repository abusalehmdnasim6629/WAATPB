<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> WAATPB </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="{{asset('frontend/css/price-range.css')}}" rel="stylesheet">
    
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/img/logo/favicon.png')}}">
    
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/fontawesome.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/magnific-popup.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/owl.carousel.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/owl.theme.default.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/animate.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/bsnav.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/flaticon-set.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/site-animation.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/slick.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/themify-icons.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/swiper.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/style.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/responsive.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
   
    <style>
    body{
        background-color:#f5f5f5;
    }
     .bg-area {
            height: 800px;
        }

        .bg-area::before {
            position: absolute;
            content: '';
            top: 0;
            RIGHT: 0;
            height: 100%;
            width: 75%;
            background-color: #404040;
            z-index: -2;
        }

        .bg-area::after {
            position: absolute;
            content: '';
            top: 0;
            left: 0;
            height: 100%;
            width: 35%;
            background-color: #6b7c72;
            z-index: -2;
        }

        .member-image {
            height: 565px;
            width: 100%;
            margin-top: 80px;
        }

        .member-text-area {
            position: absolute;
            top: 0;
            left: 0;

        }
        .cl{
            margin-left:5%;
            background-color:#f3f3f3;
            border-radius:8px;
            margin-top:20px;
            margin-bottom:20px;
        }
        .cl2{
            margin-top:20px;
            box-shadow:0 2px 5px rgb(0,0,153);background:white;padding:15px;
        }
        .cl p{
            font-size:30px;
        }
        .cl p span{
            font-size:23px;
        }
        .pay a{
            height:50px;
            font-size:20px;
            padding:7px;
            font-weight:bold;
        }
    
       .or a{
        font-size:20px;
            padding:7px;
            font-weight:bold;
       }
       .bkash{
           height:80px;
           width:120px;
           box-shadow:0 2px 5px rgb(0,0,153);
           border-radius:10px;
           background:white;
           margin-top:10px;
       }
       .bkash:hover{
           cursor:pointer;
       }
       #agent{
           font-size:20px;
           color:black;
           
       }
       #nam{
           font-size:20px;
           color:black;
           font-weight:bold;
           
       }
       #ord{
        box-shadow:0 2px 5px rgb(0,0,153);background:white;padding:15px;
       }
       #payinfo:hover{
           cursor:pointer;
       }
    </style>
    
</head>

<body>

    @include('sweetalert::alert')
    @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
    
    <div class="se-pre-con"></div>
    
    <div class="icon-bar">
        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
        <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
        <a href="#" class="youtube"><i class="fa fa-youtube"></i></a>
    </div>
    
@include('layouts.topbar')

<div class="clearfix"></div>
<link href='https://fonts.googleapis.com/css?family=Alegreya SC' rel='stylesheet'>
<div class="site-breadcrumb-title" style="background: url(image/mango.jpg)">
	<h2  style="font-family: 'Alegreya SC'; font-size:50px;"><i  class="fas fa-cart-plus"></i> Bunon Basket</h2>
	<div class="main-breadcrumb">
		
	</div>
</div>

<div class="container-fluid">
    <div class="row">
    <div class="col-sm-12">
    
      <div class="row">

        <div class="col-sm-1">

        <!-- <p class="mt-3" style="font-size:30px;color:black;">Video</p> -->
        
        
        </div>


        <div class="col-sm-7">
               <p class="mt-3 text-center" style="font-size:30px;color:black;">Order</p>
               <div class="col-sm-12">
               <div class="row text-black">
                   <div class="col-sm-12" id="ord">
               <form action="{{url('/order')}}"method="post">
                        {{csrf_field()}}
                  <div class="col-sm-12">

                    <div class="row">
                      <div class="col-sm-4">
                        <div class="form-group">
                            <label class='text-dark'for="exampleInputPassword1">Name <sup>*</sup></label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Name" >
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <div class="form-group">
                            <label class='text-dark' for="exampleInputPassword1">Phone <sup>*</sup></label>
                            <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone">
                        </div>
                        </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label class='text-dark' for="exampleInputEmail1">Email <sup></sup></label>
                            <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                            
                        </div>
                    </div>
                  </div>
                  <input type="hidden" class="form-control" name="prname" id="prname" placeholder="Name" >
                  <input type="hidden" class="form-control" name="pbrand" id="pbrand" placeholder="Name" >
                  <input type="hidden" class="form-control" name="pqntt" id="pqntt" placeholder="Name" >
                  <input type="hidden" class="form-control" name="measurem" id="measurem" placeholder="Name" >

                  <div id="noted">
                  <textarea type ="hidden" name="notes" id="notes" cols="30" rows="10"></textarea>
                  </div>

                  <div class="row">
                      <div class="col-sm-3">
                            <div class="form-group" id="ct">
                                        <label class='text-dark' for="exampleInputPassword1">Category <sup>*</sup></label>
                                        @php
                                        $city=DB::table('category')
                                                ->get();
                                        @endphp
                                        <select class="form-control" id="category" name="category">
                                        <option value="select">Select..</option>
                                        @foreach($city as $c)
                                        <option value="{{$c->name}}">{{$c->name}}</option>
                                        @endforeach
                                        </select>
                                </div>
                      </div>

                      <!-- <div class="col-sm-3">
                        <div class="form-group">
                            <label class='text-dark' for="exampleInputPassword1">Click here</label>
                            <input class="btn btn-warning btn-sm" name="custom" id="custom" value="Custom Category">
                            
                        </div>
                     </div> -->
                      
                      <!-- <div class="col-sm-3">
                        <div class="form-group">
                            <label class='text-dark' for="exampleInputEmail1">Measurement <sup>*</sup></label>
                            
                            <input type="text" style="width:150px;" class="form-control" name="measurement" id="measurement" aria-describedby="emailHelp" placeholder="Ex. 10">
                            
                        </div>
                    </div> -->

                    <div class="col-sm-2">
                            <div class="form-group">
                                    <label class='text-dark' for="exampleInputPassword1">City <sup>*</sup></label>
                                        @php
                                        $city=DB::table('delivarycity')
                                                ->get();
                                        @endphp
                                        <select class="form-control" id="city" name="city">
                                        <option value="select">Select..</option>
                                        @foreach($city as $c)
                                        <option value="{{$c->city}}">{{$c->city}}</option>
                                        @endforeach
                                        </select>
                                </div>
                      </div>

                      <div class="col-sm-4">
                      <div class="form-group">
                            <label class='text-dark' for="exampleInputPassword1">Address <sup>*</sup></label>
                            <textarea name="" id="address"name="address" class="form-control" cols="30" rows="2"></textarea>
                        </div>
                        </div>
                  </div>



                  <div class="row" id="cus">
                      
                  
                  </div>
                  <div class="row text-center mt-2" id="cuss" >
                      
                  <a  class="btn btn-success mx-auto text-white" id="add"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Add to Cart</a>
                  </div>


               </div>  
                        
                </form>
                </div>
                       <!-- <div class="col-sm-12 mx-auto mt-4 mb-5 text-center or">
                                <a  type="submit" id="order" class="col-sm-12 btn btn-primary mx-auto text-center">Order</a>
                                </div> -->


                        </div> 
                  </div>
                 

                 
                  <div class="form-group">
                            <label for="exampleInputEmail1" style="font-size:30px;color:black;">Payment Confirmation<sup></sup></label>
                             <a id="payinfo" style="font-size:35px;margin-left:20px;"><i class="fa fa-caret-down text-success" aria-hidden="true" ></i></a>
                            <!-- <input type="checkbox" class="form-control" name="chk" id="payinfo" value="checked" aria-describedby="emailHelp"> -->
                            
                  </div>
                <div class="row">
                   <div class="col-sm-12" id="payment">
                       
                        <p class="col-sm-12 mt-5"><span style="font-size:25px;">Select method</span></p>
                        <br>
                        <div class="col-sm-12 mb-5 pay text-center">
                       
                        <!-- <a><img src="{{asset('image/cash.png')}}" id="cash" class="bkash" data-toggle="cash" title="Cash on Delivery"></a> -->
                        <a><img src="{{asset('image/bkash.png')}}" id="bkash"class="bkash" data-toggle="bkash" title="Pay by bkash"></a>
                        <a><img src="{{asset('image/rocket.png')}}"id="rocket" class="bkash" data-toggle="rocket" title="Pay by rocket"></a>
                        @php         
                                    $bnum=DB::table('paynumber')
                                            ->where('method','LIKE', '%' .'bkash'. '%')
                                            ->get();

                                    $rnum=DB::table('paynumber')
                                            ->where('method','LIKE', '%' .'rocket'. '%')
                                            ->get();
                        @endphp
                        @foreach($bnum as $bnum)
                        <input type="hidden" class="form-control" name="number" id="bnumb" aria-describedby="emailHelp" value="{{$bnum->number}}">
                        @endforeach
                        @foreach($rnum as $rnum)
                        <input type="hidden" class="form-control" name="number" id="rnumb" aria-describedby="emailHelp" value="{{$rnum->number}}">
                        @endforeach


                        </div>
                        <div class="col-sm-12 mb-5 or" id="or">
                        <label for=""><span id="agent"></span> <span id="nam"></span></label>
                        <label for=""><span id="method"></label>
                        <input type="text" class="form-control" name="number" id="number" aria-describedby="emailHelp" placeholder="Enter Your Number">
                        <br>
                        <input type="text" class="form-control" name="txid" id="txid" aria-describedby="emailHelp" placeholder="Enter Your Transaction Id"> 
                        <br>
                        <input type="text" class="form-control" name="number" id="id" aria-describedby="emailHelp" placeholder="Enter Id">
                        <br>
                        <div class="col-sm-12 mb-5 or">
                        <a  id="cpay" name="cpay" class="col-sm-12 btn btn-primary mx-auto text-center">Confirm</a>
                        </div>
                        </div>
                        
                        
                        
                  </div>

                  </div>
                  
           </div>
           <div class="col-sm-4">
               <p class="col-sm mt-3" style="font-size:30px;color:black">Your Information</p>
                            
                            <div class="col-sm-12 mx-auto cl2">                            
                                <table align="center" class="col-sm">
                                    <tr>
                                        <td>Name</td>
                                        <td>:</td>
                                        <td><span id="nm"></span></td>
                                    </tr>
                                    <tr>
                                        <td>Phone</td>
                                        <td>:</td>
                                        <td><span id="ph"></span></td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td>:</td>
                                        <td><span id="em"></span></td>
                                    </tr>
                                    

                                </table>
                            </div>

                            <div class="col-sm-12 mx-auto cl2">  
                            <h3 class="col-sm"><i class="fa fa-shopping-cart text-warning" aria-hidden="true"></i> Cart</h3>
                            
                            <div class="col-sm-12 mx-auto">  
                                <div class="row">
                                   <div class="col-sm-9">
                                   <a class="btn btn-warning text-white">No of Product: <span id="cart"></span></a>
                                   </div>
                                   <div class="col-sm-3">
                                   <a class="btn btn-danger text-right mb-1" id="clear">Clear list</a>
                                   </div>
                                </div>
                                
                            </div>                
                                <div class="col-sm-12" id="">
                                   <table class="table table-striped text-center">
                                    
                                      <tr>
                                        <th>
                                         Serial
                                        </th>
                                        <th>
                                         Product Name
                                        </th>
                                        <th>
                                         Brand
                                        </th>
                                        <th>
                                         Quantity
                                        </th>
                                        
                                      </tr> 

                                      

                                   </table>

                                   
                                </div>
                                <div class="col-sm-12" id="">
                                   <table class="table table-striped text-center" id="h">
                                    
                                      
                                      

                                   </table>
                                   
                                   
                                </div>
                                
                                
                            </div>      
                                
                           
                                
                                <div class="col-sm-12 mx-auto mt-2">  
                                    <div class="row">
                                    
                                    <div class="col-sm-12 mx-auto">
                                    <a class="col-sm-12 btn btn-primary text-white" style="font-size:25px;" id="ordd">Order</a>
                                    </div>
                                    </div>


                            </div>




                            <div class="col-sm-12 mx-auto cl2 mb-3">                            
                                
                                     <p style="color:black;font-weight:bold">Notes:</p>
                                     <ul>
                                         @php
                                           $r = DB::table('ordernote') 
                                                ->get();
                                              $i = 1;  
                                         @endphp 
                                         @foreach($r as $r)
                                         <li><td><b>{{ $i }}. </b></td><td>{{$r->note}}</td></li>
                                         @php
                                         $i++;
                                         @endphp 
                                         @endforeach
                                        
                                         
                                     </ul>

                                </table>
                            </div>
                               
                    
            </div>
            

            

       </div>
       </div>
       </div> 
    </div>

  




    @include('layouts.footer')





    


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Login here</h5>
        <button type="button" class="btn btn-danger close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="{{url('/login-check')}}" method="post" enctype="multipart/form-data">
                    {{ csrf_field()}}
                    <fieldset>
                        <div class="form-group">
                            <input type="email" placeholder="Email" name="email" class="form-control" required="">
                        </div>
                        <div class="form-group">
                            <input type="password" placeholder="Password" name="password" class="form-control" required="">
                        </div>

                        
                        <a href="{{URL::to('/forgot-password')}}" class="btn btn-link">Forgot password?</a>
                        
                    </fieldset>

               
      </div>
      <div class="modal-footer">
        <button type="reset" class="btn btn-secondary" >Reset</button>
        <button type="submit" class="btn btn-primary">Login</button>
      </div>
      </form>
    </div>
  </div>
</div>
    
    

   

    <script src=" {{asset('assets/js/jquery-1.12.4.min.js')}}"></script>
    <script src=" {{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src=" {{asset('assets/js/popper.min.js')}}"></script>
    <script src=" {{asset('assets/js/jquery.appear.js')}}"></script>
    <script src=" {{asset('assets/js/html5/html5shiv.min.js')}}"></script>
    <script src=" {{asset('assets/js/html5/respond.min.js')}}"></script>
    <script src=" {{asset('assets/js/jquery.easing.min.js')}}"></script>
    <script src=" {{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
    <script src=" {{asset('assets/js/progress-bar.min.js')}}"></script>
    <script src=" {{asset('assets/js/modernizr.custom.13711.js')}}"></script>
    <script src=" {{asset('assets/js/owl.carousel.min.js')}}"></script>
    <script src=" {{asset('assets/js/wow.min.js')}}"></script>
    <script src=" {{asset('assets/js/isotope.pkgd.min.js')}}"></script>
    <script src=" {{asset('assets/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src=" {{asset('assets/js/count-to.js')}}"></script>
    <script src=" {{asset('assets/js/fontawesome.min.js')}}"></script>
    <script src=" {{asset('assets/js/swiper.min.js')}}"></script>
    <script src=" {{asset('assets/js/YTPlayer.min.js')}}"></script>
    <script src=" {{asset('assets/js/slick.min.js')}}"></script>
    <script src=" {{asset('assets/js/bsnav.min.js')}}"></script>
    <script src=" {{asset('assets/js/filter.js')}}"></script>
    <script src=" {{asset('assets/js/main.js')}}"></script>
    <script src=" {{asset('assets/js/jquery.countdown.js')}}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
    <script>
     
     $(document).ready(function(){
        $("#cus").hide();
        $("#cuss").hide();
        $("#noted").hide();
        $("#tb1").hide();
        $("#cart").text(0);



        

           $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            
            $("#category").change(function(e){
           
                var category = $("#category option:selected").val();
                
                            
                            
                            
                            
                            $.ajax({
                                type: "get",
                                url: "{{ url('/type') }}",
                                data: {category:category}, 
                                success:function(data){
                                    
                                    $("#cus").html(data);
                                    
                                    $("#cus").show();
                                    $("#cuss").show();
                                    $("#pname").keyup(function(){
                                         var p = $("#pname").val();
                                         console.log(p);
                                         $("#prname").val(p);
                                         $("#pnnn").val(p);


                                    
                                            
                                        });
                                    
                                        $("#brand").keyup(function(){
                                         var p = $("#brand").val();
                                         console.log(p);
                                         $("#pbrand").val(p);
                                         $("#pbnn").val(p);
                                        
                                        });

                                        $("#qntt").keyup(function(){
                                         var p = $("#qntt").val();
                                         console.log(p);
                                         $("#pqntt").val(p);
                                         $("#pqnn").val(p);
                                        
                                        });
                                    
                                        

                                        $("#note").keyup(function(){
                                         var p = $("#note").val();
                                         console.log(p);
                                         $("#notes").val(p);
                                        });


                                        var max_fields      = 19; //maximum input boxes allowed
                                        var wrapper   		= $("#cus"); //Fields wrapper
                                        var add_button      = $("#add_field_button"); //Add button ID
                                        
                                        var x = 1; //initlal text box count
                                        $(add_button).click(function(e){ //on add input button click
                                            e.preventDefault();
                                            //max input box allowed
                                                x++; //text box increment
                                               // $(wrapper).append('<div><input type="text" class="form-control mt-2" name="mytext[]" required="" ><a href="#" class="btn btn-link "id="remove_field">Remove</a></div>'); //add input box 
                                                $(wrapper).append('<div class="row" style="border-bottom:3px solid blue;background:white;padding:15px;"><div class="col-sm-3"><label>Product Name <sup>*</sup></label><input type="text" class="form-control" name="pnm[]"  id="pnm" placeholder="Name" ></div><div class="col-sm-3"><label>Brand<sup></sup></label><input type="text" class="form-control" name="brnd[]"  id="brnd[]" placeholder="Brand" ></div><div class="col-sm-2"><label>Quantity<sup>*</sup></label><input type="text" class="form-control" name="qty[]"  id="qty[]" placeholder="Quantity" ></div><br><div class="col-sm-4"><label>Note </label><textarea class="form-control" name="nt[]" id="nt" cols="30" rows="2"></textarea></div><a href="#" class="btn btn-danger mr-3 "id="remove_field">Remove</a></div>');
                                                

                                               

                                            
                                            
                                        });
                                        
                                       

                                        

                                        $(wrapper).on("click","#remove_field", function(e){ //user click on remove text
                                            e.preventDefault(); $(this).parent('div').remove();
                                            var tr = document.getElementsByName('tr[]');
                                            
                                            $("#tb").remove();
                                           
                                            x--;

                                        });
                                           
                                       
                                    
                                  
                                }
                            });

                                
                            
          
                


            });




    //         $("#custom").click(function(e){
           
    //                 var category = "Custom";
                       
    //                    $.ajax({
    //                        type: "get",
    //                        url: "{{ url('/type') }}",
    //                        data: {category:category}, 
    //                        success:function(data){
                               
    //                            $("#cus").html(data);
                               
    //                            $("#cus").show();
    //                            $("#cuss").show();
    //                            $("#pname").keyup(function(){
    //                                 var p = $("#pname").val();
    //                                 console.log(p);
    //                                 $("#prname").val(p);
    //                                 $("#pnnn").val(p);
                                    

                               
                                       
    //                                });
                               
    //                                $("#brand").keyup(function(){
    //                                 var p = $("#brand").val();
    //                                 console.log(p);
    //                                 $("#pbrand").val(p);
    //                                 $("#pbnn").val(p);
                                   
    //                                });

    //                                $("#qntt").keyup(function(){
    //                                 var p = $("#qntt").val();
    //                                 console.log(p);
    //                                 $("#pqntt").val(p);
    //                                 $("#pqnn").val(p);
                                   
    //                                });
                               
                                   

    //                                $("#note").keyup(function(){
    //                                 var p = $("#note").val();
    //                                 console.log(p);
    //                                 $("#notes").val(p);
    //                                });


    //                                var max_fields      = 10; //maximum input boxes allowed
    //                                var wrapper   		= $("#cus"); //Fields wrapper
    //                                var add_button      = $("#add_field_button"); //Add button ID
                                   
    //                                var x = 1; //initlal text box count
    //                                $(add_button).click(function(e){ //on add input button click
    //                                    e.preventDefault();
    //                                    //max input box allowed
    //                                        x++; //text box increment
    //                                       // $(wrapper).append('<div><input type="text" class="form-control mt-2" name="mytext[]" required="" ><a href="#" class="btn btn-link "id="remove_field">Remove</a></div>'); //add input box 
    //                                        $(wrapper).append('<div class="row" style="border-bottom:3px solid blue;background:white;padding:15px;"><div class="col-sm-3"><label>Product Name <sup>*</sup></label><input type="text" class="form-control" name="pnm[]"  id="pnm" placeholder="Name" ></div><div class="col-sm-3"><label>Brand<sup></sup></label><input type="text" class="form-control" name="brnd[]"  id="brnd[]" placeholder="Brand" ></div><div class="col-sm-2"><label>Quantity<sup>*</sup></label><input type="text" class="form-control" name="qty[]"  id="qty[]" placeholder="Quantity" ></div><br><div class="col-sm-4"><label>Note </label><textarea class="form-control" name="nt[]" id="nt" cols="30" rows="2"></textarea></div><a href="#" class="btn btn-danger mr-3 "id="remove_field">Remove</a></div>');
                                           

                                          

                                       
                                       
    //                                });
                                   
                                  

                                   

    //                                $(wrapper).on("click","#remove_field", function(e){ //user click on remove text
    //                                    e.preventDefault(); $(this).parent('div').remove();
    //                                    var tr = document.getElementsByName('tr[]');
                                       
    //                                    $("#tb").remove();
                                      
    //                                    x--;

    //                                });
                                      
                                  
                               
                             
    //                        }
    //                    });

                           
                       
     
           


    //    });                   
                                var ar = [];
                                var cubes = [];
                                
                                $("#add").click(function(e){ 

                                    

                                        
                                        var category = $("#category option:selected").val();
                                        
                                        var typ = $("#mtype option:selected").val();
                                        var qtt = $("#measurement").val();
                                        
                                        
                                        
                                        if( category != "Custom"){
                                               $("#measurem").val(category);
                                                if(typ){
                                                  if( typ == "select"){
                                                     
                                                     var categ = $("#measurem").val();
                                                      
                                                    // $("#tb").remove();
                                                    // $("#tb1").hide();
                                                     cubes.push([category,category,"none",qtt,"none"]);
                                                    

                                                     //$("#plist").append('<table class="table table-striped text-center"id="tb"><tr name="tr[]"id="tr"><td class="text-center">'+category+'</td><td class="text-center">'+" "+'</td><td class="text-center">'+qtt+'</td></tr></table> ');
                                                     
                                                
                                                  }
                                                  else{
                                                    console.log(typ);
                                                    // $("#tb").remove();
                                                    // $("#tb1").hide();
                                                    cubes.push([category,typ,"none",qtt,"none"]);
                                                   
                                                    // $("#plist").append('<table class="table table-striped text-center"id="tb"><tr name="tr[]"id="tr"><td class="text-center">'+typ+'</td><td class="text-center">'+" "+'</td><td class="text-center">'+qtt+'</td></tr></table> ');
                                                    // categor.push(category); 
                                                    
                                                    // pnme.push(typ);
                                                    // brd.push("");

                                                    // qtity.push(qtt);

                                                    
                                                  }
                                                }else{
                                                    cubes.push([category,category,"none",qtt,"none"]);
                                                     console.log(typ);
                                                    //  $("#tb").remove();
                                                    //  $("#tb1").hide();
                                                    //  $("#plist").append('<table class="table table-striped text-center"id="tb"><tr name="tr[]"id="tr"><td class="text-center" name="cat[]">'+category+'</td><td class="text-center">'+" "+'</td><td class="text-center">'+qtt+'</td></tr></table> ');
                                                    // categor.push(category); 
                                                    // pnme.push(category);
                                                    // brd.push("");
                                                    // qtity.push(qtt);
                                                    
                                                }

                                                $(this).data('clicked', true);


                                        }else{
                                        // $("#tb1").show();
                                        // $("#tb").remove();
                                        var pn = $("#prname").val();
                                        var pb = $("#pbrand").val();
                                        var pq = $("#pqntt").val();
                                        var no = $("#note").val();
  
                                        cubes.push([category,pn,pb,pq,no]);
                                        $("#pnnn").text(pn);
                                        $("#pbnn").text(pb);
                                        $("#pqnn").text(pq);
                                        // pnme.push(pn);
                                        // brd.push(pb);
                                        // qtity.push(pq);
                                        // categor.push(category); 
                                            
                                            var inps = document.getElementsByName('pnm[]');
                                            var bds = document.getElementsByName('brnd[]');
                                            var qts = document.getElementsByName('qty[]');
                                            var nts = document.getElementsByName('nt[]');

                                                    // $("#tb").remove();
                                                    for (var i = 0; i <inps.length; i++) {
                                                    var inp=inps[i];
                                                    var bd=bds[i];
                                                    var qt=qts[i]; 
                                                    var nt=nts[i]; 
                                                    cubes.push([category,inp.value,bd.value,qt.value,nt.value]);

                                                    // categor.push(category); 
                                                    // pnme.push(inp.value);
                                                    // brd.push(bd.value);
                                                    // qtity.push(qt.value);
                                                   // $("#plist").append('<table class="table table-striped text-center"id="tb"><tr name="tr[]"id="tr"><td class="text-center" name="cat[]">'+inp.value+'</td><td class="text-center">'+bd.value+'</td><td class="text-center">'+qt.value+'</td></tr></table> ');
                                                    
                                                    }
                                                    $(this).data('clicked', true);
                                                       
                                        }  
                                        // $("#tb").remove();
                                        // for (var i = 0; i <pnme.length; i++) {
                                            
                                        //      $("#plist").append('<table class="table table-striped text-center"id="tb"><tr name="tr[]"id="tr"><td class="text-center">'+pnme[i]+'</td><td class="text-center">'+brd[i]+'</td><td class="text-center">'+qtity[i]+'</td><td class="text-center"><a class="btn btn-danger" id="rmv">remove</a></td></tr></table> ');
                                        //     // console.log(inp.value);
                                        //              console.log(categor[i]);
                                        //              console.log(pnme[i]);
                                        //              console.log(brd[i]);
                                        //              console.log(qtity[i]);

                                        //              }   


                                         $("#h").empty();
                                         for(var i = 0; i < cubes.length; i++) {
                                                //var cube = cubes[i];
                                                var j = 0;
                                                // for(var j = 0; j < cube.length; j++) {
                                                    $("#h").append('<tr name=""id="trr"><td class="id">'+(i+1)+'</td><td class="name" style="width:100px;">'+cubes[i][j+1]+'</td><td class="">'+cubes[i][j+2]+'</td><td class="">'+cubes[i][j+3]+'</td></tr>');
                                                    //console.log("cube[" + i + "][" + j + "] = " + cube[j]);
                                               // }
                                            }   
                                            $("#cart").text(cubes.length);
                                           

                                            //    $('.dm').click(function(){
                                            //             var val = $(this).closest('tr').find(".id").text();
                                            //             var nm = $(this).closest('tr').find(".name").text();

                                            //             console.log(nm);
                                            //             var index = val-1;
                                            //             // var index = cubes.findIndex(function(item) {return item.name == val})
                                            //             // console.log(index)
                                            //             cubes.splice(index, 1)

                                            //             $("#h").empty();
                                            //             for(var i = 0; i < cubes.length; i++) {
                                            //                     //var cube = cubes[i];
                                            //                     var j = 0;
                                            //                     // for(var j = 0; j < cube.length; j++) {
                                            //                         $("#h").append('<tr name=""id="trr"><td class="id">'+(i+1)+'</td><td class="name" name="p_name[]">'+cubes[i][j]+'</td><td class="" name="p_brand[]">'+cubes[i][j+1]+'</td><td class=""name="p_qty[]">'+cubes[i][j+2]+'</td></tr>');
                                            //                         //console.log("cube[" + i + "][" + j + "] = " + cube[j]);
                                            //                 // }
                                            //                 }  
                                            //                 // $("#add").data('clicked', true);
                                            //             // console.log(arr);
                                            //         }); 

                                             
                                                    
                                        });

                                        $("#clear").click(function(){
                                                       
                                                      

                                                   
                                                        
                                                        cubes.splice(0,cubes.length)
                                                        $("#h").empty();
                                                        $("#cart").text(0);

                                                        console.log(cubes.length);
                                                       
                                                    }); 


       $("#ordd").click(function(e){
  
                   e.preventDefault();
                   $.confirm({
                    title: 'Confirm!',
                    content: 'Simple confirm!',
                    buttons: {
                        confirm: function () {
                 // $.alert('Confirmed!');
                 var category = $("#category option:selected").val();
                 
               
                 var name = $("#name").val();
                 var phone = $("#phone").val();
                

                 var address = $("#address").val();
                 var city = $("#city").val();

                 var email = $("#email").val();
          
                 
                
              


           if(cubes.length >= 1 && cubes.length <= 20){

                 $.ajax({
                 type:'get',
                 url:"{{ url('/orderr') }}",
                 data:{name:name,
                     phone:phone,
                     email:email,
                     city:city,
                     address:address,
                     cubes:cubes

                     },
                 success:function(data){
                     console.log(data);
                     cubes.splice(0,cubes.length);
                            $("#name").val("");
                            $("#phone").val("");
                            $("#prname").val("");
                            $("#pbrand").val("");
                            $("#quantity").val("");
                            $("#notes").val("");
                            $("#email").val("");
                            
                            $("#category").val("select");
                            $("#mtype").val("select");
                            $("#city").val("select");
                            $("#measurement").val("");
                            $("#address").val("");
                            $("#nm").text("");
                            $("#ph").text("");
                            $("#em").text("");
                            $("#cart").text(0);
                     $("#h").empty();
                     $.alert('Success');

                     
                  },
                  error:function (error) {
                        cubes.splice(0,cubes.length);
                        $("#name").val("");
                            $("#phone").val("");
                            $("#prname").val("");
                            $("#pbrand").val("");
                            $("#quantity").val("");
                            $("#notes").val("");
                            $("#email").val("");
                            $("#nm").text("");
                            $("#ph").text("");
                            $("#em").text("");
                            $("#category").val("select");
                            $("#mtype").val("select");
                            $("#city").val("select");
                            $("#measurement").val("");
                            $("#address").val("");
                        $("#h").empty();
                        $("#cart").text(0);
                        $.alert('Please fill all the mandatory field');

                    }

                });
                
                }else if (cubes.length > 20)
                {
                    cubes.splice(0,cubes.length);
                    $("#name").val("");
                            $("#phone").val("");
                            $("#prname").val("");
                            $("#pbrand").val("");
                            $("#quantity").val("");
                            $("#notes").val("");
                            $("#email").val("");
                            $("#nm").text("");
                            $("#ph").text("");
                            $("#em").text("");
                            $("#category").val("select");
                            $("#mtype").val("select");
                            $("#city").val("select");
                            $("#measurement").val("");
                            $("#address").val("");
                            $("#cart").text(0);
                    $("#h").empty();
                    $.alert('Please add product less than or equal 20 in the cart');
                }else{
                    cubes.splice(0,cubes.length);
                    $("#name").val("");
                            $("#phone").val("");
                            $("#prname").val("");
                            $("#pbrand").val("");
                            $("#quantity").val("");
                            $("#notes").val("");
                            $("#email").val("");
                            $("#nm").text("");
                            $("#ph").text("");
                            $("#em").text("");
                            $("#category").val("select");
                            $("#mtype").val("select");
                            $("#city").val("select");
                            $("#measurement").val("");
                            $("#address").val("");
                            $("#cart").text(0);
                    $("#h").empty();
                    $.alert('Please add product in the cart');
                }

                
                
            },
            
            cancel: function () {

                $.alert('Canceled!');
            }

                    }    
        });      
                 

                
             
             
             
      
             
       
});


                                       
          
           $("#payinfo").click(function(){
            // if($(this).prop("checked") == true){
            //     console.log("Checkbox is checked.");
                $("#payment").toggle(1000);
            // }
            // else if($(this).prop("checked") == false){
            //     console.log("Checkbox is unchecked.");
            //     $("#payment").hide();

            // }
            });

           
                                           
    
    });
    </script>
    <script type="text/javascript">
        
        $(document).ready(function(){

                    $("#payment").hide();
                    $("#name").keyup(function(){
                        var name = $("#name").val();
                         $("#nm").text(name);
                        
                    });

                    $("#phone").keyup(function(){
                        var name = $("#phone").val();
                         $("#ph").text(name);
                        
                    });
                    $("#email").keyup(function(){
                        var name = $("#email").val();
                         $("#em").text(name);
                        
                    });
                    

                    
                    
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    

                       
                   
                    
                    $("#or").hide();
                    $("#bkash").click(function(){
                        var numb = $("#bnumb").val();
                        $("#agent").text("Bkash Number(Agent) : ");
                        $("#method").text("bkash");
                        $("#method").hide();
                        $("#nam").text(numb);
                        $("#or").toggle(1000);
                        
                        
                        
                        
                        
   
                    });
                    $("#rocket").click(function(){
                        var numb = $("#rnumb").val();
                        $("#agent").text("Rocket Number(Agent) : ");
                        $("#method").text("rocket");
                        $("#method").hide();
                        $("#nam").text(numb);
                        $("#or").toggle(1000);


                        
                    });   

                    $("#cpay").click(function(e){
                         
                         $("#method").hide();
                         
                         var nm = $("#number").val();
                         var tx = $("#txid").val();
                         var id = $("#id").val();
                         var method = $("#method").text();

                         console.log(method);
                     
                         $.ajax({
                         type:'get',
                         url:"{{ url('/payment') }}",
                         data:{
                             nm:nm,
                             tx:tx,
                             id:id,
                             method:method
                             },
                         success:function(data){
                             console.log(data);
                             
                                
                                     $.alert('Payment completed successfully');
                                     $("#or").hide();
                                     $("#method").hide();
                                     $("#number").val("");
                                     $("#txid").val("");
                                     $("#id").val("");
                                     
                             
                         },
                         error:function (error) {
                                     $("#or").hide();
                                     $("#method").hide();
                                     $("#number").val();
                                     $("#txid").val();
                                     $("#id").val();
                                     
                                     $.alert('Error !! please fill the all sections');
                                 
                             }
                         });
                         

         
                        });
     
                    $('[data-toggle="bkash"]').tooltip(); 
                    $('[data-toggle="rocket"]').tooltip(); 
                    
                   

                    
                   
                    
        });


       
        </script>
        
        
        <script>
         $(function() {
        			var endDate = $('.event-countdown').data('date');
        			
        		
        
        			$('.event-countdown').countdown({
        			date: endDate,
        			render: function(data) {
        				$(this.el).html("<div>" + this.leadingZeros(data.days, 2) + " <span>days</span></div><div>" + this.leadingZeros(data.hours, 2) + " <span>hrs</span></div><div>" + this.leadingZeros(data.min, 2) + " <span>min</span></div><div>" + this.leadingZeros(data.sec, 2) + " <span>sec</span></div>");
        			}
        			});
        		 });




        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
   
    
    // $("#order").click(function(e){
  
    //     e.preventDefault();
    //      $.confirm({
    //                 title: 'Confirm!',
    //                 content: 'Simple confirm!',
    //                 buttons: {
    //                     confirm: function () {
    //                         // $.alert('Confirmed!');
    //                         var category = $("#category option:selected").val();
    //                         console.log(category);
    //                        if(category != 'Custom Category'){
    //                         var name = $("#name").val();
    //                         var phone = $("#phone").val();
    //                         var pn = $("#pname").val();
    //                         var pb = $("#brand").val();
    //                         var pq = $("#qntt").val();
    //                         var no = $("#note").val();

    //                         if( $("#email").val() == ""){
    //                             var email =" ";
    //                         }else{
    //                             var email = $("#email").val();
    //                         }
                            
    //                         var type = $("#mtype option:selected").val();
    //                         var measurement = $("#measurement").val();
    //                         var address = $("#address").val();
    //                         var city = $("#city").val();
    //                         var qan = $("#pqntt").val();

                            
    //                         var pns = [];
    //                         var pbs = [];
    //                         var pqs = [];
    //                         var nts = [];

    //                         var inps = document.getElementsByName('pnm[]');
    //                                                 for (var i = 0; i <inps.length; i++) {
    //                                                 var inp=inps[i];
    //                                                 pns[i] = inp.value;
    //                                                     console.log(inp.value);
    //                                                 }

    //                                             var bndd = document.getElementsByName('brnd[]');
    //                                                 for (var i = 0; i <bndd.length; i++) {
    //                                                 var bnd=bndd[i];
    //                                                 pbs[i] = bnd.value
    //                                                     console.log(bnd.value);
    //                                                 }


    //                                             var qty = document.getElementsByName('pnm[]');
    //                                                 for (var i = 0; i <qty.length; i++) {
    //                                                 var qt=qty[i];
    //                                                     pqs[i]=qt.value; 
    //                                                     console.log(qt.value);
    //                                                 } 

    //                                             var nt = document.getElementsByName('nt[]');
    //                                                 for (var i = 0; i <nt.length; i++) {
    //                                                 var ntt=nt[i];
    //                                                     nts[i] = ntt.value; 
                                                        
    //                                                 } 
                        
                        
    //                     if($('#add').data('clicked')) {
    //                         $.ajax({
    //                         type:'get',
    //                         url:"{{ url('/order') }}",
    //                         data:{name:name,
    //                             phone:phone,
    //                             email:email,
    //                             pn:pn,
    //                             pb:pb,
    //                             pq:pq,
    //                             no:no,
    //                             type:type,
    //                             category:category,
    //                             measurement:measurement,
    //                             address:address,
    //                             city:city,
    //                             pns:pns,
    //                             pbs:pbs,
    //                             pqs:pqs,
    //                             nts:nts,
    //                             qan:qan

    //                             },
    //                         success:function(data){
    //                             console.log(data);
                                
    //                                 if (data) {
    //                                     $("#name").val("");
    //                                     $("#phone").val("");
    //                                     $("#pname").val("");
    //                                     $("#brand").val("");
    //                                     $("#qnty").val("");
    //                                     $("#note").val("");
    //                                     $("#email").val("");
                                        
    //                                     $("#category").val("select");
    //                                     $("#mtype").val("select");
    //                                     $("#city").val("select");
    //                                     $("#measurement").val("");
    //                                     $("#address").val("");

    //                                     $("#nm").text("");
    //                                     $("#ph").text("");
    //                                     $("#em").text("");

    //                                     $("#pnnn").text("");
    //                                     $("#pbnn").text("");
    //                                     $("#pqnn").text("");

    //                                     $("#cus").hide();
    //                                     $("#cuss").hide();
    //                                     $("tb1").hide();
    //                                     $("#tb").remove();
    //                                     $.alert('Order completed successfully');
    //                                 }
    //                         },
    //                         error:function (error) {
    //                                     $("#cus").hide();
    //                                     $("#name").val("");
    //                                     $("#phone").val("");
    //                                     $("#prname").val("");
    //                                     $("#pbrand").val("");
    //                                     $("#quantity").val("");
    //                                     $("#notes").val("");
    //                                     $("#email").val("");
                                        
    //                                     $("#category").val("select");
    //                                     $("#mtype").val("select");
    //                                     $("#city").val("select");
    //                                     $("#measurement").val("");
    //                                     $("#address").val("");;
                                    
    //                                     $("#nm").text("");
    //                                     $("#ph").text("");
    //                                     $("#em").text("");
    //                                     $("#pnnn").text("");
    //                                     $("#pbnn").text("");
    //                                     $("#pqnn").text("");
    //                                     $("tb1").hide();
    //                                     $("#tb").remove();
    //                                     $.alert('Error !! please fill the all sections');
                                   
    //                             }
    //                         });
    //                         }else{
    //                             $("tb1").hide();
    //                                     $("#tb").remove();
    //                             $.alert('Please add products on product list');
    //                         }

    //                         }
    //                     },
    //                     cancel: function () {

    //                         $("#cus").hide();
    //                         $("#name").val("");
    //                         $("#phone").val("");
    //                         $("#prname").val("");
    //                         $("#pbrand").val("");
    //                         $("#quantity").val("");
    //                         $("#notes").val("");
    //                         $("#email").val("");
                            
    //                         $("#category").val("select");
    //                         $("#mtype").val("select");
    //                         $("#city").val("select");
    //                         $("#measurement").val("");
    //                         $("#address").val("");
    //                         $("#nm").text("");
    //                         $("#ph").text("");
    //                         $("#em").text("");
    //                         $("#pnnn").text("");
    //                                     $("#pbnn").text("");
    //                                     $("#pqnn").text("");
                            
    //                         $("tb1").hide();
    //                                     $("#tb").remove();
    //                         $.alert('Canceled!');
    //                     },
                        
    //                 }
    // });





               
                
            
  
	// });


    

    
        </script>

<script>
$(document).ready(function() {
	
});
</script>
        
</body>

</html>






