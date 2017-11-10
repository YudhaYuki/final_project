@extends('wrapper')

@section('content')

<div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="listing-heading text-center mt-5">
                        <h1>List of activities</h1>
                        <p>Deselect activities you're not fond of here</p>
                </div>
            </div>
            <div class="col-md-12">
                <div class="search-activity text-center mt-5 mb-5">
                        <input type="text" id="search"/><br><br>
                        <button id="btn"> Search activity </button>
                </div>
            </div>
        </div>
</div><!-- closes container -->


<div class="container">
    <div class="row">
        @foreach($activities as $activity)
            
            <div class="col-lg-4 col-sm-3 mb-5 text-center">
                <div class="card" style="width: 20rem;">
                    <div class="wrap">
                        <img class="card-img-top img-fluid" src="{{ asset('uploads/' .$activity->picture) }}" alt="Card image cap">
                        <div class="image-overlay click_overlay">
                            <div id="remove_activity">
                                <p>REMOVE ACTIVITY</p>    
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title bdo-card-text"><a href="{{ route('activity detail', ['id' => $activity->id]) }}">{{ $activity->name }} </a></h4>
                        <!-- <p class="card-text"><a href="{{ route('activity detail', ['id' => $activity->id]) }}">{{ $activity->description }} </a></p> -->
                        <a href="{{ route('activity detail', ['id' => $activity->id]) }}" class="btn btn-primary bdo-btn-listing">More details</a>
                    </div>
                </div>
            </div>

        
            
        
        <!-- 
        <li>
            <a href="{{ route('activity detail', ['id' => $activity->id]) }}">
                {{ $activity->name }} <img src="{{ asset('uploads/' .$activity->picture) }}"> ({{ $activity->price }})
            </a>
        </li> 
        -->
        @endforeach

    </div><!-- closes row -->
</div><!-- closes container -->

<div class="container">

    <div class="row">
        <div class="col-md-12 mb-5">
            <div class="goToRegister text-center mt-5 mb-5">
                <a href="{{ action('HomeController@getContact') }}" class="btn btn-primary bdo-btn-reg">Next</a>
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



















    <script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>


<script>

$('#btn').click(function() {

            var s = $('#search').val();
            
            $.ajax({
                'url': '/activities/search',
                'type': 'post',
                'data' : {
                    'search' : s
                }
            }).done(function(data){

                console.log(data.length);

                $('ul').empty();

                for(var i = 0; i < data.length; i++) {
                    $('ul').append(
                        '<li>'+ 
                            '<a href="">' + data[i].name + '(' +data[i].picture+ ')</a>'+ 
                         '</li>'
                    );
                }
            });

            // console.log(s);
        });

</script>
@endsection

</div>

@section('page_title') List of activities @endsection