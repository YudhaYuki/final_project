@extends('wrapper')

@section('content')

<div class="container mt-5">
    <div id="add-new">
        <div class="row">
            <div class="col-md-12">
                <form action="" enctype="multipart/form-data" method="post">

                    {{ csrf_field() }}

                    <div class="bdo-act-cat text-center">
                        <h3>Add New Activity Category</h3>
                    </div>

                    <div class="form-group">
                        <label for="name">Name :</label><br>
                        <input class="form-control" type="name" name="name" value="{{ $activityCategory->name }}" id="name">
                    </div>

                    <div class="form-group">
                        <label for="description">Description :</label><br>
                        <input class="form-control" type="text" name="description" value="{{ $activityCategory->description }}" id="description">
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