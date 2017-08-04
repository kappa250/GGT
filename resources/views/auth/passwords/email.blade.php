@extends('main')
@section('title', 'Password Reset')
@section('content')
<div class="container">
    <div class="row" style="margin-top: 50px;">
        <div class="col l8 offset-l2 m10 offset-m1 s10 offset-s1">
            <div class="card-panel">
                <h4>Reset Password</h4>
                @if (session('status'))
                    <span> <!--  -->
                        <strong>{{ session('status') }}</strong>
                    </span>
                @endif

                <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                    {{ csrf_field() }}

                    <div class="row" style="margin-top: 30px;">
                        <div class="input-field col s12 m8 l8 offset-l2 offset-m2{{ $errors->has('email') ? ' has-error' : '' }}">
                            <input id="email" type="email" class="validate" name="email" value="{{ old('email') }}" required>
                            <label for="email" data-error="wrong">E-Mail Address</label>

                            @if ($errors->has('email'))
                                <span>
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="row">
                        <div class="col m6 l6 s12 offset-m2 offset-l2">
                            <button type="submit" class="btn blue waves-effect waves-light">
                                Send Password Reset Link
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
