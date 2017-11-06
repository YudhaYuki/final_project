@extends('wrapper')

@section('content')

<br>
<div class="container">

<a href="{{ action('activityController@edit', ['id' => $activity->id]) }}" class="btn btn-primary">Edit ativity</a>
<br>
<br>

<!-- Picture :<br> -->
<p class="picture">
<img src="{{ asset('uploads/' .$activity->picture) }}">
</p>

<h1>{{ $activity->name }}</h1>

<!-- Description :<br> -->
<p class="description">
{{ $activity->description }}
</p>

Provider : <br>
<p class="provider">
{{ $activity->company_provider }}
</p>

Price : <br>
<div class="price">{{ $activity->price }}</div>
<br>

Activity Category ID :<br>
<div class="activity_category_id">{{ $activity->activity_category_id }}</div>


</div>
@endsection

@section('page_title') {{ $activity->name }} ({{ $activity->price }}) @endsection