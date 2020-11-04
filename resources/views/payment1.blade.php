@extends('layouts.app')

@section('head')
    <script src="https://js.stripe.com/v3/"></script>
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"> --}}

    <style>
        .StripeElement {
            box-sizing: border-box;

            height: 40px;

            padding: 10px 12px;

            border: 1px solid transparent;
            border-radius: 4px;
            background-color: white;

            box-shadow: 0 1px 3px 0 #e6ebf1;
            -webkit-transition: box-shadow 150ms ease;
            transition: box-shadow 150ms ease;
        }

        .StripeElement--focus {
            box-shadow: 0 1px 3px 0 #cfd7df;
        }

        .StripeElement--invalid {
            border-color: #fa755a;
        }

        .StripeElement--webkit-autofill {
            background-color: #fefde5 !important;
        }
    </style>
@endsection


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Subscribe</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                        <select name="plan" class="form-control" id="subscription-plan">
                            @foreach($plans as $key=>$plan)
                                <option value="{{$key}}">{{$plan}}</option>
                            @endforeach
                        </select>

                    <input placeholder="Card Holder" class="form-control" id="card-holder-name" type="text">

                    <!-- Stripe Elements Placeholder -->
                    <div id="card-element"></div>

                    <button class="mt-2 btn btn-sm btn-primary" id="card-button" data-secret="{{ $intent->client_secret }}">
                        Subscribe
                    </button>

                    {{-- <button  type="button" class="mt-2 btn btn-sm btn-primary" <a href="{{URL::to('/localp')}}">Pay from Ethiopia</a></button> --}}
                    {{-- <h6><a href="{{URL::to('/localp')}}">Pay from Ethiopia</a></h6> --}}
                </div>
            </div>
        </div>
    </div>
</div>

<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center" style="background-color:#000012">
{{-- <button  type="button" class="btn btn-primary" <a href="{{ route('localp')}}">Pay With Local Bank</a></button> --}}
    <div class="d-inline-flex p-2">
         <h5><a href="{{URL::to('/localp')}}">Pay from Ethiopia</a></h5>
    </div>
    <h1 class="display-4">Pricing</h1>

  </div>

  <div class="container">
    <div class="card-deck mb-3 text-center">
      <div class="card mb-4 box-shadow">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal">Basic</h4>
        </div>
        <div class="card-body">
          <h1 class="card-title pricing-card-title">$9.9 <small class="text-muted">/ mo</small></h1>
          <ul class="list-unstyled mt-3 mb-4">
            <li>720 resolution</li>
            <li>1 Screens at a time</li>
            <li>Watch on your laptop, TV, phone and tablet</li>
            <li>Unlimited movies and TV shows</li>
            <li>Cancel anytime</li>
          </ul>

        </div>
      </div>
      <div class="card mb-4 box-shadow">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal">Standard</h4>
        </div>
        <div class="card-body">
          <h1 class="card-title pricing-card-title">$15 <small class="text-muted">/ mo</small></h1>
          <ul class="list-unstyled mt-3 mb-4">
            <li>HD Available</li>
            <li>2 Screens at the same time</li>
            <li>Watch on your laptop,TV,phone and tablet</li>
            <li>Unlimited movies and TV shows</li>
            <li>Cancel anytime</li>
          </ul>

        </div>
      </div>
      <div class="card mb-4 box-shadow">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal">Enterprise</h4>
        </div>
        <div class="card-body">
          <h1 class="card-title pricing-card-title"> <small class="text-muted">Contact Us </small></h1>
          <ul class="list-unstyled mt-3 mb-4">
            <li>Ultra HD Available</li>
            <li>multiple Screens at the same time</li>
            <li>Watch on your laptop, TV, phone and tablet</li>
            <li>Unlimited movies and TV shows</li>
            <li>Help center access</li>
          </ul>

        </div>
      </div>
    </div>


  </div>
@endsection

@section('js')
    <script>
        window.addEventListener('load', function() {


            const stripe = Stripe('{{env('STRIPE_KEY')}}');

            const elements = stripe.elements();
            const cardElement = elements.create('card');

            cardElement.mount('#card-element');

            const cardHolderName = document.getElementById('card-holder-name');
            const cardButton = document.getElementById('card-button');
            const clientSecret = cardButton.dataset.secret;

            const plan = document.getElementById('subscription-plan').value;

            cardButton.addEventListener('click', async (e) => {
                const { setupIntent, error } = await stripe.handleCardSetup(
                    clientSecret, cardElement, {
                        payment_method_data: {
                            billing_details: { name: cardHolderName.value }
                        }
                    }
                );

                if (error) {
                    // Display "error.message" to the user...
                } else {
                    // The card has been verified successfully...
                    console.log('handling success', setupIntent.payment_method);

                    axios.post('/subscribe',{
                        payment_method: setupIntent.payment_method,
                        plan : plan
                    }).then((data)=>{
                        location.replace(data.data.success_url)
                    });
                }
            });
        })




    </script>
@endsection
