@extends('admin.dashboard')
@section('admin_content')

@include('sweetalert::alert')
@include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])

<ul class="breadcrumb">
<li>
		<i class="icon-home"></i>
		<a href="{{URL::to('/admin')}}" class="btn btn-link">Home</a>
		<i class="icon-angle-right"></i>
	</li>
</ul>
<div class="container">
<div class="row">
	
		
			<h2><i class="col-sm halflings-icon user"></i><span class="break"></span>Supplier</h2>
			

		<div class="col-sm-12">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>Id</th>
						<th>Company</th>
						<th>COO</th>
						<th>Item</th>
						<th>Size</th>
						<th>Retail Price</th>
						<th>Selling Price</th>
						<th>Remark</th>
						<th>Date</th>
						<th class="text-center">Action</th>
						<th class="text-center">Action</th>

					</tr>
				</thead>

				@foreach($result as $ct)
				<tbody>
					<tr>
						<td>{{ $ct->id}}</td>
						<td class="center">{{ $ct->company}}</td>
						<td class="center">{{ $ct->coo}}</td>
						<td class="center">{{ $ct->item}}</td>
						<td class="center">{{ $ct->size}}</td>
						<td class="center">{{ $ct->retail_price}}</td>
						<td class="center">{{ $ct->selling_price}}</td>
						<td class="center">{{ $ct->remark}}</td>
						<td class="center">{{ $ct->date}}</td>
						<td class="text-center">
							<div class="btn btn-group">  
                                <a class="btn btn-info btn-sm" href="{{URL::to('/edit-supplier/'.$ct->id)}}">
									<i class="fa fa-edit white edit"></i>
								</a>
								<a class="btn btn-danger btn-sm" href="{{URL::to('/delete-supplier/'.$ct->id)}}">
									<i class="fa fa-trash white trash"></i>
								</a>
							</div>
						</td>
						<td>

                         <Form>



						 <input type="checkbox" name="check[]" >


                        </Form>

                    </td>
					</tr>

				</tbody>

				@endforeach

			</table>
		</div>
	</div>
	<!--/span-->


</div>
<!--/row-->
@endsection