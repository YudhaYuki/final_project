@extends('wrapper')

@section('content')

<br>
<div class="container">

<a href="{{ action('adventurerController@edit', ['id' => $adventurer->id]) }}" class="btn btn-primary">Edit adventurer</a>
<br>
<br>


<h1>{{ $adventurer->name }} {{ $adventurer->surname }}</h1>

Email :
<p class="email">
{{ $adventurer->email }}
</p>

Gender : <br>
<p class="gender">
{{ $genders[$adventurer->gender_id] }}
</p>

Date of birth : <br>
<div class="date_of_birth">{{ $adventurer->date_of_birth }}</div>
<br>

Nationality :<br>
<div class="nationality_id">{{ $nationalities[$adventurer->nationality_id] }}</div>


Mobile number :<br>
<div class="mobile_number">{{ $adventurer->mobile_number }}</div>


</div>
@endsection

@section('page_title') {{ $adventurer->name }} ({{ $adventurer->surname }}) @endsection