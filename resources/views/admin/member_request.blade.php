@extends('admin.dashboard')
@section('admin_content')

@include('sweetalert::alert')
@include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
<ul class="breadcrumb">
	
	<li>
	<div class="text-right">
				<form action="{{url('/search-member')}}" method="POST" enctype="multipart/form-data">
				          	@csrf
				
						
							
							<div class="input-group">
                        
                                <input type="text" class="form-control" style="height:40px;"placeholder="Search member" name="email">
                                <div class="input-group-append">
                                <button type="submit" class="btn btn-primary " id="search">
                                    <i class="fa fa-search"></i>
                                    
                                </button>
        
                            </div>
                            </div>
						
				   </form>
	</div>		   
	</li>
</ul>
        

			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>Member requests</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>Member id</th>
								  <th>member name</th>
								  <th>Image</th>
								  <th>Email</th>
								  <th>Action</th>

							  </tr>
						  </thead>   

						@foreach($result as $ct)
						  <tbody>
							<tr>
								<td>{{ $ct->member_id}}</td>
								<td class="center">{{ $ct->member_name}}</td>
								<td><img src="{{URL::to($ct->image)}}" alt="member image" style="height:70px; width:70px">
								<td class="center">{{ $ct->email_address}}</td>
								
                                
								<td class="center">
									<a class="btn btn-info btn-sm" href="{{URL::to('/requested-member-info/'.$ct->member_id)}}">
										<i class="fa fa-eye white eye"></i>
									</a>
									
								</td>
							</tr>
							
						  </tbody>

						@endforeach

					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
@endsection