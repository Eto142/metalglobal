



<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="ROBOTS" content="NOINDEX, NOFOLLOW">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=0.5, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<link rel="shortcut icon" href="../favicon.png" type="image/x-icon">
<title>Metalglobalmarket | Join </title>
<link rel="stylesheet" href="vendor/font-awesome-4.7.0/css/font-awesome.min.css" type="text/css">
<link rel="stylesheet" href="vendor/bootstrap-4.1.1/css/bootstrap.css" type="text/css">
 <link rel="stylesheet" href="css/light_adminux.css" type="text/css">

 
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>


<!-- /GetButton.io widget-->
<script type="text/javascript">
    (function() {
        var options = {
            whatsapp: "+1(702)425-8487", // WhatsApp number
            call_to_action: "Contact us!", // Call to action
            position: "left", // Position may be "right" or "left"
        };
        var proto = document.location.protocol,
            host = "getbutton.io",
            url = proto + "//static." + host;
        var s = document.createElement("script");
        s.type = "text/javascript";
        s.async = true;
        s.src = url + "/widget-send-button/js/init.js";
        s.onload = function() {
            WhWidgetSendButton.init(host, proto, options);
        };
        var x = document.getElementsByTagName("script")[0];
        x.parentNode.insertBefore(s, x);
    })();
</script> 
<!-- /GetButton.io widget -->





</head>
<body class="menuclose menuclose-right" style="background:gray">
<figure class="background"> <img src="img/login_bg.jpg" alt="Metalglobalmarket"> </figure>


  <!-- g-hide -->
  <style type="text/css">
    iframe.goog-te-banner-frame {
      display: none !important;
    }
  </style>
  <style type="text/css">
    iframe.skiptranslate {
      display: none !important;
    }
  </style>
  <style type="text/css">
    body {
      position: static !important;
      top: 0px !important;
    }
  </style>
  <!-- end-g-hide -->

                                   <div id="google_translate_element"></div>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

              

<header class="navbar-fixed">
<nav class="navbar navbar-toggleable-md sign-in-header">
  <div class="sidebar-left">  <a class="navbar-brand imglogo" href="/"></a> </div>
  <div class="col"></div>
  <div class="sidebar-right pull-right" >
    <ul class="navbar-nav  justify-content-end">
      <li  style="margin:4px"><a href="#" class="btn btn-link text-white" ></a></li>
      <li  style="margin:4px"><a href="/" style="background:#6c20f7"  class="btn btn-primary" >Home</a></li>
      <li  style="margin:4px"><a href="{{route('login')}}" style="background:#6c20f7"  class="btn btn-primary" >Login</a></li>
      <li  style="margin:4px"><a href="{{route('register')}}" style="background:#6c20f7"  class="btn btn-primary" >Register</a></li>
    </ul>
  </div>
</nav>
</header>
<div class="wrapper-content-sign-in p-0">




<div class="col-md-8 offset-md-8 text-left side_signing_full">
  <form class="form-signin1 full_side text-white"   action="{{ route('register') }}" method="POST">
        @csrf
  <img style="width:100%;height:100%" src="img/logob.png" >
  <span><h3 style="color:crimson;text-align:center"></h3></span>
  <span><h3 style="color:green;text-align:center"></h3></span>
    <h2 class="tex-black mb-4">Register</h2>
    <label  style="color:black">First Name</label>
    <input type="text" class="form-control"  name="name" placeholder="First Name"  value="" required>
    <span style="color:crimson"></span>
    <br>
    <label  style="color:black">Last Name</label>
    <input type="text" class="form-control"  name="lname" placeholder="Last Name"  value="" required>
    <span style="color:crimson"></span>
    <br>
    {{-- <label  style="color:black">User name</label>
    <input type="text" class="form-control"  name="username" placeholder="Username"  value="" required>
    <span style="color:crimson"></span> --}}
    {{-- <br> --}}
    <label  style="color:black">Email address</label>
    <input type="text" class="form-control"  name="email" placeholder="Email address"  value="" required>
    <span style="color:crimson"></span>
    <br>
    
    <label style="color:black">Password</label>
<input 
    type="password" 
    class="form-control" 
    name="password"  
    placeholder="Enter Password"  
    required
    pattern="(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}"
