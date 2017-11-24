@extends('wrapper')

@section('content')


<!--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
        Launch demo modal
</button>-->

<!-- Modal -->
<!--<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="panel panel-default">
                <div class="panel-heading">Login</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
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

                            <div class="col-md-6">
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
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>-->


<div class="jumbotron jumbotron-fluid bdo-jumbo">
    <div class="container">
        <h1 class="display-5">Frequently asked questions</h1>
        <p class="lead text-white">What our customers often ask us</p>
        <i class="fa fa-question-circle-o" aria-hidden="true"></i>
    </div>
</div>

<div class="container">
        <ul class="nav justify-content-center bdo-faq-headings">
            <li class="nav-item underline-on-hover">
                <a class="nav-link" href="#">TRAVEL INFO</a>
            </li>
            <li class="nav-item underline-on-hover">
                <a class="nav-link" href="#">CHANGES AND INSURANCE</a>
            </li>
            <li class="nav-item underline-on-hover">
                <a class="nav-link" href="#">RATES</a>
            </li>
            <li class="nav-item underline-on-hover">
                <a class="nav-link" href="#">BAGGAGE</a>
            </li>
            <li class="nav-item underline-on-hover">
                <a class="nav-link" href="#">SCHEDULES AND DELAYS</a>
            </li>
            <li class="nav-item underline-on-hover">
                <a class="nav-link" href="#">SPECIFIC NEEDS</a>
            </li>
            <li class="nav-item underline-on-hover">
                <a class="nav-link" href="#">MINORS</a>
            </li>
        </ul>
</div>


<div class="container">
<div id="accordion" role="tablist">
    <div class="card">
        <div class="card-header" role="tab" id="headingOne">
        <h5 class="mb-0">
        <a href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class="headingOne bdo-accord" data-toggle="collapse">
        What's Big Day Out?</a>
        </h5>
    </div>
        <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
        <div class="card-body">
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
        </div>
        </div>
        </div>
        <div class="card">
        <div class="card-header" role="tab" id="headingTwo">
        <h5 class="mb-0">
        <a class="collapsed bdo-accord" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        How far in advance should I book?
        </a>
        </h5>
        </div>
        <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo " data-parent="#accordion">
        <div class="card-body">
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
        </div>
        </div>
        </div>
        <div class="card">
        <div class="card-header" role="tab" id="headingThree">
        <h5 class="mb-0">
        <a class="collapsed bdo-accord" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        Can I choose my destination?
        </a>
        </h5>
        </div>
        <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
        <div class="card-body">
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
        </div>
        </div>
        </div>
</div>


<div class="card">
        <div class="card-header" role="tab" id="headingFour">
        <h5 class="mb-0">
        <a class="collapsed bdo-accord" data-toggle="collapse" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
        When will I know what I'm going to do?
        </a>
        </h5>
        </div>
        <div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingFour" data-parent="#accordion">
        <div class="card-body">
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
        </div>
        </div>
        </div>
        <div class="card">
        <div class="card-header" role="tab" id="headingFive">
        <h5 class="mb-0">
        <a class="collapsed bdo-accord" data-toggle="collapse" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
        Do I need my passport or just my ID is fine?
        </a>
        </h5>
        </div>
        <div id="collapseFive" class="collapse" role="tabpanel" aria-labelledby="headingFive" data-parent="#accordion">
        <div class="card-body">
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
        </div>
        </div>
        </div>
        <div class="card">
        <div class="card-header" role="tab" id="headingSix">
        <h5 class="mb-0">
        <a class="collapsed bdo-accord" data-toggle="collapse" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
        What is the meal plan included?
        </a>
        </h5>
        </div>
        <div id="collapseSix" class="collapse" role="tabpanel" aria-labelledby="headingTSix" data-parent="#accordion">
        <div class="card-body">
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
        </div>
        </div>
</div>



<div class="card">
    <div class="card-header" role="tab" id="headingSeven">
        <h5 class="mb-0">
        <a class="collapsed bdo-accord" data-toggle="collapse" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
        How far in advance should I book?
        </a>
        </h5>
</div>
<div id="collapseSeven" class="collapse" role="tabpanel" aria-labelledby="headingSeven" data-parent="#accordion">
    <div class="card-body">
    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
        </div>
        </div>
        </div>
        <div class="card">
        <div class="card-header" role="tab" id="headingEight">
        <h5 class="mb-0">
        <a class="collapsed bdo-accord" data-toggle="collapse" href="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
        Can I be just by myself?
        </a>
        </h5>
        </div>
        <div id="collapseEight" class="collapse" role="tabpanel" aria-labelledby="headingEight" data-parent="#accordion">
        <div class="card-body">
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
        </div>
        </div>
        </div>
        <div class="card">
        <div class="card-header" role="tab" id="headingNine">
        <h5 class="mb-0 text-muted">
        <a class="collapsed bdo-accord" data-toggle="collapse" href="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
        Can I give a Big Day Out without choosing a date?
        </a>
        </h5>
        </div>
        <div id="collapseNine" class="collapse" role="tabpanel" aria-labelledby="headingNine" data-parent="#accordion">
        <div class="card-body">
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
        </div>
        </div>
        </div>
        </div>
</div>


<div class="container-fluid mt-2">
    <div class="row ">
        <div class="col-md-12 bdo-faq-fun">

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