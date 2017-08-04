@extends('partials._sidenav')
@extends('main')
@section('title', 'Teacher Info')
@section('content_admin')

<div class="col l10 offset-l1" style="margin-top: 20px;">
		<div class="row">
			<h4>User's Info</h4>
			<hr>
		</div>
	<div class="col l6" style="margin-top: 20px;">
		<div class="row">
			<p class="light"> <strong>First Name : </strong> Oussama Seif Eddine</p>
		</div>
		<div class="row">
			<p class="light"> <strong>Last Name : </strong> Djilah</p>
		</div>
		<div class="row">
			<p class="light"> <strong>Email : </strong> exabit@gmail.com</p>
		</div>
		<div class="row">
			<p class="light"> <strong>Phone number : </strong> +213 95968388</p>
		</div>
		<div class="row">
			<p class="light"> <strong>Formation : </strong> Infography, Security, Web developpement </p>
		</div>
	</div>
	<div class="col l5">
		<div class="card-panel center">
			<div class="row">
				<p class="light"> <strong>Created At : </strong> 15:00:30 at 01/08/2017</p>
				<p class="light"> <strong>Updated At : </strong> 15:00:30 at 01/08/2017</p>
			</div>
			<div class="row">
				<a href="#" class="waves-effect waves-light btn orange">Update</a>
				<a href="#" class="waves-effect waves-light btn red">Delete</a>
			</div>
		</div>
	</div>
</div>

@endsection