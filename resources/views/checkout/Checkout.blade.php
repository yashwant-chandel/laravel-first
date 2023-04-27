@extends('home')
@section('insert')

<div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">
        <div class="card">
          <div class="card-body p-4">

            <div class="row">

              <div class="col-lg-12">
              <div class="col-lg-12">
                <div class="container col-6">
                <div class="card text-white rounded-3">
                  <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                      <h5 class="mb-0 text-dark">Card details</h5>
                    </div>

                    <form class="mt-4" method="post" id="checkout" action="{{ url('Cart/Checkoutproc') }}">
                        @csrf
                        <div class="form-group ">
                            <label for="fullname" class="text-dark"> Enter your name </label>
                            <input type="text" id="fullname" name="fullname" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="email" class="text-dark">Enter your email</label>
                            <input type="email" id="email" name="email" class="form-control">
                        </div>
                        <div class="form-group my-2">
                            <div id="card-elements"></div>
                        </div>
                     <button type="submit" id="checkoutbutton" class="btn btn-info btn-block my-2" data-secret="{{ $client_secret ?? '' }}" >
                    </form>
                      <div class="d-flex justify-content-between">
                        <span>Checkout <i class="fas fa-long-arrow-alt-right ms-2"></i></span>
                      </div>
                    </button>

                  </div>
            </div>
                </div>

              </div>

            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section> 
<script src="https://js.stripe.com/v3/"></script>
<script>
     const stripe = Stripe('{{ env('STRIPE_KEY') }}');
    const elements = stripe.elements();
    const cardElement = elements.create('card');
    cardElement.mount('#card-elements');

    const form = document.getElementById('checkout');
    
    form.addEventListener('submit', async (e) =>{
      e.preventDefault();
      const fullname = document.getElementById('fullname');
      const email = document.getElementById('email');
      const checkout = document.getElementById('checkoutbutton');

      const { setupIntent, error } = await stripe.confirmCardSetup(
            checkout.dataset.secret, {
                payment_method: {
                    card: cardElement,
                    billing_details: {
                        name: fullname.value
                    }   
                }
            }
        )
        if(error){
          console.log('error');
        }{
          console.log(setupIntent);
          $('#card-elements').append('<input type="text" name="token" value="'+setupIntent.payment_method+'">');
          form.submit();
        }


    })
   
  
</script>
@endsection