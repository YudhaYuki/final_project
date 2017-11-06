@extends('wrapper')

@section('content')

<a href="{{ action('activityController@edit', ['id' => $activity->id]) }}" class="btn btn-primary">edit this ativity</a>

<h1>{{ $activity->name }}</h1>

Description :<br>
<p class="description">
{{ $activity->description }}
</p>

Picture :<br>
<p class="picture">
{{ asset($activity->picture) }}
</p>

Provider : <br>
<p class="picture">
{{ $activity->company_provider }}
</p>

Price :<br>
<div class="price">{{ $activity->price }}</div>

Activity Category ID :<br>
<div class="activity_category_id">{{ $activity->activity_category_id }}</div>



@endsection

@section('page_title') {{ $activity->name }} ({{ $activity->price }}) @endsection