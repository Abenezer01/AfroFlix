<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Anime Template">
    <meta name="keywords" content="Anime, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('fronta.layout.css')
    <script src="https://js.stripe.com/v3/"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header">
        {{-- @include('fronta.layout.menu') --}}
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
    </header>
    <!-- Header End -->

    <!-- Normal Breadcrumb Begin -->
    <section class="normal-breadcrumb set-bg" data-setbg="img/normal-breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="normal__breadcrumb__text">
                        <h2>Subscribe</h2>
                        <p>Welcome to AfroFlix ENT.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="login spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8"">

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
                     </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Section Begin -->
    <footer class="footer">
      @include('fronta.layout.footer')
      </footer>
      <!-- Footer Section End -->

    <!-- Js Plugins -->
    @include('fronta.layout.script')

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


</body>

</html>
