@extends('layouts.app')

{{-- @extends('wrapper') --}}

{{-- Inside panel heading it was just dashboard --}}

 
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{ Auth::user()->name.' '. Auth::user()->surname }}</div>
 
                <div class="panel-body">
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
@endsection