@extends('wrapper')

@section('content')
<div class="container">
    <div class="row mt-5 mb-5">
        <div class="col-md-4 bdo-login-reg">
            <div class="panel panel-default">
                    <div class="panel-heading bdo-login-heading">Already have an account?<br> Login:</div>

                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                <div class="col-md-12">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">Password</label>

                                <div class="col-md-12">
                                    <input id="password" type="password" class="form-control" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary bdo-send-reg">
                                        Login
                                    </button>

                                    <a class="btn btn-link bdo-forgot" href="{{ route('password.request') }}">
                                        Forgot Your Password?
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>  
            </div>


       


        <div class="col-md-8">
        <div id="bdo-register-form">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading bdo-login-heading">Register</div>

                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                <div class="col-md-12">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">Password</label>

                                <div class="col-md-12">
                                    <input id="password" type="password" class="form-control" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                                <div class="col-md-12">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                </div>
                            </div>


                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Name</label>

                                <div class="col-md-12">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group{{ $errors->has('surname') ? ' has-error' : '' }}">
                                <label for="surname" class="col-md-4 control-label">Surname</label>

                                <div class="col-md-12">
                                    <input id="surname" type="text" class="form-control" name="surname" value="{{ old('surname') }}" required autofocus>

                                    @if ($errors->has('surname'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('surname') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group">
                            <label for="gender_id_select">Gender:</label><br>
                            <div class="col-md-12">
                                <select class="form-control" name="gender_id" id="gender_id_select">
                                    @foreach($genders as $gender_id => $gender_name)
                                        <option value="{{ $gender_id }}"{{ $gender_id == $user->gender_id ? ' selected' : '' }}>{{ $gender_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            </div>

                        <div class="form-group">
                            <label for="date_of_birth">Date of birth:</label><br>
                            <div class="col-md-12">
                            <input class="form-control" type="date" name="date_of_birth" value="{{ $user->date_of_birth }}" id="date_of_birth">
                            <div>
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
                                <button type="submit" class="btn btn-primary bdo-send">
                                    Register
                                </button>
                            </div>
            
                        </form>
                    </div>
                </div>
            </div>
        </div><!--closes wrapper-->
        </div>
    </div>
</div>



@endsection
