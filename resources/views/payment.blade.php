@extends('wrapper')

@section('content')
  <div class="container-fluid">
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

                <div class="text-center">
                  <a href="#" class="btn bdo-btn" id="buynow">Pay Now</a>
                </div>
      </section>
  </div> 


  @endsection