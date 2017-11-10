@extends('wrapper')

@section('content')

<br>
<div class="container">

<a href="{{ action('userController@edit', ['id' => $user->id]) }}" class="btn btn-primary">Edit user</a>
<br>
<br>


<h1>{{ $user->name }} {{ $user->surname }}</h1>

Email :
<p class="email">
{{ $user->email }}
</p>

Gender : <br>
<p class="gender">
{{ $genders[$user->gender_id] }}
</p>

Date of birth : <br>
<div class="date_of_birth">{{ $user->date_of_birth }}</div>
<br>

Nationality :<br>
<div class="nationality_id">{{ $nationalities[$user->nationality_id] }}</div>


Mobile number :<br>
<div class="mobile_number">{{ $user->mobile_number }}</div>


Is admin :<br>
<div class="is_admin">{{ $is_admins[$user->is_admin] }}</div>


Permission level :<br>
<div class="permission_level">{{ $permission_levels[$user->permission_level] }}</div>


</div>
@endsection

@section('page_title') {{ $user->name }} ({{ $user->surname }}) @endsection