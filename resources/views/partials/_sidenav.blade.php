<div class="col l12 m12">
	<div class="row">
		<div class="col l2 m2">
			<div class="collection" style="margin-top: 00px; margin-left: -12px; height: 585px; background-color: white;">
				<h5 style="margin-left: 10px; margin-top: 30px;">Profile</h5>
				<a href="{{ URL('profile') }}" class="collection-item light blue-grey-text">Information <i class="material-icons" style="float: right;">info</i></a>
				<h5 style="margin-left: 10px; margin-top: 30px;">Manage</h5>
				<a href="{{ URL('index') }}" class="collection-item light blue-grey-text">Manage Teachers <i class="material-icons" style="float: right;">settings</i></a>
				<!-- <a href="{{ URL('show') }}" class="collection-item light blue-grey-text">Update Info <i class="material-icons" style="float: right;">mode_edit</i></a>
				<a href="#!" class="collection-item light blue-grey-text">Remove teacher <i class="material-icons" style="float: right;">delete</i></a> -->
				<a href="#!" class="collection-item light blue-grey-text">Manage Students<i class="material-icons" style="float: right;">settings</i></a>
				<a href="#!" class="collection-item light blue-grey-text">Manage Formations<i class="material-icons" style="float: right;">settings</i></a>
				<a href="#!" class="collection-item light blue-grey-text">Manage Diplomats<i class="material-icons" style="float: right;">settings</i></a>
				<a href="#!" class="collection-item light blue-grey-text">Manage Roles<i class="material-icons" style="float: right;">settings</i></a>
				<a href="#!" class="collection-item light blue-grey-text">Manage Permissions<i class="material-icons" style="float: right;">settings</i></a>
				<a href="#!" class="collection-item light blue-grey-text">About page<i class="material-icons" style="float: right;">settings</i></a>
				<!-- <h5 style="margin-left: 10px; margin-top: 30px;">GGT's Info</h5>
				<a href="#!" class="collection-item light blue-grey-text">Update GGT's Info</a> -->
			</div>
		</div>
		<div class="col l10 m10 s10">
			@yield('content_admin')
		</div>
	</div>
</div>