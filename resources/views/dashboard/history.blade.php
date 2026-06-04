@include('dashboard.header')
<br><br>

 
<h2 style="text-align:center">Trade History</h2>
<br>

<style>
    div.scrollmenu {
        background-color: #333;
        overflow: auto;
        white-space: nowrap;
    }

    div.scrollmenu a {
        display: inline-block;
        color: white;
        text-align: center;
        padding: 14px;
        text-decoration: none;
    }

    div.scrollmenu a:hover {
        background-color: #777;
    }
    table,td{
        background: goldenrod;
        color:white;
    }
    th{
        background: gold;
        color:white;
    }
</style>
<b>
<div class="scrollmenu">
    <table cellspacing="400" class="table" table-bordered="">
        <tbody>
            <tr>
                <th>Asset</th>
<th><img style="width: 20px; height: 10px;" src="img/PUT.png" alt="Put" /> <img style="width: 20px; height: 10px;" src="img/CALL.png" alt="Call" /></th>
                <th>Trade</th>
                <th>Open/Close</th>
                <th>Opens</th>
                <th>Closes</th>
                <th>Status</th>
                <th>Payout</th>
            </tr>



            
        </tbody>
    </table>
</div>
</b>
<hr>
   <a href="account"><button class="btn btn-primary">back to account</button></a>
<br><br>



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