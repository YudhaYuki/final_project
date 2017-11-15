@extends('wrapper')

@section('content')


<div class="container">
	<section id="contact">
		<div class="section-content mt-5 ">
			<h1 class="section-header bdo-login-heading">Any Questions? Get in touch.</h1>
		</div>
        <div class="form-contact bdo-contact-form">
			<div class="container">
				<form action="{{ url('contact') }}" method="POST">
                {{ csrf_field() }}

					<div class="row">
						<div class="col-md-6 form-line">
							<div class="form-group">
								<label for="full_name">Your name</label>
								<input type="text" class="form-control" name="full_name" id="full_name" placeholder="Enter Name">
							</div>

                            <div class="form-group">
								<label for="email">Email Address</label>
								<input type="email" class="form-control" id="email" name="email" placeholder="Enter Email">
							</div>

                            <div class="form-group">
								<label for="subject">Subject</label>
								<input type="text" class="form-control" id="subject" name="subject" placeholder="Enter Subject">
							</div>
						</div>
                        <div class="col-md-6">
							<div class="form-group">
								<label for="message">Message</label>
								<textarea class="form-control" name="message" value="" id="message" cols="50" placeholder="Enter Your Message"></textarea>
							</div>
                            <div>
								<button type="submit" class="btn btn-default submit bdo-send"><i class="fa fa-paper-plane" aria-hidden="true"></i>&nbsp;Send Message</button>
                            </div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</section>
    </div>

    <div class="incentive">
    <div class="container">
        <div class="row mt-5">
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


    