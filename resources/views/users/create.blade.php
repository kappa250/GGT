@extends('partials._sidenav')
@extends('main')
@section('title', 'Add new Teacher')
@section('content_admin')
<!-- Bimo -->
<div class="container">
    <div class="row">
		<div class="row">
			<h4>Add new teacher</h4>
			<hr>
		</div>
        <div class="col l10 m12 s12">
            <form method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}

                <div class="row">
                    <div class="input-field col s12">
                        <input id="email" type="email" class="validate" name="email">
                        <label for="email">Email</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="photo" type="file" class="validate" name="photo">
                        <label for="photo">Your Picture</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <input id="last_name" type="text" class="validate" name="last_name">
                        <label for="last_name">LastName</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="first_name" type="text" class="validate" name="first_name">
                        <label for="first_name">FirstName</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="phone_number" type="text" class="validate" name="phone_number">
                        <label for="phone_number">Phone number</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <input id="password" type="password" class="validate" name="password">
                        <label for="password">Password</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="confirm_password" type="password" class="validate" name="confirm_password">
                        <label for="confirm_password">Confirm Password</label>
                    </div>
                </div> 

                <div class="row">
                    <input type="submit" value="Register" class="btn waves-effect light-effect blue col l10 offset-l1" style="margin-top: 25px;">
                </div>
            </form>
        </div>
    </div>
</div>

@endsection