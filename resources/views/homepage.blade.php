@extends('wrapper')

@section('content')


<div class="container">
<div class="row">
    <div class="col">
        <div class="bdo-chooser">
            <form action="activity" method="post" class="mx-auto px-4 py-3 bdo-chooser__form">
                <h2 class="text-center">Your Big Day Out</h2>
                <div class="form-row my-4">
                    <div class="col">
                        <input type="number" class="form-control" placeholder="Group size" min="1" max="12">
                    </div>
                    <div class="col">
                        <input type="date" class="form-control">
                    </div>
                </div>
                <button class="btn btn-primary btn-lg btn-block">Let’s go!</button>
            </form>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <h2>How It Works</h2>
    </div>
    <div class="col-4">
        <img src="images/bgjump.jpg" alt="">
        <h3>Select your group</h3>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Hic placeat, animi explicabo, dolorum.</p>
    </div>
    <div class="col-4">
        <img src="http://satyr.io/200x200" alt="">
        <h3>Filter activities</h3>
        <p>lorem ipsum</p>
    </div>
    <div class="col-4">
        <img src="http://satyr.io/200x200" alt="">
        <h3>Register &amp; Pay</h3>
        <p>lorem ipsum blah </p>
    </div>
</div>
</div>
<div class="container-fluid bg-dark bdo-footer">
<div class="row justify-content-center">
    <div class="col-4">
        <ul class="nav justify-content-center">
            <li class="nav-item active">
                <a class="nav-link bdo-footer__link" href="#">How It Works<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link bdo-footer__link" href="#">FAQ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link bdo-footer__link" href="#">Contact</a>
            </li>
        </ul>
    </div>
</div>
</div>


@endsection

@section('page_title') Home @endsection