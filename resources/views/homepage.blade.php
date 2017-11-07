@extends('wrapper')

@section('content')


        <div class="hero">
            <div class="container">
                <div class="row ">
                    <div class="form">
                        <div class="row ">
                            <div class="col-md-12 text-center bdo-banner">
                                <h1>Your Big Day Out</h1>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-4 col-12">
                                <div class="form-group bdo-group">
                                <label for="groupSize">Group Size</label>
                                    <select class="form-control" id="exampleFormControlSelect1">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                            <label for="groupSize">Group Size</label>
                                    <input type="date" class="form-control" id="datepicker">
                            </div>
                            <div class="col-md-4">
                                <a href="{{ action('activityController@listing') }}" class="btn btn-primary bdo-btn">Let's Go</a>
                            <div>
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


<div class="incentive-two">

</div>


@endsection