@extends('wrapper')

@section('content')

<br>
<div class="container">

<a href="{{ action('userController@edit', ['id' => $user->id]) }}" class="btn btn-primary">Edit user profile</a>
<br>
<br>


<h1>{{ $user->name }} {{ $user->surname }}</h1>

<strong>Email :</strong>
<p class="email">
{{ $user->email }}
</p>

<strong>Gender :</strong> 
<p class="gender">
{{ $genders[$user->gender_id] }}
</p>

<strong>Date of birth :</strong>
<p class="date_of_birth">
{{ $user->date_of_birth }}
</p>

<strong> Nationality : </strong>
<p class="nationality_id">
{{ $nationalities[$user->nationality_id] }}
</p>

<strong>Mobile number :</strong>
<p class="mobile_number">
{{ $user->mobile_number }}
</p>


</div>
@endsection

@section('page_title') {{ $user->name }} ({{ $user->surname }}) @endsection