@extends('wrapper')

@section('content')

    <div class="container">
        <div class="row">
            <div class "col-md-12">
                <h2>Contact us</h2>
            </div>
        </div><!-- closes row -->
        <div class="row">
            <div class "col-md-8 col-md-offset-2">
                <div class="form-contact">
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
                </div>
            </div>
        </div><!-- closes row -->
    </div><!-- closes container -->


@endsection