@include('dashboard.header')
    <br><br>

<div class="wrapper-content">
     <div class="row">
          <div class="col-md-16 col-lg-16 col-xl-16">
               <div class="activity-block success"  id="bck"> 
                    <!-- style="background: #1aca79;" -->
                    <div class="media">
                         <div class="media-body">
                              <a href="{{url('kyc')}}"><button class="btn btn-success"><i class="fa fa-user"></i>Upload Kyc</button></a>
                              <a href="{{url('settings')}}"><button style="float:right" class="btn btn-danger"><i class="fa fa-gears"></i> Settings</button></a>
                              <hr>
                              <a href="{{url('transaction')}}"><button style="float:center" class="btn btn-success"><i class="fa fa-calendar-o"></i>  View Transactions</button></a>
                              <a href="{{url('signal')}}"><button style="float:right" class="btn btn-success"><i class="fa fa-signal"></i> Purchase Signal</button></a>
                              <hr>
                              <h2 style="text-align:center">Account Information</h2>
                              <hr>
                              <a style="float:left;font-size:20px;font-weight:bold">Full Name</a>
                              <a  style="float:right;font-size:18px;letter-spacing:3px">{{Auth::user()->name}}&nbsp;{{Auth::user()->lname}}</a>
                              <br><hr>
                              {{-- <a style="float:left;font-size:20px;font-weight:bold">UserName</a>
                              <a style="float:right;font-size:18px;letter-spacing:1px">Tgod1422</a>
                              <br><hr> --}}
                              <a style="float:left;font-size:20px;font-weight:bold">Country</a>
                              <a style="float:right;font-size:18px;letter-spacing:1px">{{Auth::user()->country}}</a>
                              <br><hr>
                              <a style="float:left;font-size:20px;font-weight:bold">Email</a>
                              <a style="float:right;font-size:18px;letter-spacing:1px">{{Auth::user()->email}}</a>
                              <br><hr>
                              <a style="float:left;font-size:20px;font-weight:bold">Reg. Date</a>
                              <a style="float:right;font-size:18px;letter-spacing:1px">{{Auth::user()->created_at}}</a>
                              <br><hr>
                          <!--<a style="float:left;font-size:20px;font-weight:bold">Phone</a>
                              <a style="float:right;font-size:20px;letter-spacing:3px">66555555</a>
                              <br><hr>-->
                          <!--<a style="float:left;font-size:20px;font-weight:bold">Country</a>
                              <a style="float:right;font-size:20px;letter-spacing:3px">American Samoa</a>
                              <br><hr>-->
                          <!--<a style="float:left;font-size:20px;font-weight:bold">State</a>
                              <a style="float:right;font-size:20px;letter-spacing:3px"></a>
                              <br><hr>-->
                          <!--<a style="float:left;font-size:20px;font-weight:bold">Minimum Withdrawal</a>
                              <a style="float:right;font-size:20px;letter-spacing:3px">$ None</a>
                              <br><hr>-->
                              <a style="float:left;font-size:20px;font-weight:bold">Package</a>
                              <a style="float:right;font-size:18px;letter-spacing:1px">None</a>
                              <br><hr>
                              <a style="float:left;font-size:20px;font-weight:bold">Signal</a>
                              <a  style="float:right;font-size:18px;letter-spacing:3px">None</a>
                              <br><hr>
                          <!--<a style="float:left;font-size:20px;font-weight:bold">Zip Code</a>
                              <a style="float:right;font-size:20px;letter-spacing:3px"></a>
                              <br><hr>>-->
                          <!--<a style="float:left;font-size:20px;font-weight:bold">Referral</a>
                              <a style="float:right;font-size:18px;letter-spacing:3px">None</a>
                              <br><hr>-->
                          <!-- <a style="float:left;font-size:20px;font-weight:bold">Account Type</a>
                              <a style="float:right;font-size:18px;letter-spacing:1px">Binary option trade<br>Forex trading<br></a>
                              <br><br><hr> -->
                          <!--<a style="float:left;font-size:20px;font-weight:bold">Gender</a>
                              <a style="float:right;font-size:20px;letter-spacing:3px"></a>
                              <br><hr>-->
                              <a style="float:left;font-size:20px;font-weight:bold">Account Status</a>
                              <a style="float:right;font-size:20px;letter-spacing:3px"><b style="color:white;background:green;padding:4px 7px";border-radius:10px>Active</b></a>
                              <br><hr>
                              <a style="text-align:center;font-size:20px;font-weight:bold" href="mailto:support@Metalglobalmarket.com"><i class="fa fa-envelope"></i> CONTACT SUPPORT</a>
                                   
                              <br><hr>
                                        <!-- <a href="transaction"><button class="btn btn-success"><i class="fa fa-calendar-o"></i> View Transactions</button></a> -->
                              <h6 style="float:left">
                                   NOTIFICATION: 
                              </h6><br><marquee></marquee>
                         </div>
                         <i class="fa ffa fa-"></i>
                    </div>
                    <br>
                    <div class="row">
                         <div class="progress ">
                              <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 39%;"><span class="trackerball"></span></div>
                         </div>
                    </div>
                    <i class="bg-icon text-center fa fa-user"></i>
               </div>
          </div>
     </div>
     <br><br>












     <div class="row">

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
          </style>

          <div class="scrollmenu">
               <!-- TradingView Widget BEGIN -->
               <div class="tradingview-widget-container">
                    <div id="tradingview_e705a"></div>
                    <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
                    <script type="text/javascript">
                         new TradingView.widget({
                              "width": 1200,
                              "height": 610,
                              "symbol": "FX:EURUSD",
                              "interval": "1",
                              "timezone": "Europe/London",
                              "theme": "dark",
                              "style": "1",
                              "locale": "en",
                              "toolbar_bg": "#f1f3f6",
                              "enable_publishing": false,
                              "hide_side_toolbar": false,
                              "allow_symbol_change": true,
                              "details": true,
                              "studies": [
                                   "AwesomeOscillator@tv-basicstudies",
                                   "MACD@tv-basicstudies"
                              ],
                              "container_id": "tradingview_e705a"
                         });
                    </script>
               </div>
               <!-- TradingView Widget END -->
          </div>
     </div>
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
                <input type="text" style="color:black" class="form-control" id="referral_link" value="https://www.metalglobalmarket.com/register?{{Auth::user()->name}}"  readonly="">
            </div>
        </div>--}}
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