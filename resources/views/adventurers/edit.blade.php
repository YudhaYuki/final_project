@extends('wrapper')

@section('content')

<div class="container">

<form action="" enctype="multipart/form-data" method="post">

    {{ csrf_field() }}

    <div class="form-group">
        <label for="email">Email Address:</label><br>
        <input class="form-control" type="email" name="email" value="{{ $adventurer->email }}" id="email">
    </div>

    <div class="form-group">
        <label for="password">Password:</label><br>
        <input class="form-control" type="password" name="password" value="{{ $adventurer->password }}" id="password">
    </div>

    <div class="form-group">
        <label for="repeat_password">Repeat password:</label><br>
        <input class="form-control" type="password" name="repeat_password" value="{{ $adventurer->repeat_password }}" id="repeat_password">
    </div>

    <div class="form-group">
        <label for="name">Name:</label><br>
        <input class="form-control" type="name" name="name" value="{{ $adventurer->name }}" id="name">
    </div>

    <div class="form-group">
        <label for="surname">Surname:</label><br>
        <input class="form-control" type="text" name="surname" value="{{ $adventurer->surname }}" id="email">
    </div>

    <div class="form-group">
        <label for="gender_id_select">Gender:</label><br>
        <select class="form-control" name="gender_id" id="gender_id_select">
            @foreach($genders as $gender_id => $gender_name)
                <option value="{{ $gender_id }}"{{ $gender_id == $adventurer->gender_id ? ' selected' : '' }}>{{ $gender_name }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="date_of_birth">Date of birth:</label><br>
        <input class="form-control" type="date" name="date_of_birth" value="{{ $adventurer->date_of_birth }}" id="date_of_birth">
    </div>

    <div class="form-group">
        <label for="nationality_id_select">Nationality:</label><br>
        <select class="form-control" name="nationality_id" id="nationality_id_select">
            @foreach($nationalities as $nationality_id => $nationality_name)
                <option value="{{ $nationality_id }}"{{ $nationality_id == $adventurer->nationality_id ? ' selected' : '' }}>{{ $nationality_name }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="mobile_number">Mobile number:</label><br>
        <input class="form-control" type="text" name="mobile_number" value="{{ $adventurer->mobile_number }}" id="mobile_number">
    </div>

     {{-- <div class="form-group">
        <label for="is_admin">Is admin:</label><br>
        <input class="form-control" type="is_admin" name="is_admin" id="is_admin">
    </div>

    <div class="form-group">
        <label for="permission_level">Permission level:</label><br>
        <input class="form-control" type="permission_level" name="permission_level" id="permission_level">
    </div> --}}


    <div class="form-group">
        <input class="btn btn-primary" type="submit" value="save">
    </div>

</form>

</div>

@endsection