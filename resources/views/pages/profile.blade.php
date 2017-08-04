@extends('partials._sidenav')
@extends('main')
@section('title', 'Teacher Info')
@section('content_admin')

<div class="row" style="margin-top: 40px;">
	<div class="col l10 offset-l1">
		<h4>Profile Settings</h4>
	</div>	
</div>
<div class="row" style="margin-top: 90px;">
    <form method="POST" action="{{ route('register') }}">
        {{ csrf_field() }}

    	<div class="col l5 m5 s5 offset-l1">
            <div class="row">
                <div class="input-field col s6">
                    <input id="last_name" type="text" class="validate" name="last_name" value="{{ Auth::user()->last_name }}">
                    <label for="last_name">LastName</label>
                </div>
                <div class="input-field col s6">
                    <input id="first_name" type="text" class="validate" name="first_name" value="{{ Auth::user()->first_name }}">
                    <label for="first_name">FirstName</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input id="email" type="email" class="validate" name="email" value="{{ Auth::user()->email }}">
                    <label for="email">Email</label>
                </div>
            </div>
            <blockquote style="margin-left: 10px;">
            	If you want to change your password ! Please click on the button and complete the form that shows up then save !
            </blockquote>
           	<div class="row">
           		<a onclick="HidenShow();" class="btn blue waves-effect light-effect" style="margin-left: 10px;">Change password?</a>
           		<input type="submit" value="save updates" class="btn waves-effect light-effect" style="float: right; margin-right: 10px;">
           	</div>
     	</div>
       	<div class="col l5 m5 s5" style="display:none" id="password_section">
            <div class="row">
                <div class="input-field col s12">
                    <input id="old_password" type="password" class="validate" name="old_password">
                    <label for="old_password">Old Password</label>
                </div>
            </div> 
            <div class="row">
            	<div class="input-field col s6">
                    <input id="new_password" type="password" class="validate" name="new_password">
                    <label for="new_password">New Password</label>
                </div>
                <div class="input-field col s6">
                    <input id="confirm_new_password" type="password" class="validate" name="confirm_new_password">
                    <label for="confirm_new_password">Confirm New Password</label>
                </div>
            </div>            
        </div>

        </form>
    </div>
</div>

<script type="text/javascript">
	function HidenShow(){document.getElementById('password_section').style.display = "block";}
</script>

@endsection
