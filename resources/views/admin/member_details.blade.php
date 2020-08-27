@extends('admin.dashboard')
@section('admin_content')
<style>
   .head{
      padding:20px;
      box-shadow:0 10px 16px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
      color:white;
      border-radius:5px;
      background-color:#3d82f2;
      
   }
   .head h3{
      font-size:35px;
   }
   
  .im{
     height:200px;
     width:200px;
     border-radius:5px;
  }
  .shadow{
   box-shadow:0 10px 16px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
  }
  .detail{
     padding:20px;
  }
  .action{
     margin-top:10px;
  }
</style>

<div class="container">
    <div class="event-all text-center mt-30  head">
				<h3>Member Details</h3>
	 </div>
            <br><br>
    <div class="row">
      <div class="col-md-10 mx-auto"> 
         <div class="row">    
            <div class="col-md-4 mx-auto mb-5 text-center">
                 <img src="{{URL::to($result->image)}}"  class="img-responsive im shadow " alt="">

                 <div class="col-md text-center action">
                       <a class="btn btn-info  pd-2" href="{{URL::to('/all-member')}}">
                          <i class="fa fa-arrow-left" aria-hidden="true"> Back</i>
                       </a>
                </div>  
            </div>
            <div class="col-md-8 mx-auto shadow detail">
                  <div class="table-responsive">
                        <table class="table table-striped">
                        <tr>
                        <td><b> Member id</b></td>
                     
                        <td> {{$result->code}}</td>
                        </tr>
                        <tr>
                        <td><b> Name</b></td>
                     
                        <td> {{$result->member_name}}</td>
                        </tr>
                        <tr>
                        <td><b>Email</b></td>
                     
                        <td> {{$result->email_address}}</td>
                        </tr>
                        <tr>
                        <td><b>National ID</b></td>
                  
                        <td> {{$result->nid}}</td>
                        </tr>
                        <tr>
                        <td><b>Present Organization</b></td>
                        
                        <td> {{$result->present_organization}}</td>
                        </tr>
                        <td><b>Present Address</b></td>
                        
                        <td> {{$result->present_address}}</td>
                        </tr>
                        <td><b>Department</b></td>
                        
                        <td> {{$result->department}}</td>
                        </tr>
                        <td><b>Blood group</b></td>
                     
                        <td>{{$result->blood_group}}</td>
                        </tr>
                        <td><b>Skills</b></td>
                        
                        <td> {{$result->member_skill}}</td>
                        </tr>
                        <td><b>Hobby</b></td>
                        
                        <td>{{$result->member_hobby}}</td>
                        </tr>
                        
                     
                     </table>
                  
                  </div>
            </div>
         </div>
           
       </div>
    </div>


</div>
@endsection