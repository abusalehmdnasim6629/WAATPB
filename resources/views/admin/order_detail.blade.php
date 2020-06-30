@extends('admin.dashboard')
@section('admin_content')

@include('sweetalert::alert')
@include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
     <div class="row-fluid sortable">	
				<div class="box span6">
					
					
				</div><!--/span-->

                <div class="box span6">
					<div class="box-header">
						<h2><i class="halflings-icon align-justify"></i><span class="break"></span>Shipping details</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table class="table table-condensed">
							  <thead>
								  <tr>
								      <th>Order Id</th>
								      <th>Category</th>
									  <th>Name</th>
									  <th>City</th>
									  <th>Address</th>
									  <th>Mobile number</th>
									                                        
								  </tr>
							  </thead>   
							  <tbody>
                                
                                  <tr>
								<td class="center">{{ $result->order_id }} </td>
								<td class="center">{{ $result->category }} </td>
                                <td class="center">{{ $result->name }}</td>
                                <td class="center">{{ $result->city }}</td>
                                <td class="center">{{ $result->address }}</td>  
                                <td class="center">{{ $result->phone }}</td>                                  
								</tr>
                               
								
								                                 
							  </tbody>
						 </table>  
						 
					</div>
				</div><!--/span-->

                <div class="row-fluid sortable">	
				<div class="box span12">
					<div class="box-header">
						<h2><i class="halflings-icon align-justify"></i><span class="break"></span>Order details</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table class="table table-bordered table-striped table-condensed">
							  <thead>
								  <tr>
									  
									  <th>Product name</th>
									  <th>Measurement</th>
									                                         
								  </tr>
							  </thead>   
							  <tbody>
                             
                                <tr>
                                
                                <td class="center">{{ $result->type }} </td>  
                                <td class="center">{{ $result->measurement }} </td> 
                                                            
								</tr>
                               
                             
								                         
							  </tbody>
						 </table>  
						 
					</div>
				</div><!--/span-->
			</div><!--/row-->

                @endsection