>
<small style="color:crimson; display:block; margin-top:5px;">
    Password must contain:
    <br>• At least 8 characters  
    <br>• At least 1 uppercase letter (A–Z)  
    <br>• At least 1 lowercase letter (a–z)  
    <br>• At least 1 number (0–9)  
    <br>• At least 1 special character (@ $ ! % * ? &)
</small>

<br>

<label style="color:black">Retype Password</label>
<input 
    type="password" 
    class="form-control" 
    name="password_confirmation"  
    placeholder="Retype Password"  
    required
    pattern="(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}"
>

    <!--<label style="color:black">Password</label>-->
    <!--<input type="password" class="form-control" name="password"  placeholder="Confirm Password"  value="" required>-->
    <!--<span style="color:crimson"></span>-->
    <!--<br>-->
    <!--<label style="color:black">Retype Password</label>-->
    <!--<input type="password" class="form-control" name="password_confirmation"  placeholder="Retype Password"  value="" required>-->
    <!--<span style="color:crimson"></span>-->
    <br>
    <label  style="color:black">Phone Number</label>
    <input type="text" class="form-control"  name="phone" placeholder="example:+1234567890"  value="" required>
    <span style="color:crimson"></span>
    <br>
    <!-- <label  style="color:black">Referral Username(optional)</label>
    <input type="text" class="form-control"  name="referral" placeholder="referral"  value="">
    <span style="color:crimson"></span>
    <br> -->
    <label style="color:black">Country</label>
    <select style="color:#252d47" class="form-control " name="country"  data-live-search="true" tabindex="-1" aria-hidden="true" required>
                                      
      <option value="">Your Country</option>
      <option>Afghanistan</option>
      <option>Albania</option>
      <option>Algeria</option>
      <option>American Samoa</option>
      <option>Andorra</option>
      <option>Angola</option>
      <option>Anguilla</option>
      <option>Antarctica</option>
      <option>Antigua and Barbuda</option>
      <option>Argentina</option>
      <option>Armenia</option>
      <option>Aruba</option>
      <option>Australia</option>
      <option>Austria</option>
      <option>Azerbaijan</option>
      <option>Bahamas</option>
      <option>Bahrain</option>
      <option>Bangladesh</option>
      <option>Barbados</option>
      <option>Belarus</option>
      <option>Belgium</option>
      <option>Belize</option>
      <option>Benin</option>
      <option>Bermuda</option>
      <option>Bhutan</option>
      <option>Bolivia</option>
      <option>Bosnia and Herzegovina</option>
      <option>Botswana</option>
      <option>Bouvet Island</option>
      <option>Brazil</option>
      <option>British Indian Ocean Territory</option>
      <option>Brunei</option>
      <option>Bulgaria</option>
      <option>Burkina Faso</option>
      <option>Burundi</option>
      <option>Cambodia</option>
      <option>Cameroon</option>
      <option>Canada</option>
      <option>Cape Verde</option>
      <option>Cayman Islands</option>
      <option>Central African Republic</option>
      <option>Chad</option>
      <option>Chile</option>
      <option>China</option>
      <option>Christmas Island</option>
      <option>Cocos (Keeling) Islands</option>
      <option>Colombia</option>
      <option>Comoros</option>
      <option>Congo</option>
      <option>Democratic Republic of the Congo</option>
      <option>Cook Islands</option>
      <option>Costa Rica</option>
      <option>Croatia</option>
      <option>Cuba</option>
      <option>Cyprus</option>
      <option>Czech Republic</option>
      <option>Denmark</option>
      <option>Djibouti</option>
      <option>Dominica</option>
      <option>Dominican Republic</option>
      <option>East Timor</option>
      <option>Ecuador</option>
      <option>Egypt</option>
      <option>El Salvador</option>
      <option>Equatorial Guinea</option>
      <option>Eritrea</option>
      <option>Estonia</option>
      <option>Ethiopia</option>
      <option>Falkland Islands</option>
      <option>Faroe Islands</option>
      <option>Fiji</option>
      <option>Finland</option>
      <option>France</option>
      <option>French Guiana</option>
      <option>French Polynesia</option>
      <option>French Southern Territories</option>
      <option>Gabon</option>
      <option>Gambia</option>
      <option>Georgia</option>
      <option>Germany</option>
      <option>Ghana</option>
      <option>Gibraltar</option>
      <option>Greece</option>
      <option>Greenland</option>
      <option>Grenada</option>
      <option>Guadeloupe</option>
      <option>Guam</option>
      <option>Guatemala</option>
      <option>Guinea</option>
      <option>Guinea-Bissau</option>
      <option>Guyana</option>
      <option>Haiti</option>
      <option>Heard Island and McDonald Islands</option>
      <option>Holy See (Vatican City)</option>
      <option>Honduras</option>
      <option>Hong Kong</option>
      <option>Hungary</option>
      <option>Iceland</option>
      <option>India</option>
      <option>Indonesia</option>
      <option>Iran</option>
      <option>Iraq</option>
      <option>Ireland</option>
      <option>Israel</option>
      <option>Italy</option>
      <option>Ivory Coast</option>
      <option>Jamaica</option>
      <option>Japan</option>
      <option>Jordan</option>
      <option>Kazakhstan</option>
      <option>Kenya</option>
      <option>Kiribati</option>
      <option>Kuwait</option>
      <option>Kyrgyzstan</option>
      <option>Laos</option>
      <option>Latvia</option>
      <option>Lebanon</option>
      <option>Lesotho</option>
      <option>Liberia</option>
      <option>Libya</option>
      <option>Liechtenstein</option>
      <option>Lithuania</option>
      <option>Luxembourg</option>
      <option>Macau</option>
      <option>North Macedonia</option>
      <option>Madagascar</option>
      <option>Malawi</option>
      <option>Malaysia</option>
      <option>Maldives</option>
      <option>Mali</option>
      <option>Malta</option>
      <option>Marshall Islands</option>
      <option>Martinique</option>
      <option>Mauritania</option>
      <option>Mauritius</option>
      <option>Mayotte</option>
      <option>Mexico</option>
      <option>Micronesia</option>
      <option>Moldova</option>
      <option>Monaco</option>
      <option>Mongolia</option>
      <option>Montserrat</option>
      <option>Morocco</option>
      <option>Mozambique</option>
      <option>Myanmar</option>
      <option>Namibia</option>
      <option>Nauru</option>
      <option>Nepal</option>
      <option>Netherlands</option>
      <option>New Caledonia</option>
      <option>New Zealand</option>
      <option>Nicaragua</option>
      <option>Niger</option>
      <option>Nigeria</option>
      <option>Niue</option>
      <option>Norfolk Island</option>
      <option>North Korea</option>
      <option>Northern Mariana Islands</option>
      <option>Norway</option>
      <option>Oman</option>
      <option>Pakistan</option>
      <option>Palau</option>
      <option>Palestine</option>
      <option>Panama</option>
      <option>Papua New Guinea</option>
      <option>Paraguay</option>
      <option>Peru</option>
      <option>Philippines</option>
      <option>Pitcairn Islands</option>
      <option>Poland</option>
      <option>Portugal</option>
      <option>Puerto Rico</option>
      <option>Qatar</option>
      <option>Reunion</option>
      <option>Romania</option>
      <option>Russia</option>
      <option>Rwanda</option>
      <option>Saint Helena</option>
      <option>Saint Kitts and Nevis</option>
      <option>Saint Lucia</option>
      <option>Saint Pierre and Miquelon</option>
      <option>Saint Vincent and the Grenadines</option>
      <option>Samoa</option>
      <option>San Marino</option>
      <option>Sao Tome and Principe</option>
      <option>Saudi Arabia</option>
      <option>Senegal</option>
      <option>Seychelles</option>
      <option>Sierra Leone</option>
      <option>Singapore</option>
      <option>Slovakia</option>
      <option>Slovenia</option>
      <option>Solomon Islands</option>
      <option>Somalia</option>
      <option>South Africa</option>
      <option>South Korea</option>
      <option>South Sudan</option>
      <option>Spain</option>
      <option>Sri Lanka</option>
      <option>Sudan</option>
      <option>Suriname</option>
      <option>Sweden</option>
      <option>Switzerland</option>
      <option>Syria</option>
      <option>Taiwan</option>
      <option>Tajikistan</option>
      <option>Tanzania</option>
      <option>Thailand</option>
      <option>Togo</option>
      <option>Tokelau</option>
      <option>Tonga</option>
      <option>Trinidad and Tobago</option>
      <option>Tunisia</option>
      <option>Turkey</option>
      <option>Turkmenistan</option>
      <option>Tuvalu</option>
      <option>Uganda</option>
      <option>Ukraine</option>
      <option>United Arab Emirates</option>
      <option>United Kingdom</option>
      <option>United States</option>
      <option>Uruguay</option>
      <option>Uzbekistan</option>
      <option>Vanuatu</option>
      <option>Venezuela</option>
      <option>Vietnam</option>
      <option>Virgin Islands (British)</option>
      <option>Virgin Islands (USA)</option>
      <option>Wallis and Futuna Islands</option>
      <option>Western Sahara</option>
      <option>Yemen</option>
      <option>Zambia</option>
      <option>Zimbabwe</option>
      
    </select>
    <span style="color:crimson"></span>
    <br>
