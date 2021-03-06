<div id="pricing-plans-background-image">
             <div class="container">
                     <div class="registration-steps-page-container">

                          <div class="registration-billing-form">
                              <div class="row">
                                  <div class="col-md">

                                      <div class="jumbotron jumbotron-fluid jumbotron-pro jumbotron-selected">
                                        <div class="container">
                                           <i class="fas fa-check-circle"></i>
                                            <img src="{{ asset('images/demo/billing-credit-card.png')}}" alt="Credit Card">
                                            <h6 class="light-weight-heading">Pay with Credit Card</h6>
                                        </div>
                                      </div><!-- close .jumbotron -->

                                  </div><!-- close .col-md -->
                                  <div class="col-md">

                                      <div class="jumbotron jumbotron-fluid jumbotron-pro">
                                        <div class="container">
                                            <img src="{{asset('images/demo/billing-paypal.png')}}" alt="Credit Card">
                                            <h6 class="light-weight-heading">Pay with PayPal</h6>
                                        </div>
                                      </div><!-- close .jumbotron -->

                                  </div><!-- close .col-md -->
                              </div><!-- close .row -->


                             <div class="row">
                                      <div class="billing-form-pro">
                                        <form>
                                            <div class="form-group">
                                              <label for="cardholder" class="col-form-label">Cardholder Name:</label>
                                                <input type="text" class="form-control" name="cardHolderName" id="cardholder">
                                            </div>

                                            <div class="form-group">
                                              <label for="cardnumber" class="col-form-label">Card Number:</label>
                                                <input type="text" class="form-control" id="cardnumber" name="cardNumber">
                                            </div>

                                              <div class="row adjust-margin-top adjust-margin-bottom">
                                                  <div class="col-sm">
                                                        <div class="form-group">
                                                          <label for="expire" class="col-form-label">Expiration Date:</label>
                                                            <input type="text" class="form-control" id="expire" placeholder="MM/YY" name="expiredDate">
                                                        </div>
                                                  </div>
                                                  <div class="col-sm">
                                                        <div class="form-group">
                                                          <label for="ccv" class="col-form-label">CVV:</label>
                                                            <input type="text" class="form-control" id="ccv" placeholder="XXX" name="ccv">
                                                        </div>
                                                  </div>

                                                  <div class="col-sm">
                                                        <div class="form-group">
                                                          <label for="zip" class="col-form-label">Zip:</label>
                                                            <input type="text" class="form-control" id="zip" placeholder="00000" name="zip">
                                                         </div>
                                                  </div>

                                              </div><!-- close .row -->

                                            <div class="form-group">

                                              <div class="billing-plan-container">
                                                  <h5>Your Plan: <a href="#" class="changePlan">Change plan</a></h5>
                                                 <h3> <span id="label-total-plan">STANDARD</span>  <span class="total" id="label-total-cost">$12.99</span><span class="duration">/month</span></h3>
                                              </div><!-- close .billing-plan-container -->

                                                <a href="#" class="btn btn-green-pro btn-signup" >Sign Up</a>
                                                <div class="clearfix"></div>
                                            </div>
                                        </form>
                                      </div>
                             </div><!-- close .row -->

                          </div><!-- close .registration-billing-form -->

                     </div><!-- close .registration-steps-page-container -->

             </div><!-- close .container -->
         </div>
