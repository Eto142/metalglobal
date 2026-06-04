@include('dashboard.header')


    <br><br>

<div class="container" id="inv"><br><br>

        <h1 style="text-align:center">Bitcoin Payment</h1><br>

        <h4 style="color:crimson;text-align:center">Send your bitcoin deposit to the address below.</h4><br>

        <div style="text-align:center">
                <img src="https://quickchart.io/chart?cht=qr&chs=200x200&chl=bitcoin:bc1qyuua6kz2evfpneaptsjphzzpeh4dqnrjx5ry5m" width="300" height="300" class="btn btn-outline-success" title="CLICK TO COPY BITCOIN ADDRESS">
                <br><br>
        </div>
        <div style="background-color:#5CB85C;" align="center">
                <font color="white" size="4"><b><strong>
                                        <input id="myInput" type="text" value="bc1qyuua6kz2evfpneaptsjphzzpeh4dqnrjx5ry5m" style="width:82%;height:100%" readonly></strong></b></font>
                <button type="button" onclick="myFunction()">Click To Copy</button>
        </div>








        <br><br>
        <font color="crimson" size="5">
                <marquee>Ensure to copy address properly to avoid payment error
                </marquee>
        </font><br><br>
        <table cellspacing="0" cellpadding="2" class="form deposit_confirm">
                <tbody>
                        <p></p>
                        <tr>
                                <div class="col-md-16">
                                        <label> IF YOUR PAYMENT OF <font color="#5CB85C" size="5"> 10 </font>WAS SUCCESSFUL PLEASE UPLOAD PROOF OF PAYMENT BELOW </label><br>
                                        <div class="text-center" id="my-dropzone">
                                                <div>
                                                        <form action="account" method="POST" enctype="multipart/form-data">
                                                                <i class="fa fa-arrow-right"></i>
                                                                <input type="file" name="file" required>
                                                                <input type="hidden" name="amount" value="$10">
                                                </div>
                                        </div>

                                </div>
                                </th>
                                <p></p>
                                <td></td>
                        </tr>

                </tbody>
        </table>
        <br><br>
        <center><button type="submit" name="paid" class="btn btn-primary">Upload Payment Proof</button></center>
</div>
</form>
<p></p>
<p></p>
<p></p>





<script>
        function myFunction() {
                var copyText = document.getElementById("myInput");
                copyText.select();
                copyText.setSelectionRange(0, 99999);
                document.execCommand("copy");
                Swal.fire('', '<b>Bitcoin Wallet Copied : </b> ' + copyText.value + '', '', '');
        }
</script><br><br>



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

        <div class="form-group row">
            <div class="col-6">
            <button type="button" onclick="referralFunction()" class="btn btn-outline-primary">Copy Referral Link</button>
            </div>
            <div class="col-10">
                <input type="text" style="color:black" class="form-control" id="referral_link" value="https://www.Metalglobalmarket.com/Dashboard/register?Tgod1422"  readonly="">
            </div>
        </div>
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