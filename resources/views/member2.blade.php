@extends('layouts.webview')

@section('content')


<style>
@import "https://fonts.googleapis.com/css?family=Roboto"
*,
*::before,
*::after {
  box-sizing: border-box;
}

body {
  font-family: Roboto;
  font-size: 16px;
  color: #212121;
}

/* .centred-form {
  width: 250px;
  margin: 0 auto;
} */

.field {
  position: relative;
  min-height: 65px;
  padding: 16px 0 8px;
  margin-top: 10px;
}
.field-label {
  top: 0;
  margin: -45px 0;
  display: block;
  color: #AAA;
  line-height: 62px;
  height: 24px;
  font-size: 20px;
  font-weight: 400;
  transition: font-size .15s, line-height .15s;
}
.field-input,
.field-textarea {
  position: relative;
  display: block;
  width: 100%;
  padding: 8px 0;
  line-height: 16px;
  font-size: 20px;
  background: transparent;
  border: none;
  -webkit-appearance: none;
  outline: none;
}
.field-input {
  height: 32px;
}
.field-label::after,
.field::before {
  content: '';
  height: 2px;
  width: 100%;
  position: absolute;
  bottom: 6px;
  left: 0;
  background-color: #DDD;
}
.field-label::after {
  bottom: 6px;
  background-color: #2191ea;
  transform: scaleX(0);
  transition: transform 0.3s;
}


.field-input:invalid:focus ~ .field-label,
.field-textarea:invalid:focus ~ .field-label,
.field-input:valid ~ .field-label,
.field-textarea:valid ~ .field-label {
  font-size: 12px;
  line-height: 14px;
}
.field-input:focus ~ .field-label,
.field-textarea:focus ~ .field-label {
  color: #2191ea;
}
.field-input:focus ~ .field-label::after,
.field-textarea:focus ~ .field-label::after {
  transform: scaleX(1);
}
</style>
<!-- Start breadcrumb
    ============================================= -->
<link href='https://fonts.googleapis.com/css?family=Alegreya SC' rel='stylesheet'>

<div class="site-breadcrumb-title" style="height:250px;">
<!-- style="background: url(assets/img/breadcrumb/breadcrumb.png)" -->
	<h2 style="margin-top:35px;font-family: 'Alegreya SC'; font-size:50px;">Be A Member</h2>
	<div class="main-breadcrumb">
		<div class="container">
			
		</div>
	</div>
</div>
<!--  End breadcrumb -->


@if ($errors->any())
<div class="alert alert-danger">
	<ul>
		@foreach ($errors->all() as $error)
		<li>{{ $error }}</li>
		@endforeach
	</ul>
</div>
@endif
<div class="container" style="margin-top: 70px;margin-bottom: 70px;">
	

	<form action="{{url('/save-member')}}" method="post" enctype="multipart/form-data">
		{{csrf_field()}}
	<div class="row">
	   <div class="col-sm-12 col-md-4 col-lg-4">	
		<div class="field" >
			<input type="text" id="first-name" name="name" class="field-input" required>
			<label for="first-name" class="field-label">Name</label>
		</div>
		</div>

		<div class="col-sm-12 col-md-4 col-lg-4">
		<div class="field">
			<input type="email" id="last-name" name="email" class="field-input" required>
			<label for="last-name" class="field-label">Email</label>
		</div>
		</div>

		<div class="col-sm-12 col-md-4 col-lg-4">
		<div class="field">
			<input type="text" id="last-name" name="contact" class="field-input" required>
			<label for="last-name" class="field-label">Phone</label>
		</div>		
		</div>


	</div>	

	<div class="row">
	   <div class="col-sm-12 col-md-4 col-lg-4">	
		<div class="field">
			<input type="text" id="first-name" name="nid" class="field-input" required>
			<label for="first-name" class="field-label">NID</label>
		</div>
		</div>

		<div class="col-sm-12 col-md-4 col-lg-4">
		<div class="field">
			<input type="text" id="last-name" name="po" class="field-input" required>
			<label for="last-name" class="field-label">Present organization</label>
		</div>
		</div>

		<div class="col-sm-12 col-md-4 col-lg-4">
		<div class="field">
			<input type="text" id="" name="designation" class="field-input" required>
			<label for="last-name" class="field-label">Designation</label>
		</div>		
		</div>


	</div>	

	<div class="row">
	   <div class="col-sm-12 col-md-4 col-lg-4">	
		<div class="field">
			<input type="text" id="first-name" name="department" class="field-input" required>
			<label for="first-name" class="field-label">Department</label>
		</div>
		</div>

		<div class="col-sm-12 col-md-4 col-lg-4">
		<div class="field">
			
			<select id="txtBloodGroup" class="field-input" name="b_g">
			                        <option >Select</option>
									<option value="A+">A+</option>
									<option value="A-">A-</option>
									<option value="AB+">AB+</option>
									<option value="AB-">AB-</option>
									<option value="B+">B+</option>
									<option value="B-">B-</option>
									<option value="O+">O+</option>
									<option value="O-">O-</option>
								</select>
			<label for="last-name" class="field-label">Blood group</label>
		</div>
		</div>

		<div class="col-sm-12 col-md-4 col-lg-4">
		<div class="field">
			<input type="text" id="last-name" name="p_a" class="field-input" required>
			<label for="last-name" class="field-label">Present Address</label>
		</div>		
		</div>


	</div>	

	<div class="row">
	   <div class="col-sm-12 col-md-4 col-lg-4">	
		<div class="field">
			<input type="password" id="first-name" name="pass" class="field-input" required>
			<label for="first-name" class="field-label">Password</label>
		</div>
		</div>
		<div class="col-sm-12 col-md-4 col-lg-4">
		<div class="field">
			<input type="password" id="last-name" name="c_pass" class="field-input" required>
			<label for="last-name" class="field-label">Confirm Password</label>
		</div>		
		</div>


	</div>	

	            <div class="row">
						<div class="col-sm-offset-2 col-sm-8" style="padding-top:20px;">
							<button type="submit" id="btnSave" class="btn btn-primary"
								style="height:40px;font-size:2.0rem;" >Submit</button>
							<button type="reset" id="btnClear" class="btn btn-info"
							style="height:40px;font-size:2.0rem;">Clear</button>
						</div>
					</div>
	</form>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script >

    $(document).ready(function(){

		$("#txtPassword").keyup(function(){

              var pass = $('#txtPassword').val();
			 
			  if(pass.length < 8 && pass.search(^[0-9]) == -1)
			  {
				console.log(pass);
				 $('#demo').html('short');
				 return "8";
			  }
			  
               
		})


	});   



</script>
@endsection