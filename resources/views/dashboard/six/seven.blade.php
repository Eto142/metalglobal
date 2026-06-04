@include('dashboard.header')

<br><br>


 
<h1 style="text-align:center;">Make Deposit</h1>
<div style="float:center" class="row">
<div class="col-sm-16 col-md-16">
<div class="card">
  <div class="card-header">
  <span><h3 style="color:crimson;text-align:center"></h3></span>
  </div>
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
<form method="post" action="{{ url('/get-deposit') }}">
    @csrf
    <div class="card-body">
        <!-- Amount -->
        <div class="form-group row">
            <label for="amount" class="col-16 col-form-label">
                Amount $ <font color="crimson">*</font>
            </label>
            <div class="col-16">
                <input class="form-control" type="number" min="1" name="amount" id="amount" required>
            </div>
        </div>

        <!-- Payment Option -->
        <div class="form-group row">
            <label for="paymentOption" class="col-16 col-form-label">
                Select Payment Option <font color="crimson">*</font>
            </label>
            <div class="col-16">
                <select class="form-control" name="item" id="paymentOption" required>
                    <option value="">Select Option</option>
                    <option value="Bank">Bank Transfer</option>
                    <option value="Bitcoin">Bitcoin</option>
                    <option value="Ethereum">Ethereum</option>
                    <option value="USDT">USDT</option>
                </select>
            </div>
        </div>

        <!-- Submit -->
        <div class="form-group row">
            <div class="col-16">
                <center>
                    <input class="btn btn-outline-primary" type="submit" value="Proceed">
                </center>
            </div>
        </div>
    </div>
</form>


<script>
  document.getElementById('paymentType').addEventListener('change', function () {
      var paymentType = this.value;
      var bitcoinWallet = document.getElementById('bitcoinWallet');
      var bankDetails = document.getElementById('bankDetails');
      
      bitcoinWallet.style.display = (paymentType === 'Crypto Currency') ? 'block' : 'none';
      bankDetails.style.display = (paymentType === 'Bank Transfer') ? 'block' : 'none';
  });
</script>

  </div>
</div>
</div>
<hr>
<a href="account"><button style="float:center" class="btn btn-primary">back to account</button></a>
</div><br><br>



<div class="row">
<div class="col-md-12">

<div id="google_translate_element"></div>
<script type="text/javascript">
function googleTranslateElementInit() {
new google.translate.TranslateElement({
    pageLanguage: 'en'
}, 'google_translate_element');
}
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<br>

{{-- <div class="form-group row">
    <div class="col-6">
    <button type="button" onclick="referralFunction()" class="btn btn-outline-primary">Copy Referral Link</button>
    </div>
    <div class="col-10">
        <input type="text" style="color:black" class="form-control" id="referral_link" value="https://www.Metalglobalmarket.com/Dashboard/register?Tgod1422"  readonly="">
    </div>
</div> --}}
</div>



<script>
function referralFunction() {
var copyReferral = document.getElementById("referral_link");
copyReferral.select();
copyReferral.setSelectionRange(0, 99999);
document.execCommand("copy");
Swal.fire('','<b>Referral Link Copied :</b> ' + copyReferral.value+'','','');
}
</script>






<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
<div class="tradingview-widget-container__widget"></div>
<script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
{
"symbols": [
{
"proName": "FOREXCOM:SPXUSD",
"title": "S&P 500"
},
{
"proName": "FOREXCOM:NSXUSD",
"title": "Nasdaq 100"
},
{
"proName": "FX_IDC:EURUSD",
"title": "EUR/USD"
},
{
"proName": "BITSTAMP:BTCUSD",
"title": "BTC/USD"
},
{
"proName": "BITSTAMP:ETHUSD",
"title": "ETH/USD"
}
],
"showSymbolLogo": true,
"colorTheme": "light",
"isTransparent": false,
"displayMode": "adaptive",
"locale": "en"
}
</script>
</div>
<!-- TradingView Widget END -->



@include('dashboard.footer')