@extends('wrapper')

@section('content')

<br>
<div class="container">

<a href="{{ action('activity_categoryController@edit', ['id' => $activityCategory->id]) }}" class="btn btn-primary">Edit activity category</a>
<br>
<br>


<h1>{{ $activityCategory->name }} </h1>

<p class="description">{{ $activityCategory->description }}</p>
<br>

</div>
@endsection

@section('page_title') {{ $activityCategory->name }} @endsection