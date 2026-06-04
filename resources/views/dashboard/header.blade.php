

<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="ROBOTS" content="NOINDEX, NOFOLLOW">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=0.7, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
<link rel="shortcut icon" href="../favicon.png" type="image/x-icon">
  <title>Metalglobalmarket | Dashboard</title>
  <!-- ////////////////////// -->

  <!-- Fontawesome icon CSS -->
  <link rel="stylesheet" href="vendor1/font-awesome-4.7.0/css/font-awesome.min.css" type="text/css">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="vendor1/bootstrap-4.1.1/css/bootstrap.css" type="text/css">

  <!-- DataTables Responsive CSS -->
  <link href="vendor1/datatables/css/dataTables.bootstrap4.css" rel="stylesheet">
  <link href="vendor1/datatables/css/responsive.dataTables.min.css" rel="stylesheet">

  <!-- jvectormap CSS -->
  <link href="vendor1/jquery-jvectormap/jquery-jvectormap-2.0.3.css" rel="stylesheet">

  <!-- Adminux CSS -->
  <link rel="stylesheet" href="css1/lightblue_adminux.css" type="text/css">
  <!-- ///////////////////// -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>


    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- toastr-->
<link href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0- 
alpha/css/bootstrap.css')}}" rel="stylesheet">

<script src="{{asset('https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js')}}"></script>

<link rel="stylesheet" type="text/css" 
href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css')}}">

<script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js')}}"></script>



<style>
    /* Custom Toastr Styles */
    .toast-success {
        background-color: #51A351 !important; /* Custom success color */
    }
    .toast-warning {
        background-color: #F89406 !important; /* Custom warning color */
    }
</style>


<style>
.accordion {
 background-color: transparent;
 color: #444;
 cursor: pointer;
 padding: 18px;
 width: 100%;
 text-align: left;
 border: none;
 outline: none;
 transition: 0.4s;
}

/* Add a background color to the button if it is clicked on (add the .active class with JS), and when you move the mouse over it (hover) */
.active,
.accordion:hover {}

/* Style the accordion panel. Note: hidden by default */
.panel2 {
 padding: 0 18px;
 background-color: white;
 max-height: 0;
 overflow: hidden;
 transition: max-height 0.2s ease-out;
}
</style>



    <style>
        .grid-container h6 {
            font-size: 12px;
            font-weight: bold;
        }

        .withdraw-icon {
            color: #fff;
            text-align: center;
            padding: 10px;
            border-radius: 10px;
            font-size: 18px;
            font-weight: bolder;
            max-width: 50px;
            margin: auto;
        }

        .grid-container-two .d-block span {
            font-weight: bold;
            font-size: 12px;
        }

        a {
            color: unset;
        }
    </style>
<style>
   div.alert{
     padding: 4px 16px;
     background:white;
   }
   input:text{
     color:white;
   }
 </style>

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

<script>
  document.addEventListener('DOMContentLoaded', function() {
      @if(Auth::user()->kyc_status != '1')
          Swal.fire({
              icon: 'warning',
              title: 'KYC Not Verified',
              html: 'Please verify your KYC document. <br> <a href="{{ url('kyc') }}" style="color: #3085d6; text-decoration: underline;">Click here to verify.</a>',
              confirmButtonText: 'Okay'
          });
      @endif
  });
</script>

{{-- <script>
  document.addEventListener('DOMContentLoaded', function() {
      @if(Auth::user()->kyc_status == '1')
          Swal.fire({
              icon: 'success',
              title: 'KYC Status Verified',
              text: 'Your KYC has been successfully verified.',
              confirmButtonText: 'Okay'
          });
      @else
          Swal.fire({
              icon: 'warning',
              title: 'KYC Not Verified',
              text: 'Please verify your KYC document.',
              confirmButtonText: 'Okay'
          });
      @endif
  });
</script> --}}
<!-- Include SweetAlert2 CSS and JS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body class="menuclose menuclose-right">


<header class="navbar-fixed">
  <nav class="navbar navbar-toggleable-md navbar-inverse bg-faded">
    <div class="sidebar-left"> <a class="navbar-brand imglogo" href="{{url('home')}}"></a>
      <button class="btn btn-link icon-header mr-sm-2 pull-right menu-collapse"><span class="fa fa-bars"></span></button>
    </div>
    <div class="d-flex mr-auto"> &nbsp;</div>
    <ul class="navbar-nav content-right">
      <li class="v-devider"></li>

      <li class="nav-item">
              </li>

      <li class="v-devider"></li>
    </ul>
    <div class="sidebar-right pull-right ">
      <ul class="navbar-nav  justify-content-end">
        <li class="nav-item">
          <button class="btn-link btn userprofile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button><span class="userpic"><img src="{{ Auth::user()->photo ? asset('user/uploads/id/' . Auth::user()->photo) : asset('img1/profile/default.jpg') }}" alt="{{ Auth::user()->name }}" alt="user pic"></span> <span class="text">{{Auth::user()->name}}</span>
        </li>
        <li><a href="logout" class="btn btn-link icon-header"><span class="fa fa-power-off"></span></a></li>
      </ul>
    </div>
  </nav>
