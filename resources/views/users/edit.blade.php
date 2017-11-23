@extends('wrapper')

@section('content')

<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-12 mb-5">
            <div class="edit-user-form">
                <div class="panel-heading bdo-login-heading"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;Edit User Details</div>
                <form action="" enctype="multipart/form-data" method="post">

                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="email">Email Address:</label><br>
                        <input class="form-control" type="email" name="email" value="{{ $user->email }}" id="email">
                    </div>

                    <div class="form-group">
                        <label for="password">Password:</label><br>
                        <input class="form-control" type="password" name="password" value="{{ $user->password }}" id="password">
                    </div>

                    <div class="form-group">
                        <label for="repeat_password">Repeat password:</label><br>
                        <input class="form-control" type="password" name="repeat_password" value="{{ $user->repeat_password }}" id="repeat_password">
                    </div>

                    <div class="form-group">
                        <label for="name">Name:</label><br>
                        <input class="form-control" type="text" name="name" value="{{ $user->name }}" id="name">
                    </div>

                    <div class="form-group">
                        <label for="surname">Surname:</label><br>
                        <input class="form-control" type="text" name="surname" value="{{ $user->surname }}" id="surname">
                    </div>

                    <div class="form-group">
                        <label for="gender_id_select">Gender:</label><br>
                        <select class="form-control" name="gender_id" id="gender_id_select">
                            @foreach($genders as $gender_id => $gender_name)
                                <option value="{{ $gender_id }}"{{ $gender_id == $user->gender_id ? ' selected' : '' }}>{{ $gender_name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="date_of_birth">Date of birth:</label><br>
                        <input class="form-control" type="date" name="date_of_birth" value="{{ $user->date_of_birth }}" id="date_of_birth">
                    </div>

                    <div class="form-group">
                        <label for="nationality_id_select">Nationality:</label><br>
                        <select class="form-control" name="nationality_id" id="nationality_id_select">
                            @foreach($nationalities as $nationality_id => $nationality_name)
                                <option value="{{ $nationality_id }}"{{ $nationality_id == $user->nationality_id ? ' selected' : '' }}>{{ $nationality_name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="mobile_number">Mobile number:</label><br>
                        <input class="form-control" type="text" name="mobile_number" value="{{ $user->mobile_number }}" id="mobile_number">
                    </div>

                    <div class="form-group">
                        <label for="is_admin">Is admin:</label><br>
                        <input class="form-control" type="is_admin" name="is_admin" id="is_admin">
                    </div>

                    <div class="form-group">
                        <label for="gender_id_select">Permission level:</label><br>
                        <select class="form-control" name="permission_level_id" id="permission_level_id_select">
                            @foreach($permission_levels as $permission_level_id => $permission_level_name)
                                <option value="{{ $permission_level_id }}"{{ $permission_level_id == $user->permission_level_id ? ' selected' : '' }}>{{ $permission_level_name }}</option>
                            @endforeach
                        </select>
                     </div>


                    <div class="form-group">
                        <input class="btn btn-primary bdo-send" type="submit" value="save">
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

@endsection