<label  style="color:black">State</label>
    <input type="text" class="form-control"  name="state" placeholder="State"  value="" required>
    <span style="color:crimson"></span>
    <br>
<label  style="color:black">House Address</label>
    <input type="text" class="form-control"  name="address" placeholder="Address"  value="" required>
    <span style="color:crimson"></span>
    <br>
<!--<label  style="color:black">Zip code</label>
    <input type="text" class="form-control"  name="zip" placeholder="Zip Code"  value="" required>
    <span style="color:crimson"></span>
    <br>-->
<!--<label  style="color:black">Bitcoin Address</label>
    <input type="text" class="form-control"  name="btc" placeholder="Bitcoin Wallet"  value="" required>
    <span style="color:crimson"></span>
    <br>-->
    <label style="color:black">Currency Type</label>
<select style="color:#252d47" class="form-control" name="currency" data-live-search="true" tabindex="-1" aria-hidden="true" required>
    <option value="&#x24;">US Dollar &#x24;</option>
    <option value="&#x20AC;">Euro &#x20AC;</option>
    <option value="&#xA3;">British Pound &#xA3;</option>
    <option value="&#xA5;">Japanese Yen &#xA5;</option>
    <option value="&#x20B9;">Indian Rupee &#x20B9;</option>
    <option value="&#x20BD;">Russian Ruble &#x20BD;</option>
    <option value="&#x20BA;">Turkish Lira &#x20BA;</option>
    <option value="R">South African Rand R</option>
    <option value="N$">Namibian Dollar N$</option>
    <option value="&#x20A6;">Nigerian Naira &#x20A6;</option>
    <option value="&#x20AA;">Israeli Shekel &#x20AA;</option>
    <option value="&#x20A8;">Indonesian Rupiah &#x20A8;</option>
    <option value="&#x20B1;">Philippine Peso &#x20B1;</option>
    <option value="&#x20B2;">Guatemalan Quetzal &#x20B2;</option>
    <option value="&#x20B4;">Ukrainian Hryvnia &#x20B4;</option>
    <option value="&#x20A3;">French Franc &#x20A3;</option>
    <option value="&#x20AB;">Vietnamese Dong &#x20AB;</option>
    <option value="&#x20A9;">South Korean Won &#x20A9;</option>
    <option value="&#x20AD;">Lao Kip &#x20AD;</option>
    <option value="&#x20B8;">Thai Baht &#x20B8;</option>
    <option value="&#x20A4;">Portuguese Escudo &#x20A4;</option>
    <option value="&#x20A7;">Spanish Peseta &#x20A7;</option>
    <option value="&#x24B2;">Argentine Peso &#x24B2;</option>
    <option value="&#x24E2;">Colombian Peso &#x24E2;</option>
    <option value="&#x20A1;">Costa Rican Colon &#x20A1;</option>
    <option value="&#x20B5;">Ghanaian Cedi &#x20B5;</option>
    <option value="&#x20B6;">Bolivian Boliviano &#x20B6;</option>
    <option value="&#x20B7;">Honduran Lempira &#x20B7;</option>
    <option value="&#x20B3;">Brazilian Real &#x20B3;</option>
    <option value="&#x20A2;">Central African CFA Franc &#x20A2;</option>
    <option value="&#x20B0;">Bangladeshi Taka &#x20B0;</option>
    <option value="CHF">Swiss Franc CHF</option>
    <option value="CAD">Canadian Dollar CAD</option>
    <option value="AUD">Australian Dollar AUD</option>
    <option value="BRL">Brazilian Real BRL</option>
    <option value="CNY">Chinese Yuan CNY</option>
    <option value="SGD">Singapore Dollar SGD</option>
    <option value="MYR">Malaysian Ringgit MYR</option>
    <option value="MXN">Mexican Peso MXN</option>
    <option value="NZD">New Zealand Dollar NZD</option>
    <option value="SEK">Swedish Krona SEK</option>
    <option value="NOK">Norwegian Krone NOK</option>
    <option value="DKK">Danish Krone DKK</option>
    <option value="PLN">Polish Zloty PLN</option>
    <option value="HUF">Hungarian Forint HUF</option>
    <option value="CZK">Czech Koruna CZK</option>
    <option value="HKD">Hong Kong Dollar HKD</option>
    <option value="SAR">Saudi Riyal SAR</option>
    <option value="AED">United Arab Emirates Dirham AED</option>
    <option value="QAR">Qatari Riyal QAR</option>
    <option value="BHD">Bahraini Dinar BHD</option>
    <option value="OMR">Omani Rial OMR</option>
    <option value="KWD">Kuwaiti Dinar KWD</option>
