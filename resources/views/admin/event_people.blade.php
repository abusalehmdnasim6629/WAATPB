@extends('admin.dashboard')
@section('admin_content')
@include('sweetalert::alert')
@include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
<ul class="breadcrumb">
	<li>
		<i class="icon-home"></i>
		<a href="{{url('/all-event')}}">Event</a>
		<i class="fa fa-angle-right"></i>
	</li>
	<li><a href="#">All people in this event</a></li>
</ul>

<div class="row-fluid sortable">
	<div class="box span12">
		{{-- <div class="box-header" data-original-title>
			<h2><i class="halflings-icon user"></i><span class="break"></span>Members</h2>
			<div class="box-icon">
				<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
				<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
				<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
			</div>
		</div> --}}

		<div class="box-content">
			<table class="table table-striped table-bordered bootstrap-datatable datatable">
				<thead>
					<tr>
						<th class="text-center">Member id</th>
						<th class="text-center">member name</th>
						<th class="text-center">Email</th>
						<th class="text-center">Action</th>

					</tr>
				</thead>
               @if( $countPeople > 0 )
					@foreach($people as $ct)
					<tbody>
						<tr>
							<td class="text-center">{{ $ct->member_id}}</td>
							<td class="text-center">{{ $ct->member_name}}</td>
							<td class="text-center">{{ $ct->email_address}}</td>
							<td class="text-center">
								<div class="btn btn-group">  
									<a class="btn btn-info btn-sm" href="{{URL::to('/member-info/'.$ct->member_id)}}">
										<i class="fa fa-eye white eye"></i>
									</a>
									<a class="btn btn-danger btn-sm" href="{{URL::to('/delete/'.$ct->member_id)}}">
										<i class="fa fa-trash white trash"></i>
									</a>
								</div>
							</td>
						</tr>
					</tbody>
					@endforeach
				@else
				<td class="text-center text-danger" colspan="4"><b> No Member here </b></td>
				@endif

			</table>
		</div>
	</div>
	<!--/span-->

</div>
<!--/row-->
@endsection