@extends('wrapper')

@section('content')


<div class="container">
    <div class="row mt-5">
        <div class="col-md-6">
            <img class="img-fluid" src="{{ asset('uploads/' .$activity->picture) }}" alt="activity-picture">
        </div>
        <div class="col-md-6">
            <h1>{{ $activity->name }}</h1>
            <p class="description">
                <p><strong>Description</strong></p>
                    {{ $activity->description }}
                <p><strong>Provider</strong></p>
                    {{ $activity->company_provider }}
                <p><strong>Price</strong></p>
                    {{ $activity->price }}
                <p><strong>Activity Category ID</strong></p>
                    {{ $activity->category->name }}
            </p><br>
        </div>
    </div>
</div>

@if(Auth::check() && (Auth::user()->isManagers() ||  Auth::user()->isEmployees()))
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-2 mb-5 text-center">
            <a href="{{ action('activityController@edit', ['id' => $activity->id]) }}" class="btn btn-primary bdo-btn-listing">Edit activity</a>
        </div>
    </div>
</div>
@endif



<div class="container">
    <div class="row">
        <div class="col-md-12 mt-2 mb-5 text-center">
            <div id="review-form">
                {{ Form::open(['route' => ['reviews.store', $activity->id], 'method' => 'POST']) }}
                    
                    <div class="row">
                        <div class="col-md-6">
                            {{ Form::label('name', "Name:") }}
                            {{ Form::text('name', null, ['class' => 'form-controller']) }}
                        </div>

                        <div class="col-md-6">
                            {{ Form::label('email', "Email:") }}
                            {{ Form::text('email', null, ['class' => 'form-controller']) }}
                        </div>

                        <div class="col-md-12">
                            {{ Form::label('comment', "Comment:") }}
                            {{ Form::textarea('comment', null, ['class' => 'form-controller']) }}

                            {{ Form::submit('Add Review', ['class' => 'btn btn-success btn-block', 'style' => 'margin-top:15px;']) }}
                        </div>

                    </div>

                {{ Form::close() }}
            </div>
        </div>
    </div>
</div> 





{{-- 
<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-12 mt-5 mb-5">
            <div class="form-register">
                <h3>Add Review:</h3><br>
                <form action="{{ route('reviews.store') }}" enctype="multipart/form-data" method="post">

                    {{ csrf_field() }}

                    <input type="hidden" name="activity_category_id" value="Activity">
                    <input type="hidden" name="activity_id" value="{{ $activity->id }}">


                    <div class="form-group">
                        <label for="name">Name:</label><br>
                        <input class="form-control" type="text" name="name" value="" id="name">
                    </div>

                    <div class="form-group">
                        <label for="email">Email:</label><br>
                        <input class="form-control" type="email" name="email" value="" id="email">
                    </div>

                    <div class="form-group">
                        <label for="comment">Comment:</label><br>
                        <textarea class="form-control" name="comment" value="" id="comment"> </textarea>
                    </div>

                    <div class="form-group">
                        <input class="btn btn-primary" type="submit" value="save">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

--}}


<div class="incentive">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="bdo-why text-center">
                    <span>1</span>
                    <h4>Cool Destinations</h4>
                </div>
            </div>
            <div class="col-md-3">
                <div class="bdo-why text-center">
                    <span>2</span>
                    <h4>Quality Activities</h4>
                </div>
            </div>
            <div class="col-md-3">
                <div class="bdo-why text-center">
                    <span>3</span>
                    <h4>The Best Price</h4>
                </div>
            </div>
            <div class="col-md-3">
                <div class="bdo-why text-center">
                    <span>4</span>
                    <h4>No Hassle</h4>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="bdo-why text-center">
                <h5>Praha</h5> 
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d10240.79816953683!2d14.449798250000002!3d50.0825508!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2scz!4v1510090827106" width="250" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-md-3">
                <div class="bdo-why text-center">
                    <h5>More Info</h5>
                    <div class="footer-links">
                        <a href="#">About</a><br>
                        <a href="#">Blog</a><br>
                        <a href="#">Sign Your company up</a><br>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
            <div class="bdo-why text-center">
                <h5>Main Menu</h5>
                <div class="footer-links">
                    <a href="#">How It Works</a><br>
                    <a href="#">FAQ</a><br>
                    <a href="#">Contact</a><br>
                    <a href="#">Testimonials</a><br>
                </div>
            </div>
            </div>
            <div class="col-md-3">
                <div class="bdo-why text-center">
                    <h5>Contact us</h5>
                    <div class="footer-links">
                        <a href="#">hello@bigdayout.cz</a><br>
                        <a href="#">+34 933 930 135</a><br>
                    </div><br>
                    <div class="social">
                    <h5>Follow Us:</h5>
                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="copyright">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-center">
                    <p>&copy;BigDayOut 2017</p>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection

@section('page_title') {{ $activity->name }} ({{ $activity->price }}) @endsection