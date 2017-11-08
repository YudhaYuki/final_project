@extends('wrapper')

@section('content')

<div class="container">

<form action="" enctype="multipart/form-data" method="post">

    {{ csrf_field() }}

    <div class="form-group">
        <label for="name">Name :</label><br>
        <input class="form-control" type="name" name="name" value="{{ $activityCategory->name }}" id="name">
    </div>

    <div class="form-group">
        <label for="description">Description :</label><br>
        <input class="form-control" type="text" name="description" value="{{ $activityCategory->description }}" id="description">
    </div>

    <div class="form-group">
        <input class="btn btn-primary" type="submit" value="save">
    </div>

</form>

</div>

@endsection