</select>
<span style="color:crimson"></span>

    <br>
    <!-- <label style="color:black">Minimum Withdrawal</label>
    <select style="color:#252d47" class="form-control" name="mwith"  data-live-search="true" tabindex="-1" aria-hidden="true" required >
    <option value="">--SELECT--</option>
    <option>100,000</option>
    <option>80,000</option>
    <option>50,000</option>
    <option>40,000</option>
    <option>30,000</option>
    <option>25,000</option>
    <option>20,000</option>
    <option>15,000</option>
    <option>10,000</option>
    <option>5,000</option>
    <option>2,500</option>
    <option>2,000</option>
    <option>1,000</option>
    <option>500</option>
    </select>
    <span style="color:crimson"></span>
    <br> -->
<!--<label style="color:black">Package</label>
    <select style="color:#252d47" class="form-control" name="package"  data-live-search="true" tabindex="-1" aria-hidden="true" required >
    <option>STARTER $500 - $4,999</option>
    <option>PREMIUM $5,000 - $9,999</option>
    <option>DELUXE $10,000 - $49,999</option>
    <option>VIP $50,000 - $100,000</option>
    </select>
    <span style="color:crimson"></span>
    <br>-->
    <label style="color:black">Account Type</label>
    <select style="color:#252d47" class="form-control" name="account_type"  data-live-search="true" tabindex="-1" aria-hidden="true" required multiple >
    <option value="Binary option trade">Binary option trade</option>
    <option value="Forex trading">Forex trading</option>
    <option value="Mining">Mining</option>
    </select>
    <span style="color:crimson"></span>
    <br>
    <div class="checkbox">
        <input type="checkbox" name="agree" class="form-check-input" checked required>
        <i class="fa fa-pencil"></i>
      <b style="color:black">Agree With Our Terms And Conditions</b></div>
    <input type="submit" name="register_btn" class="btn btn-lg btn-primary btn-round"  style="background:#6c20f7" value="Register"><br>
  </form>
  <br>
