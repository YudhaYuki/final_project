@extends('wrapper')

@section('content')
  <div class="container-fluid mt-5 mb-5">
      <section id="payment-content">
        <form action="DoDirectPayment.php" method="POST">
          <h2 class="text-center">Pay with debit or credit card</h2>
          <hr/>
          <h3 class="text-center">Billing Information</h3>
              <input type="hidden" name="paymentType" value="Sale"/>
                <input type="hidden" name="id" value=""/>
                <div class="form-group row">
                  <label for="firstName" class="col-2 col-form-label">First Name</label>
                  <div class="col-10">
                    <input class="form-control" type="text" name="firstName" id="name" placeholder="Enter first name">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="lastName" class="col-2 col-form-label">Last Name</label>
                  <div class="col-10">
                    <input class="form-control" type="text" name="lastName" id="name" placeholder="Enter last name">
                  </div>
                </div>
                

                <div class="form-group row">
                  <label for="creditCardType" class="col-2 col-form-label">Card Type</label>
                    <div class="col-10">
                      <select name="creditCardType" class="form-control custom-select">
                        <option value="Visa" selected="selected">Visa</option>
                        <option value="MasterCard">MasterCard</option>
                        <option value="Discover">Discover</option>
                        <option value="Amex">American Express</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                  <label for="creditCardNumber" class="col-2 col-form-label">Card Number</label>
                  <div class="col-10">
                    <input type="text" name="creditCardNumber" id="cardno" placeholder="Enter card number" required="true" class="form-control">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="expDateMonth" class="col-2 col-form-label">Expiry Date</label>
                  <div class="col-4">
                    <select name="expDateMonth" class="form-control custom-select">
                     <option value="01">01</option>
                     <option value="02">02</option>
                     <option value="03">03</option>
                     <option value="04">04</option>
                     <option value="05">05</option>
                     <option value="06">06</option>
                     <option value="07">07</option>
                     <option value="08">08</option>
                     <option value="09">09</option>
                     <option value="10">10</option>
                     <option value="11">11</option>
                     <option value="12">12</option>
                   </select>
                  </div>
                    <div class="col-6">
                      <select name="expDateYear" class="form-control custom-select">
                      <option value="2017">2017</option>
                      <option value="2018">2018</option>
                      <option value="2019">2019</option>
                      <option value="2020">2020</option>
                      <option value="2021">2021</option>
                      <option value="2022">2022</option>
                    </select>
                    </div>
                </div>

                <div class="form-group row">
                  <label for="cvv2Number" class="col-2 col-form-label">CVV</label>
                  <div class="col-10">
                    <input type="text" name="cvv2Number" id="cvv" placeholder="Enter CVV number" required="true" class="form-control">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="amount" class="col-2 col-form-label">Amount(&#8364;)</label>
                  <div class="col-10">
                    <input type="text" name="amount" id="name" placeholder="enter amount " value="" disabled="true" class="form-control">
                  </div>
                </div>

                <h3 class="text-center">Billing Address</h3>

                <div class="form-group row">
                  <label for="address1" class="col-2 col-form-label">Address 1</label>
                  <div class="col-10">
                    <input type="text" name="address1" id="name" placeholder="Enter address " class="form-control">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="address2" class="col-2 col-form-label">Address 1</label>
                  <div class="col-10">
                    <input type="text" name="address2" id="name" placeholder="Enter address " class="form-control">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="city" class="col-2 col-form-label">City</label>
                  <div class="col-10">
                    <input type="text" name="city" id="name" placeholder="Enter city " class="form-control">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="zip" class="col-2 col-form-label">Postcode</label>
                  <div class="col-10">
                    <input type="text" name="zip" id="name" placeholder="Enter postcode " class="form-control">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="country" class="col-2 col-form-label">Country</label>
                  <div class="col-10">
                    <input type="text" name="country" id="name" placeholder="Enter country " class="form-control">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="phone" class="col-2 col-form-label">Phone No</label>
                  <div class="col-10">
                    <input type="text" name="phone" id="name" placeholder="Enter phone number " class="form-control">
                  </div>
                </div>
                <div class="goToRegister text-center mt-5 mb-5">
                  <a href="{{ route('register') }}" class="btn btn-primary bdo-btn-reg">Pay Now</a>
                </div>
      </section>
  </div> 


  <div class="incentive mt-5">
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

<div class="selling">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 bdo-tag">
                <div class="bdo-sell">
                    <h4 class="sell-heading">Suprise Yourself.</h4><br>
                    <h4 class="sell-heading2">Make it a <br> big day out.</h4>
                </div>
            </div>
            <div class="col-md-6 bdo-tag2">
                <div class="bdo-sell2">
                    
                </div>
            </div>
        </div>
    </div>
</div>

<div class="booknow">
    <div class="container-fluid mt-5 mb-5">
        <div class="row mt-5 mb-5">
            <div class="col-md-4 mt-5">
                <div class="bdo-book text-center">
                    <i class="fa fa-superpowers mb-2" aria-hidden="true"></i>
                    <h4>THE BEST <br> ACTIVITIES</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A iure, rem sit harum, minima non dolor porro sunt iusto eaque ullam eveniet optio praesentium temporibus repellendus dolores reiciendis magni vel.</p>
                </div>
            </div>
            <div class="col-md-4 mt-5">
                <div class="bdo-book2 text-center">
                    <i class="fa fa-handshake-o mb-2" aria-hidden="true"></i>
                    <h4>WE'LL HANDLE THE<br> LOGISTICS</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A iure, rem sit harum, minima non dolor porro sunt iusto eaque ullam eveniet optio praesentium temporibus repellendus dolores reiciendis magni vel.</p>
                </div>
            </div>
            <div class="col-md-4 mt-5">
                <div class="bdo-book3 text-center">
                    <i class="fa fa-calendar-plus-o mb-2" aria-hidden="true"></i>
                    <h4>ANY DAY OF <br> THE WEEK</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A iure, rem sit harum, minima non dolor porro sunt iusto eaque ullam eveniet optio praesentium temporibus repellendus dolores reiciendis magni vel.</p>
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