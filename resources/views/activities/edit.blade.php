@extends('wrapper')

@section('content')

<form action="" method="post">

    {{ csrf_field() }}

    <div class="form-group">
        <label for="name">Activity Name:</label><br>
        <input class="form-control" type="text" name="name" value="{{ $activity->name }}" id="name">
    </div>

    <div class="form-group">
        <label for="description">Description:</label><br>
        <textarea class="form-control" name="description" id="description">{{ $activity->description }}</textarea>
    </div>

    <div class="form-group">
        <label for="picture">Picture:</label><br>
        <input class="form-control" type="file" name="picture" id="picture">
    </div>

    <div class="form-group">
        <label for="company_provider">Company provider:</label><br>
        <input class="form-control" type="text" name="company_provider" value="{{ $activity->company_provider }}" id="company_provider">
    </div>

    <div class="form-group">
        <label for="price">Price:</label><br>
        <input class="form-control" type="text" name="price" value="{{ $activity->price }}" id="price">
    </div>


    <div class="form-group">
        <label for="activity_category_id">Activity category ID:</label><br>
        <input class="form-control" type="text" name="activity_category_id" value="{{ $activity->activity_category_id }}" id="activity_category_id">
    </div>

    <div class="form-group">
        <input class="btn btn-primary" type="submit" value="save">
    </div>

</form>

@endsection