@extends('wrapper')

@section('content')

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


@endsection