@extends('wrapper')

@section('content')

<h1>List of activities</h1>

<ul>
    @foreach($activities as $activity)
        <li>
            <a href="{{ route('activity detail', ['id' => $activity->id]) }}">
                {{ $activity->name }} ({{ $activity->price }})
            </a>
        </li>
    @endforeach
</ul>

<ul>
    @foreach($activities as $activity)
        <li>
            <a href="{{ action('activityController@detail', ['id' => $activity->id]) }}">
                {{ $activity->name }} ({{ $activity->price }})
            </a>
        </li>
    @endforeach
</ul>

<ul>
    @foreach($activities as $activity)
        <li>
            <a href="{{ url('activities/activity/' . $activity->id) }}">
                {{ $activity->name }} ({{ $activity->price }})
            </a>
        </li>
    @endforeach
</ul>

@endsection

@section('page_title') List of activities @endsection