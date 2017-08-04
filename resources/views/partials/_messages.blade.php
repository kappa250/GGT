@if(Session::has('sucess'))
<div class="row">
	<div class="col l8 s12 m5 offset-l2 center-align" style="" >
		<div class="card" style="background-color:#DFF0D8;color:#3C763D;height:auto;">
			<h4>Success !</h4>
			<span class="" style="margin-top: 50px;">{{ Session::get('sucess') }}</span>
		</div>
	</div>
</div>
@endif

@if(count($errors) > 0)
<ul>		
	<div class="row">
		<div class="col l8 s12 m5 offset-l2 center-align" style="" >
			<div class="card" style="background-color:#F2DEDE;color:#A94442;height:auto;">
				<h4>Error !</h4>
				@foreach ($errors->all() as $error)
				<span class="valign" style=""><li>{{ $error }}</li></span>
				@endforeach
			</div>
		</div>
	</div>	
</ul>
@endif