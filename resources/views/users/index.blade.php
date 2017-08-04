@extends('partials._sidenav')
@extends('main')
@section('title', 'Teacher Info')
@section('content_admin')

<div class="col l10 offset-l1" style="margin-top: 20px;">
	<div class="row">
		<h4>Teachers list</h4>
		<hr>
	</div>
	<div class="row">
		<a href="{{ URL('create') }}" class="waves-effect waves-light btn blue" style="float: right;">Add new Teacher<i class="material-icons left">add_circle</i></a>
	</div>
	<table class="bordered">
		<thead>
			<tr>
				<th>FirstName & LastName</th>
				<th>E-mail Adress</th>
				<th>Consult Teacher</th>
				<th>Update teacher</th>
				<th>Remove Teacher</th>
			</tr>
		</thead>

		<tbody>
			<tr>
				<td>Alvin</td>
				<td>Eclair</td>
				<td>
					<a href="{{ URL('show') }}" class="waves-effect waves-light btn">Consult<i class="material-icons left">visibility</i></a>
				</td>
				<td>
					<a href="#" class="waves-effect waves-light btn orange">Update<i class="material-icons left">mode_edit</i></a>
				</td>
				<td>
					<a href="#" class="waves-effect waves-light btn red">Remove<i class="material-icons left">delete</i></a>
				</td>
			</tr>
			<tr>
				<td>Alvin</td>
				<td>Eclair</td>
				<td>
					<a class="waves-effect waves-light btn">Consult<i class="material-icons left">visibility</i></a>
				</td>
				<td>
					<a class="waves-effect waves-light btn orange">Update<i class="material-icons left">mode_edit</i></a>
				</td>
				<td>
					<a class="waves-effect waves-light btn red">Remove<i class="material-icons left">delete</i></a>
				</td>
			</tr>
			<tr>
				<td>Alvin</td>
				<td>Eclair</td>
				<td>
					<a class="waves-effect waves-light btn">Consult<i class="material-icons left">visibility</i></a>
				</td>
				<td>
					<a class="waves-effect waves-light btn orange">Update<i class="material-icons left">mode_edit</i></a>
				</td>
				<td>
					<a class="waves-effect waves-light btn red">Remove<i class="material-icons left">delete</i></a>
				</td>
			</tr>
			<tr>
				<td>Alvin</td>
				<td>Eclair</td>
				<td>
					<a class="waves-effect waves-light btn">Consult<i class="material-icons left">visibility</i></a>
				</td>
				<td>
					<a class="waves-effect waves-light btn orange">Update<i class="material-icons left">mode_edit</i></a>
				</td>
				<td>
					<a class="waves-effect waves-light btn red">Remove<i class="material-icons left">delete</i></a>
				</td>
			</tr>
			<tr>
				<td>Alvin</td>
				<td>Eclair</td>
				<td>
					<a class="waves-effect waves-light btn">Consult<i class="material-icons left">visibility</i></a>
				</td>
				<td>
					<a class="waves-effect waves-light btn orange">Update<i class="material-icons left">mode_edit</i></a>
				</td>
				<td>
					<a class="waves-effect waves-light btn red">Remove<i class="material-icons left">delete</i></a>
				</td>
			</tr>
		</tbody>
	</table>

</div>

@endsection