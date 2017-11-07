@extends('wrapper')

@section('content')

<br>
<div class="container">

<a href="{{ action('adventurerController@edit', ['id' => $adventurer->id]) }}" class="btn btn-primary">Edit adventurer</a>
<br>
<br>

<!-- Picture :<br> -->
<p class="picture">
<img src="{{ asset('uploads/' .$activity->picture) }}">
</p>

<h1>{{ $adventurer->name }}</h1>

<!-- Description :<br> -->
<p class="description">
{{ $adventurer->description }}
</p>

Provider : <br>
<p class="provider">
{{ $adventurer->company_provider }}
</p>

Price : <br>
<div class="price">{{ $adventurer->price }}</div>
<br>

Activity Category ID :<br>
<div class="activity_category_id">{{ $activity->activity_category_id }}</div>


</div>
@endsection

@section('page_title') {{ $activity->name }} ({{ $activity->price }}) @endsection