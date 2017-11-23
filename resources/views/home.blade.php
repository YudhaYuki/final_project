@extends('wrapper')

{{-- @extends('wrapper') --}}

{{-- Inside panel heading it was just dashboard --}}

 
@section('content')
<div section="dashboard">
    <div class="container-fluid bdo-login dashboard">
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


    @if(Auth::check() && (Auth::user()->isManagers() ||  Auth::user()->isEmployees()))

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 ">
                <ul class="nav flex-column bdo-dash-nav mt-2">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ action('activityController@create') }}">Add New Activity</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ action('activity_categoryController@create') }}">Add New Activity Category</a>
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
                    <h4>USERS REGISTERED</h4>

                    @foreach($users as $user)
                            <i class="fa fa-user" aria-hidden="true"></i>
                            <a href="{{ route('user detail', ['id' => $user->id]) }}">
                                {{ $user->name }} {{ $user->surname }} {{-- ({{ $permission_levels[$user->permission_level] }}) --}}
                            </a> <br>
                    @endforeach

                </div>
            </div>

            <div class="col-md-3 text-center mt-2">
                <div class="ActivityInfo">
                <i class="fa fa-ravelry" aria-hidden="true"></i><br>
                    <h4>ACTIVITIES</h4>

                    @foreach($activities as $activity)
                        <i class="fa fa-ravelry" aria-hidden="true"></i>
                        <a href="{{ route('activity detail', ['id' => $activity->id]) }}">
                            {{ $activity->name }}
                        </a> <br>
                    @endforeach
                    
                </div>
            </div>
            <div class="col-md-3 text-center mt-2">
                <div class="Messages">
                <i class="fa fa-comments-o" aria-hidden="true"></i><br>
                    <h4>MESSAGES</h4>
                    <ol>
                        <li>Message</li>
                        <li>Message</li>
                        <li>Message</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="bdo-calendar">
                
                </div>
            </div>
            <div class="col-md-6">
                <div class="bdo-traffic">
                
                </div>
            </div>
        </div>
    </div>

    @endif


</div>
@endsection