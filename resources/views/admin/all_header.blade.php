@extends('admin.dashboard')
@section('admin_content')

<ul class="breadcrumb">
	<li>
		<i class="icon-home"></i>
		<a href="index.html">Home</a>
		<i class="icon-angle-right"></i>
	</li>
	<li><a href="#">Tables</a></li>
</ul>

<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon user"></i><span class="break"></span>Members</h2>
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
						<th>Header id</th>
						<th>Header title</th>
						<th>Header description</th>
						<th>Action</th>
					</tr>
				</thead>

				@foreach($result as $ct)
				<tbody>
					<tr>
						<td>{{ $ct->header_id}}</td>
						<td class="center">{{ $ct->header_title}}</td>
						<td class="center">{{ $ct->header_description}}</td>


						<td class="center">
							<div class="btn btn-group">
								<a class="btn btn-info btn-sm" href="{{route('header.edit',$ct->header_id)}}">
									<i class="fa fa-edit white edit"></i>
								</a>
								{{-- <a class="btn btn-danger btn-sm" href="{{URL::to('/delete-header/'.$ct->header_id)}}">
								<i class="fa fa-trash white trash"></i>
								</a> --}}
							</div>
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