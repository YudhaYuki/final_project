@extends('wrapper')

@section('content')

<div class="container">

<form action="" enctype="multipart/form-data" method="post">

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

    @if($activity->getImageUrl())
        <img src="{{ $activity->getImageUrl() }}" />
    @endif

    <div class="form-group">
        <label for="company_provider">Company provider:</label><br>
        <input class="form-control" type="text" name="company_provider" value="{{ $activity->company_provider }}" id="company_provider">
    </div>

    <div class="form-group">
        <label for="price">Price:</label><br>
        <input class="form-control" type="text" name="price" value="{{ $activity->price }}" id="price">
    </div>

    <div class="form-group">
    <label for="activity_category_id_select">Activity Category ID:</label><br>
    <select class="form-control" name="activity_category_id" id="activity_category_id_select">
        @foreach($activityCategories as $activityCategory)
            <option value="{{ $activityCategory->id }}"{{ $activityCategory->id == $activity->activity_category_id ? ' selected' : '' }}>{{ $activityCategory->name }}</option>
        @endforeach
    </select>
</div>

    <div class="form-group">
        <input class="btn btn-primary" type="submit" value="save">
    </div>

</form>

</div>

@endsection