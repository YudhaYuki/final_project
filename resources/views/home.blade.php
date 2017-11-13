@extends('wrapper')

{{-- @extends('wrapper') --}}

{{-- Inside panel heading it was just dashboard --}}

 
@section('content')
<div section="dashboard">
    <div class="container-fluid bdo-login">
        <div class="row">
            <div class="col-md-12 mt-5 bdo-login">
                <div class="panel panel-default mb-5 mt-3">
                    <div class="panel-heading text-center"><i class="fa fa-user-o" aria-hidden="true"></i>&nbsp;{{ Auth::user()->name.' '. Auth::user()->surname }}</div>
    
                    <div class="panel-body text-center">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        
                        You are logged in!
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 ">
                <ul class="nav flex-column bdo-dash-nav mt-2">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ action('activityController@create') }}">Add New Activity</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Add New Activity Category</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Edit User Info</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">View Profiles</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-3 text-center mt-2">
                <div class="userInfo">
                    <i class="fa fa-users" aria-hidden="true"></i><br>
                    <h4>User Information</h4>
                    <ol>
                        <li>Current User Stats</li>
                        <li>Activities booked</li>
                        <li>Profiles</li>
                        <li>Edit User</li>
                    </ol>
                </div>
                
            </div>
            <div class="col-md-3 text-center mt-2">
                <div class="ActivityInfo">
                <i class="fa fa-ravelry" aria-hidden="true"></i><br>
                    <h4>Activity Information</h4>
                    <ol>
                        <li>Activity 1</li>
                        <li>Activity 2</li>
                        <li>Activity 3</li>
                        <li>Activity 4</li>
                    </ol>
                </div>
            </div>
            <div class="col-md-3 text-center mt-2">
                <div class="Messages">
                <i class="fa fa-comments-o" aria-hidden="true"></i><br>
                    <h4>Messages</h4>
                    <ol>
                        <li>Message</li>
                        <li>Message</li>
                        <li>Message</li>
                        <li>Message</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection