@extends('main')
@section('title', 'Home')
@section('content')

<!-- Student Search Modal -->
<div id="modalstudent" class="modal">
    <div class="modal-content" style="height: 453px;">
        <div class="container">
            <div class="row">
                <div class="input-field col s12 m12 l10 offset-l1">
                    <input id="student_search" type="text" name="student_search" class="validate">
                    <label for="student_search">Please enter student ID</label>
                </div>
                <!-- <div class="input-field col s4 m4 l3">
                    <a class="btn waves-effect waves-light cyan" href="#">Search
                </a>
                </div> -->
            </div>
        </div>
    </div>
</div>

<!-- Formation student button -->
<div id="modalformation" class="modal">
    <div class="modal-content" style="height: 453px;">
        <div class="container">
            <div class="row">
                <div class="input-field col s12 m12 l10 offset-l1">
                    <input id="formation_search" type="text" name="formation_search" class="validate">
                    <label for="formation_search">Please enter the formation's title</label>
                </div>
                <!-- <div class="input-field col s4 m4 l3">
                    <a class="btn waves-effect waves-light cyan" href="#">Search
                </a>
                </div> -->
            </div>
        </div>
    </div>
</div>

<div class="container">
    <!-- GGT's Slider -->
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

    <!-- Student Search button -->
    <div class="row" style="margin-top: 20px;">
        <div class="center">
            <a class="modal-trigger btn btn-large waves-effect waves-light blue" href="#modalstudent">Search for student
            </a>
        </div>
    </div>

    <!-- GGT's information -->
    <div class="row">
        <div class="col l12 m12 s12">
            <div class="card-panel">
                <h5 class="blue-text">What's the GGT ?</h5>
                <p class="light">In light of the demand for human developement and increased training center in the Arab world far from meeting the needs of the trainees, resulting in a lower level of international quality standars in training and this means lower ethics training, which led to a lack of appetite for human developement in general view of the high cost that is paid and the failure to meet coach of training needs and not to mind the needs of the trainee, here was born the idea of the <em><b>World Group for training</b></em> to participate in the organization of interaction mechanism between the centers, trainers and trainees.</p>
            </div>
        </div>
    </div>

    <!-- Formation Search button -->
    <div class="row" style="margin-top: 20px;">
        <div class="center">
            <a class="modal-trigger btn btn-large waves-effect waves-light teal lighten-1" href="#modalformation">Search for formation
            </a>
        </div>
    </div>

    <!-- GGT's Certificate -->
    <div class="row">
        <div class="col l8 m8 s12">
            <div class="card-panel">
                <h5 class="teal-text">Our Certificate</h5>
                <p class="light">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla.
                </p>
            </div>
        </div>
        <div class="col l4 m4 s10 offset-s1">
            <div class="card-panel">
                <img class="materialboxed" data-caption="GGT's diplom design" width="260" src="img/diplome.jpg">
            </div>
        </div>
    </div>

    <!-- GGT's Teachers -->
    <div class="section" id="staggered">
        <h5 class="blue-text center">Our Teachers</h5>
        <div class="row">
            <ul>
                <li style="opacity: 0;">
                    <div class="col s12 m3 l3">
                        <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator" src="img/background3.jpg">
                            </div>
                            <div class="card-content">
                                <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">more_vert</i></span>
                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                                <p>Here is some more information about this product that is only revealed once clicked on.</p>
                            </div>
                        </div>
                    </div>
                </li>
                <li style="opacity: 0;">
                    <div class="col s12 m3 l3">
                        <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator" src="img/background3.jpg">
                            </div>
                            <div class="card-content">
                                <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">more_vert</i></span>
                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                                <p>Here is some more information about this product that is only revealed once clicked on.</p>
                            </div>
                        </div>
                    </div>
                </li>
                <li style="opacity: 0;">
                    <div class="col s12 m3 l3">
                        <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator" src="img/background3.jpg">
                            </div>
                            <div class="card-content">
                                <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">more_vert</i></span>
                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                                <p>Here is some more information about this product that is only revealed once clicked on.</p>
                            </div>
                        </div>
                    </div>
                </li>
                <li style="opacity: 0;">
                    <div class="col s12 m3 l3">
                        <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator" src="img/background3.jpg">
                            </div>
                            <div class="card-content">
                                <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">more_vert</i></span>
                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                                <p>Here is some more information about this product that is only revealed once clicked on.</p>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <!-- About the GGT -->
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
