@extends('main')

@section('content')

<div class="container">
    <div class="row">
        <div class="col l10 m12 s12 offset-l1">
            <div class="card-panel" style="margin-top: 25px">
                <div class="card-content">
                    <h4>Register</h4>
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

            <a href="{{ route('login') }}" class="center-align">
                Back to login
            </a>

        </div>
    </div>
</div>

<!-- <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->
@endsection
