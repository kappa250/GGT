<nav class="white">
	<div class="">
		<div class="nav-wrapper">
			<a href="{{ route('home') }}" class="brand-logo black-text" style="margin-left: 10px;">GGT</a>
			@if(Auth::guest())
			<ul id="nav-mobile" class="right hide-on-med-and-down" style="margin-left: -10px;">
				<li><a href="{{ route('login') }}" class="black-text">Login</a></li>
			</ul>
			@else
			<ul id="nav-mobile" class="right hide-on-med-and-down">
				<li><a class='dropdown-button black-text' href='#' data-activates='account'>{{ Auth::user()->last_name }} {{ Auth::user()->first_name }}</a></li>

				<!-- Account -->
				<ul id='account' class='dropdown-content' style="margin-top: 64px">
					<li><a href="{{ URL('profile') }}">Profile</a></li>
					<li><a href="{{ URL('') }}">Settings</a></li>
					<li class="divider"></li>
					<li>
						<a href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
							Logout
						</a>
					</li>
					<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
					    {{ csrf_field() }}
					</form>				
				</ul>
			@endif
		</div>
	</div>
</nav>