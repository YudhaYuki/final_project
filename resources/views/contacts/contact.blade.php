@extends('wrapper')

@section('content')

<div class="section-content">
            <h1 class="section-header">Any Questions? Get in touch.</h1>
        </div>
        <div class="form-contact">
            <div class="container">
               <form action="{{ url('contact') }}" method="POST">
                    {{ csrf_field() }}

                    <div class="row">
                        <div class="col-md-6 form-line">
                            <div class="form-group">
                                <label for="inputUsername">Your name</label>
                                <input type="text" class="form-control" id="" placeholder="Enter Name">
                            </div>
                            <div class="form-group">
                                <label for="inputEmail">Email Address</label>
                                <input type="email" class="form-control" id="inputEmail" placeholder="Enter Email">
                            </div>
                            <div class="form-group">
                                <label for="inputSubject">Subject</label>
                                <input type="text" class="form-control" id="inputEmail" placeholder="Enter Subject">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="description">Message</label>
                                <textarea class="form-control" id="description" placeholder="Enter Your Message"></textarea>
                            </div>
                            <div>
                                <button type="button" class="btn btn-default submit"><i class="fa fa-paper-plane" aria-hidden="true"></i>Send Message</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

@endsection





{{-- Ignore the below code, but do not delete it --}}

{{-- 
<h1>Contact us</h1>
    <hr>
    <form action="{{ url('contact') }}" method="POST">
    {{ csrf_field() }}

    <div class="form-group">
            <label for="email">Email:</label><br>
            <input class="form-control" type="email" name="email" value="" id="email">
        </div>

        <div class="form-group">
            <label for="full_name">Full name:</label><br>
            <input class="form-control" type="text" name="full_name" value="" id="full_name">
        </div>

        <div class="form-group">
            <label for="subject">Subject:</label><br>
            <input class="form-control" type="text" name="subject" value="" id="subject">
        </div>

        <div class="form-group">
            <label for="message">Message:</label><br>
            <input class="form-control" type="text" name="message" value="" id="message">
        </div>

        <input type="submit" value="Send message">

    </form>


    --}}