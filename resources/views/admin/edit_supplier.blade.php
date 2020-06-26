@extends('admin.dashboard')
@section('admin_content')

@include('sweetalert::alert')
@include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
<ul class="breadcrumb">
<li>
		<i class="icon-home"></i>
		<a href="{{URL::to('/all-supplier')}}">All supplier</a>
		<i class="fa fa-angle-right"></i>
	</li>
	<li><a class="text-secondary" href="#">Edit</a></li>
</ul>
@if ($errors->any())
			<div class="alert alert-danger">
						<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
						</ul>
			</div>
@endif
	<div class="box span12">
		<div class="box-content">
		   
			<div class="col-md-8 offset-md-2">
				<form action="{{url('/update-supplier',$result->id)}}" method="POST" enctype="multipart/form-data">
					@csrf
					        
                            <div class="form-group">
                                <h3>Company</h3>
                                <input type="text" class="form-control" name="company" value="{{ $result->company }}"  required="">
                            </div>
                            <div class="form-group">
                                <h3>COO</h3>
                                <input type="text" class="form-control" name="coo" value="{{ $result->coo }}" required="">
                            </div>
                            <div class="form-group">
                                <h3>Item</h3>
                                <input type="text" class="form-control" name="item" value="{{ $result->item }}" required="">
                            </div><div class="form-group">
                                <h3>Size</h3>
                                <input type="text" class="form-control" name="size" value="{{ $result->size }}" required="">
                            </div><div class="form-group">
                                <h3>Retail Price</h3>
                                <input type="text" class="form-control" name="rprice" value="{{ $result->retail_price }}" required="">
                            </div><div class="form-group">
                                <h3>Selling Price</h3>
                                <input type="text" class="form-control" name="sprice" value="{{ $result->selling_price }}" required="">
                            </div>
                            <div class="form-group">
                                <h3>Remark</h3>
                                <textarea name="remark" id="remark" class="form-control"  cols="30" rows="5">{{ $result->remark }}</textarea>
                            </div>
						
    	                    <br>
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Update</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
				</form>
			</div>
		</div>
	</div>
	<!--/span-->

</div>


@endsection