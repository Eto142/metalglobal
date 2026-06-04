



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
<form class="form-signin1 full_side text-white " action="{{ route('login') }}" method="POST">
    @csrf
       
  <img style="width:100%;height:100%" src="img/logob.png" >
<span><h3 style="color:crimson;text-align:center"></h3></span>
<span><h3 style="color:green;text-align:center"></h3></span>
  <h2 class="tex-black mb-4">Sign in</h2>
  <label  style="color:black">Email</label>
  <input type="email" name="email" class="form-control" placeholder="Email" value="" required>
  <span style="color:crimson"></span>
  @error('email')
  <span class="invalid-feedback" role="alert">
      <strong>{{ $message }}</strong>
  </span>
@enderror   
  <br>
  <label style="color:black">Password</label>
  <input type="password" name="password" class="form-control" placeholder="Password" required>
  <span style="color:crimson"></span>
  @error('password')
  <span class="invalid-feedback" role="alert">
      <strong>{{ $message }}</strong>
  </span>
@enderror    
  <br>
  <input type="submit" name="login_btn" style="background:#6c20f7" class="btn btn-lg btn-primary btn-round" value="Login"><br>
  <br>
  <p class="mt-3"><a href="register" class="text-white">Register here!</a> <br>
    <a href="{{ route('password.request') }}" class="">Forgot password?</a></p>
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








