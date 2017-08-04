@extends('main')
@section('title', 'About & Contact')
@section('content')
<div class="container">
	<div class="col s12 m12 s12" style="margin-top: 20px;">
        <div class="slider">
            <ul class="slides">
                <li>
                    <img src="{{URL::asset('img/background1.jpg')}}"> <!-- random image -->
                    <div class="caption center-align">
                        <h3>GGT 2014</h3>
                        <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                    </div>
                </li>
                <li>
                    <img src="{{URL::asset('img/background2.jpg')}}"> <!-- random image -->
                    <div class="caption left-align">
                        <h3>GGT 2015</h3>
                        <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                    </div>
                </li>
                <li>
                    <img src="{{URL::asset('img/background3.jpg')}}"> <!-- random image -->
                    <div class="caption right-align">
                        <h3>GGT 2016</h3>
                        <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                    </div>
                </li>
                <li>
                    <img src="http://lorempixel.com/580/250/nature/4"> <!-- random image -->
                    <div class="caption center-align">
                        <h3>GGT 2017</h3>
                        <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col l8 m8 s12">
            <div class="card-panel">
                <h5 class="blue-text">About us</h5>
                <p class="light">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </div>
        <div class="col l4 m4 s12">
            <div class="card-panel">
                <h5 class="teal-text">Contact us</h5>
                <p class="light">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco.</p>
            </div>
        </div>
    </div>
</div>
@endsection	