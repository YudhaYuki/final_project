@extends('wrapper')

@section('content')


<div class="container">
    <div class="row mt-5">
        <div class="col-md-6">
            <img class="img-fluid" src="{{ asset('uploads/' .$activity->picture) }}" alt="activity-picture">
        </div>
        <div class="col-md-6">
        <div class="panel-group">
            <div class="card">
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><strong>{{ $activity->name }}</strong></li>
                <li class="list-group-item">{{ $activity->description }}</li>
                <li class="list-group-item">{{ $activity->company_provider }}</li>
                @if(Auth::check() && (Auth::user()->isManagers() ||  Auth::user()->isEmployees()))
                    <li class="list-group-item"><strong>€{{ $activity->price }}</strong></li>
                @endif
                <li class="list-group-item">{{ $activity->category ? $activity->category->name : '' }}</li>
            </ul>
            </div>
        </div>
        </div>
    </div>
</div>

@if(Auth::check() && (Auth::user()->isManagers() ||  Auth::user()->isEmployees()))
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12 mt-2 mb-5 text-center">
            <a href="{{ action('activityController@edit', ['id' => $activity->id]) }}" class="btn btn-primary bdo-btn-listing">Edit activity</a>
        </div>
    </div>
</div>
@endif

<div class="container">
    <div class="row comments-bdo mt-5">
        <div class="col-md-8 mt-4">
            @foreach($activity->comments as $comment)
                <div id="accordion" role="tablist" aria-multiselectable="true">
                <div class="card">
                  <div class="card-header" role="tab" id="headingOne">
                    <h5 class="mb-0">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      <i class="fa fa-comment-o" aria-hidden="true"></i>&nbsp;{{ $comment->full_name }}
                      </a>
                    </h5>
                  </div>
              
                  <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
                    <div class="card-block">
                        <strong>&nbsp;{{ $comment->created_at }}</strong><br> 
                        {{ $comment->comment }}
                    </div>
                  </div>
                </div>
              </div>
            @endforeach
        </div>
        <div class="col-md-4">
            <div id="review-form">
                {{ Form::open(['route' => ['comments.store', $activity->id], 'method' => 'POST']) }}
                        <div class="text-center">
                        <i class="fa fa-user-o" aria-hidden="true"></i>
                            {{ Form::label('full_name', "Full Name:") }}<br>
                            {{ Form::text('full_name', null, ['class' => 'form-controller']) }}
                        </div>
                        <div class="text-center bdo-field">
                            <i class="fa fa-share" aria-hidden="true"></i>
                            {{ Form::label('email', "Email:") }}<br>
                            {{ Form::text('email', null, ['class' => 'form-controller']) }}
                        </div>
                        <div class="mb-5 text-center">
                            <i class="fa fa-comment-o" aria-hidden="true"></i>
                            {{ Form::label('comment', "Comment:") }}<br>
                            {{ Form::textarea('comment', null, ['class' => 'form-controller']) }}

                            {{ Form::submit('Add Review', ['class' => 'btn btn-success btn-block', 'style' => 'margin-top:15px;']) }}
                        </div>

                        <div class="stars">

                            <input class="star star-5" id="star-5" type="radio" name="star"/>

                            <label class="star star-5" for="star-5"></label>

                            <input class="star star-4" id="star-4" type="radio" name="star"/>

                            <label class="star star-4" for="star-4"></label>

                            <input class="star star-3" id="star-3" type="radio" name="star"/>

                            <label class="star star-3" for="star-3"></label>

                            <input class="star star-2" id="star-2" type="radio" name="star"/>
                        
                            <label class="star star-2" for="star-2"></label>

                            <input class="star star-1" id="star-1" type="radio" name="star"/>

                            <label class="star star-1" for="star-1"></label>

                        </div>

                {{ Form::close() }}
            </div>
        </div>
    </div>
</div> 



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