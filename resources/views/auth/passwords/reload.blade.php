@include('dashboard.header')




<div class="row">
    <div class="col-12">
        <div class="crypt-dash-withdraw mt-3 d-block" id="bitcoin">
            <div class="crypt-withdraw-heading">
                <div class="row">
                    <div class="col-md-2">
                    </div>

                    <div class="col-md-4 col-sm-12">
                    </div>
                </div>
            </div>
            <div class="crypt-withdraw-body bg-white">
                <div class="row">
                    <div class="col-md-3">
                        <div class="nav flex-column nav-pills" role="tablist" aria-orientation="vertical">
                            <a
                                    class="nav-link active"
                                    data-toggle="pill"
                                    href="{{url('deposits')}}"
                                    role="tab"
                                    aria-controls="v-pills-zilliqua-btc-deposit"
                                    aria-selected="true" style="color: green">
                                <i class="pe-7s-bottom-arrow" style="color: green"></i> Deposit
                            </a>

                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="tab-content" id="v-pills-zilliqua-btc-tabContent">

                            
                            
                            <!-- deposit -->
                            <div class="tab-pane fade show active" id="v-pills-zilliqua-btc-deposit" role="tabpanel"
                                 aria-labelledby="v-pills-zilliqua-btc-deposit-tab">

                                 @if (session('status'))
                                 <div class="alert alert-success" role="alert">
                                     {{ session('status') }}
                                 </div>
                             @endif
                             @if($message = Session::get('success'))
                               <div class="alert alert-success">
                            <p>{{$message}}</p>
           </div>
        @endif
            <h6 class="text-uppercase">Deposit Funds To Your Account</h6>
            <p><a href="{{url('buy-crypto')}}" class="crypt-up">Buy Crypto Now!</a></p>

    <form class="deposit-form" method="post" action="{{url('get-deposit')}}">         
        {{csrf_field()}}
     <div class="input-group input-text-select mb-3">
     <div class="input-group-prepend">
     <input placeholder="Amount" name="amount" type="number" class="form-control crypt-input-lg" required>
    </div>
   
  </div>
  <h6 class="text-uppercase"> Choose Payment Method from the list below</h6>

                                    <div class="form-group mt-2">
                                        <select class="crypt-image-select"  name="item" required id="paymentType">
                                            <option value="">Choose A Payment Option</option>
                                            <option value="Bitcoin">BITCOIN</option>
                                            <option value="Ethereum">ETHEREUM</option>
                                            <option value="Usdt">USDT</option>
                                        </select>
                                    </div>

                                    <style>.pd-20 {
                                            padding: 20px;
                                        }</style>
                                    <div class="form-group mt-2 card pd-20" style="display: none;" id="bankWrapper">
                                        <label>BANK NAME: <strong> SOME BANK NAME </strong></label> <br>
                                        <label>ACCOUNT NUMBER: <strong> SOME BANK NAME </strong></label> <br>
                                        <label>ACCOUNT NAME: <strong> SOME BANK NAME </strong> </label>
                                    </div>

                                    <div class="form-group mt-2 card pd-20" style="display: none;" id="supportWrapper">
                                        <label>Please Contact Affordableinvprogram.net For Payment Details</label> <br>
                                        <label>Thank You.</label>
                                    </div>

                                    <div class="mt-2 card pd-20" style="display: none;" id="cryptoWrapper">

                                        <p class="text-danger">Choose and copy your preferred crypto option:</p> <br>

                                        <br> <br>


                                                                                    
                                        <p class="text-danger">Once your payment has been confirmed your account will be
                                            funded. <br>
                                            Please confirm your amount properly before depositing. <br> Thank You.
                                        </p>
                                    </div>

                                    <input type="submit" name="" class="crypt-button-green-full"
                                           value="Proceed To Payment" style="background-color: green">
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

	<footer>
		
	</footer>



    
    {{-- <script src="https://s3.tradingview.com/tv.js"></script>
    <script src="assets/js/bundle.js"></script><script type="application/javascript"
        src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/130527/qrcode.js?v=1200"></script>
<script type="application/javascript" href="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {

        $('#paymentType').on('change', function () {
            if ($(this).val() == 'Bank Transfer') {
                $("#bankWrapper").attr("style", 'display:none');
                $("#supportWrapper").attr("style", 'display:block');
                $("#cryptoWrapper").attr("style", 'display:none');

            } else if ($(this).val() == 'Cash App') {
                $("#bankWrapper").attr("style", 'display:none');
                $("#supportWrapper").attr("style", 'display:block');
                $("#cryptoWrapper").attr("style", 'display:none');


            } else if ($(this).val() == 'Crypto Currency') {
                $("#cryptoWrapper").attr("style", 'display:block');
                $("#bankWrapper").attr("style", 'display:none');
                $("#supportWrapper").attr("style", 'display:none');

                generateCode();


            } else if ($(this).val() == 'Money Gram') {
                $("#bankWrapper").attr("style", 'display:none');
                $("#supportWrapper").attr("style", 'display:block');
                $("#cryptoWrapper").attr("style", 'display:none');


            } else if ($(this).val() == 'PayPal') {
                $("#bankWrapper").attr("style", 'display:none');
                $("#supportWrapper").attr("style", 'display:block');
                $("#cryptoWrapper").attr("style", 'display:none');


            } else if ($(this).val() == 'Western Union') {
                $("#bankWrapper").attr("style", 'display:none');
                $("#supportWrapper").attr("style", 'display:block');
                $("#cryptoWrapper").attr("style", 'display:none');

            } else {
                $("#bankWrapper").attr("style", 'display:none');
                $("#supportWrapper").attr("style", 'display:none');
                $("#cryptoWrapper").attr("style", 'display:none');

            }

        });

    })

    function generateCode() {
        let testimonials = $('.btc_qrcode');
        for (let i = 0; i < testimonials.length; i++) {
            // Using $() to re-wrap the element.
            let wallet = $(testimonials[i]).data('wallet');
            $(testimonials[i]).empty()
            $(testimonials[i]).css({'width': 180, 'height': 180})
            $(testimonials[i]).qrcode({width: 180, height: 180, text: wallet});
            $(testimonials[i]).show();
        }
    }
</script> --}}
@include('dashboard.footer')