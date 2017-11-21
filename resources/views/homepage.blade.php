@extends('wrapper')

@section('content')


        <div class="hero">
            <div class="container">
                <div class="row ">
                    <div class="form">
                        <div class="row ">
                            <div class="col-md-12 text-center bdo-banner">
                                <h1><span>BigDayOut</span><br>Spontaneous Prague Adventures</h1>
                                <p></p>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-4 col-12">
                                <form action="{{ action('activityController@listing') }}" method="get">
                                    <div class="form-group bdo-group">
                                    <label for="groupSize">Group Size</label>
                                        <select class="form-control" name="participants" id="exampleFormControlSelect1">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                            <option>6</option>
                                            <option>7</option>
                                            <option>8</option>
                                            <option>9</option>
                                            <option>10</option>
                                        </select>
                                    </div>
                                    </div><br>
                                    <div class="col-md-4 col-12 datepicker-bdo">
                                    <label for="groupSize">Day</label>
                                        <input name="date" type="text" id="datepicker">
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <button type="submit" class="btn btn-primary bdo-btn">Let's Go</button>
                                    <div>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </div>





<div class="steps">
    <div class="container mt-5 mb-3">
        <div class="row">
            <div class="col-md-12 text-center bdo-banner">
                <h2>How It Works</h2>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-md-4 text-center">
                <div class="steps">
                    <h3 class="bdo-banner">Fill Out <br>Group Info Form</h3>
                    <i class="fa fa-check-square-o" aria-hidden="true"></i>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident, est doloribus quas neque magnam maxime animi perferendis quis alias a quidem quos corporis explicabo recusandae laudantium aliquid earum aperiam vitae.</p>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="steps">
                    <h3 class="bdo-banner">Select/Deselect Your Favourite Activities</h3>
                    <i class="fa fa-mouse-pointer" aria-hidden="true"></i>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident, est doloribus quas neque magnam maxime animi perferendis quis alias a quidem quos corporis explicabo recusandae laudantium aliquid earum aperiam vitae.</p>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="steps">
                    <h3 class="bdo-banner">Register With The Good Folks At BigDayOut!</h3>
                    <i class="fa fa-registered" aria-hidden="true"></i>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident, est doloribus quas neque magnam maxime animi perferendis quis alias a quidem quos corporis explicabo recusandae laudantium aliquid earum aperiam vitae.</p>
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="learn text-center mb-5">
                    <a href="{{ action('HomeController@faq') }}" class="btn btn-primary bdo-learn">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</div><!--closes steps section -->


  



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