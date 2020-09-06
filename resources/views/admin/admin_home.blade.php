@extends('admin.dashboard')
@section('admin_content')
<style>
    .to{
		text-decoration: none;
	}

	.card{
		box-shadow: 0 0.46875rem 2.1875rem rgba(4, 9, 20, 0.03), 0 0.9375rem 1.40625rem rgba(4, 9, 20, 0.03), 0 0.25rem 0.53125rem rgba(4, 9, 20, 0.05), 0 0.125rem 0.1875rem rgba(4, 9, 20, 0.03);
	}

</style>
<div class="app-page-title">
	<div class="page-title-wrapper">
		<div class="page-title-heading">
			<div class="page-title-icon">
				<i class="fa fa-home">
				</i>
			</div>
			<div>Dashboard
				<div class="page-title-subheading">
				WAATPB , At a glance 
				</div>
			</div>
		</div>
		<div class="page-title-actions">
			
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-6 col-xl-4">
	  <a href="{{URL::to('/all-member')}}" class="to" >
		<div class="card mb-3 widget-content bg-midnight-bloom">
			<div class="widget-content-wrapper text-white">
			
				<div class="widget-content-left">
					<div class="widget-heading">Total Members</div>
				</div>
				<div class="widget-content-right">
					<div class="widget-numbers text-white"><span>{{DB::table('tbl_member')->count()}}</span></div>
				</div>
			</div>
		</div>
	  </a>
	</div>
	<div class="col-md-6 col-xl-4">
	 <a href="{{URL::to('/all-job')}}" class="to" >
		<div class="card mb-3 widget-content bg-arielle-smile">
			<div class="widget-content-wrapper text-white">
				<div class="widget-content-left">
					<div class="widget-heading">Total Jobs</div>
				</div>
				<div class="widget-content-right">
					<div class="widget-numbers text-white"><span>{{DB::table('tbl_job')->count()}}</span></div>
				</div>
			</div>
		</div>
	  </a>
	</div>
	<div class="col-md-6 col-xl-4">
	   <a href="{{URL::to('/all-event')}}" class="to" >
		<div class="card mb-3 widget-content bg-grow-early">
			<div class="widget-content-wrapper text-white">
				<div class="widget-content-left">
					<div class="widget-heading">Total Events</div>
				</div>
				<div class="widget-content-right">
					<div class="widget-numbers text-white"><span>{{DB::table('tbl_event')->count()}}</span></div>
				</div>
			</div>
		</div>
	   </a>
	</div>
	<div class="col-md-6 col-xl-4">
	  <a href="{{URL::to('/all-member-request')}}" class="to" >
		<div class="card mb-3 widget-content bg-grow-early">
			<div class="widget-content-wrapper text-white">
				<div class="widget-content-left">
					<div class="widget-heading">Member requests</div>
				</div>
				<div class="widget-content-right">
					<div class="widget-numbers text-white"><span>{{DB::table('tbl_member')->where('status',0)->count()}}</span></div>
				</div>
			</div>
		</div>
	  </a>
	</div>
	<div class="col-md-6 col-xl-4">
	 <a href="{{URL::to('/all-image')}}" class="to" >
		<div class="card mb-3 widget-content bg-midnight-bloom">
			<div class="widget-content-wrapper text-white">
				<div class="widget-content-left">
					<div class="widget-heading">Total Images</div>
				</div>
				<div class="widget-content-right">
					<div class="widget-numbers text-white"><span>{{DB::table('tbl_gallary')->count()}}</span></div>
				</div>
			</div>
		</div>
	  </a>
	</div>
	<div class="col-md-6 col-xl-4">
	  <a href="{{URL::to('/all-service')}}" class="to" >
		<div class="card mb-3 widget-content bg-arielle-smile">
			<div class="widget-content-wrapper text-white">
				<div class="widget-content-left">
					<div class="widget-heading">Total Services</div>
				</div>
				<div class="widget-content-right">
					<div class="widget-numbers text-white"><span>{{DB::table('tbl_service')->count()}}</span></div>
				</div>
			</div>
		</div>
	  </a>
	</div>
</div>
@endsection