</div></div>








<script src="js/jquery-2.1.1.min.js" type="text/javascript"></script>
<script src="ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script> 
<script src="vendor/bootstrap4beta/js/bootstrap.min.js" type="text/javascript"></script> 
<script src="vendor/cookie/jquery.cookie.js"  type="text/javascript"></script> 
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug --> 
<script src="js/ie10-viewport-bug-workaround.js"></script> <script>
            "use strict";
            $('input[type="checkbox"]').on('change', function(){
                $(this).parent().toggleClass("active")
                $(this).closest(".media").toggleClass("active");
            }); 
        $(window).on("load", function(){
            /* loading screen */
            $(".loader_wrapper").fadeOut("slow");
        });
    </script>

    
</body>
</html>

<!-- Smartsupp Live Chat script -->
<script type="text/javascript">
var _smartsupp = _smartsupp || {};
_smartsupp.key = 'e582603669e1ab8880e27daf890f7c64642bc56a';
window.smartsupp||(function(d) {
  var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
  s=d.getElementsByTagName('script')[0];c=d.createElement('script');
  c.type='text/javascript';c.charset='utf-8';c.async=true;
  c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
})(document);
</script>
<noscript> Powered by <a href=“https://www.smartsupp.com” target=“_blank”>Smartsupp</a></noscript>