</header>
<div class="sidebar-left" >
  <div class="user-menu-items">
    <div class="list-unstyled btn-group">
      <button class="media btn btn-link" aria-haspopup="true" aria-expanded="false"> <span class="message_userpic"><img class="d-flex" src="{{ Auth::user()->photo ? asset('user/uploads/id/' . Auth::user()->photo) : asset('img1/profile/default.jpg') }}" alt="{{ Auth::user()->name }}" alt="Generic user image"></span> <span class="media-body"> <span class="mt-0 mb-1">{{Auth::user()->name}}</span> <small></small> </span> </button>
    </div>
  </div>
  <br>
  <ul class="nav flex-column in" id="side-menu">

    <li class="nav-item"> <a class="nav-link" href="{{url('home')}}"><i class="fa fa-home"></i>Account</a> </li>
    <li class="nav-item"> <a class="nav-link" href="{{url('deposit')}}"><i class="fa fa-money"></i>Deposit</a> </li>
    <li class="nav-item"> <a class="nav-link" href="{{url('withdraw')}}"><i class="fa fa-briefcase"></i>Withdraw</a> </li>
    <li class="nav-item"> <a class="nav-link" href="{{url('history')}}"><i class="fa fa-calendar-o"></i>Trade History</a>
    <li class="nav-item"> <a class="nav-link" href="{{url('transaction')}}"><i class="fa fa-calendar-o"></i>Transactions</a>
    <li class="nav-item"> <a class="nav-link" href="{{url('signal')}}"><i class="fa fa-signal"></i>Purchase Signal</a>
    <li class="nav-item"> <a class="nav-link" href="{{url('upgrade')}}"><i class="fa fa-bank"></i>Account Upgrade</a> </li>
    <li class="nav-item"> <a class="nav-link" href="{{url('settings')}}"><i class="fa fa-gear"></i>Account Settings</a> </li>
    <li class="nav-item"> <a class="nav-link" href="{{url('logout')}}"><i class="fa fa-power-off"></i>Logout</a></li>

  </ul>
  <hr>
  <ul class="nav flex-column in">
    <li class="nav-item ">
      <div class="nav-link">
        <h5><span>Sun 27th October 2024</span></h5>
      </div>
    </li>
    <li class="nav-item ">
    </li>
  </ul>
  <br>
  <br>
</div>
<div class="wrapper-content">
  <div class="container">






    <div class="row  align-items-end  customer-profile-cover">
      <figure class="background"><img src="img1/normal.png" alt="Social cover image"> </figure>
      <div class="container mb-2"><br>
        <div class="row  align-items-center p-2">
          <figure class="social-profile-pic"><a href="{{url('home')}}"><img src="{{ Auth::user()->photo ? asset('user/uploads/id/' . Auth::user()->photo) : asset('img1/profile/default.jpg') }}" alt="{{ Auth::user()->name }}" alt=""></a></figure>
          <div class="col-sm-16 col-lg-4 col-xl-4  profile-name">
            <h2>{{Auth::user()->name}} &nbsp;{{Auth::user()->lname}}<i style="color:green" class="fa fa-star"></i>
                        </h2>
            <p>{{Auth::user()->country}}</p>
            <a href="{{url('deposit')}}"><button class="btn btn-success ">Deposit</button></a>
            <a href="{{url('withdraw')}}"><button class="btn btn-success  ml-1">Withdraw</button></a>
          </div>
          <div class="col-16 col-sm-16 col-lg-9 col-xl-9 text-right d-flex flex-wrap">
            <div class="col-4">
              <h4>Investment <small></small></h4>
              <h3><span class="text-warning">{{ Auth::user()->currency }} {{$deposit}} </span></h3>
            </div>
            <div class="col-4">
              <h4>Bonus <small></small></h4>
              <h3><span class="text-warning">{{ Auth::user()->currency }} {{$referral}} </span></h3>
            </div>
            <div class="col-4">
              <h4>Earning <small></small></h4>
              <h3><span class="text-warning">{{ Auth::user()->currency }} {{$profit}} </span></h3>
            </div>
          </div>
          
        </div>
      </div>
    </div>
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