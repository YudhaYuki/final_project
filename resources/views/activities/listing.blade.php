@extends('wrapper')

@section('content')

<div class="container">

    <h1>List of activities</h1>

    @foreach($activities as $activity)

        <div class="row">
        <div class="col-12">

            <div class="card" style="width: 20rem;">
                <img class="card-img-top" src="{{ asset('uploads/' .$activity->picture) }}" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title"><a href="{{ route('activity detail', ['id' => $activity->id]) }}">{{ $activity->name }} </a></h4>
                    <!-- <p class="card-text"><a href="{{ route('activity detail', ['id' => $activity->id]) }}">{{ $activity->description }} </a></p> -->
                    <a href="{{ route('activity detail', ['id' => $activity->id]) }}" class="btn btn-primary">More details</a>
                </div>
            </div>

        </div>
        </div>
        <br>
       
    <!-- 
    <li>
        <a href="{{ route('activity detail', ['id' => $activity->id]) }}">
            {{ $activity->name }} <img src="{{ asset('uploads/' .$activity->picture) }}"> ({{ $activity->price }})
        </a>
    </li> 
    -->
    
    @endforeach

@endsection

</div>

@section('page_title') List of activities @endsection