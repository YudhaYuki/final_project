@extends('wrapper')

@section('content')

<a href="{{ action('activityController@edit', ['id' => $activity->id]) }}" class="btn btn-primary">edit this ativity</a>

<h1>{{ $activity->name }}</h1>

<div class="price">{{ $activity->price }}</div>

<p class="description">
{{ $activity->description }}
</p>



@endsection

@section('page_title') {{ $activity->name }} ({{ $activity->price }}) @endsection