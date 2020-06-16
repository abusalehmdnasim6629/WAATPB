@extends('admin.dashboard')
@section('admin_content')

@include('sweetalert::alert')
@include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
<ul class="breadcrumb">
<li>
		<i class="icon-home"></i>
		<a href="{{URL::to('/all-mango')}}">All mango</a>
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
				<form action="{{url('/update-mango',$result->id)}}" method="POST" enctype="multipart/form-data">
					@csrf
					        <div class="form-group">
                                <h3>Mango type</h3>
                                <input type="text" class="form-control" name="mtype" value="{{ $result->name }}" required="">
                            </div>

                            <div class="form-group">
                                <h3>price</h3>
                                <input type="text" class="form-control" name="mprice" value="{{ $result->price }}" required="">
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