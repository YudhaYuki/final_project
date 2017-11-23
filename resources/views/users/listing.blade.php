@extends('wrapper')

@section('content')

<div class="container">

    <h1>List of Users </h1>

    <input type="text" id="search"/>
<button id="btn"> Search users </button>

<br>
<br>

<ul>
@foreach($users as $user)
    <li>
        <a href="{{ route('user detail', ['id' => $user->id]) }}">
            {{ $user->name }} {{ $user->surname }} ({{ $user->email }})
        </a>
    </li>
@endforeach
</ul>

@endsection

</div>

@section('page_title') List of users @endsection