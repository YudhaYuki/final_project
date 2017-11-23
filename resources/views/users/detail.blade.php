@extends('wrapper')

@section('content')

<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-4 text-center bdo-edit-user mb-5">
            <div class="card" style="width: 20rem;">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item text-center bdo-edit-user-head"><h3><i class="fa fa-user" aria-hidden="true"></i>&nbsp;{{ $user->name }} {{ $user->surname }}</h3></li>
                    <li class="list-group-item"><p class="email">{{ $user->email }}</p></li>
                    <li class="list-group-item"><p class="gender">{{ $genders[$user->gender_id] }}</p></li>
                    <li class="list-group-item"><p class="date_of_birth">{{ $user->date_of_birth }}</p></li>
                    <li class="list-group-item"><p class="nationality_id">{{ $nationalities[$user->nationality_id] }}</p></li>
                    <li class="list-group-item"><p class="mobile_number">{{ $user->mobile_number }}</p></li>
                </ul>
                <a href="{{ action('userController@edit', ['id' => $user->id]) }}" class="btn btn-primary bdo-send-reg">Edit user profile</a>
            </div>
        </div>
    </div>
</div>
@endsection

@section('page_title') {{ $user->name }} ({{ $user->surname }}) @endsection