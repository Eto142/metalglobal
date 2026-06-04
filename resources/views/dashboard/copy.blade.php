@include('dashboard.header')
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="content">
    <div class="container">
        
         <div class="card-body">
            <div class="card-title">

            </div>
            <hr>
            
            <br>
            <br>
            <br>
            
            
            <marquee>Explore The Expertise Of Our Top-Performing Expert Traders Today And Maximize Your Trades Or Investments With lucrative returns</marquee>

<!--            <h6 style="text-align: center; color:skyblue;">QUINTESSENCE OPTIONS COPYTRADER EXPLAINED</h6>-->

<!--        </div>-->
<!--        <div class="row">-->
            
<!--                     <p style="">Quintessence Options collaborative community of millions of users is what makes our platform truly unique in the world of online trading & investment. Our innovative, award-winning CopyTrader™ system engages a user base and is designed to help you explore new ways to build your portfolio.-->
<!--</p>-->
            <!-- end col -->
            
<!--              <h6 style="text-align: center; color:skyblue;">START YOUR COPY TRADE JOURNEY NOW</h6>-->
              
              
<!--                     <p style="">Explore The Expertise Of Our Top-Performing Expert Traders Today And Maximize Your Trades Or Investments With lucrative returns.</p>-->
              
<!--                     <p style="">You can replicate or mirror the positions of multiple available experts on the platform. Each individual expert trader has their own fees for mirroring their strategic positions by investors.</p>-->
                     
<!--                      <h6 style="text-align: center; color:skyblue;">HOW DOES COPYTRADER WORK?</h6>-->
                      
<!--                       <p style="">Using CopyTrader is simple: Choose the Popular expert trader whom you wish to copy and check their winning records. Set the amount to allocate for copying this trader, and click COPY. Going forward, you’ll be mirroring their positions automatically and in proportion to the amount</p>-->
                       
<!--                         <h6 style="text-align: center; color:skyblue;">HERE IS A LIST OF EXPERTS WHOSE POSITIONS ARE AVAILABLE FOR REPLICATION</h6>-->
<!--                         <br>-->
<!--                         <hr>-->
                    
<!--        </div>-->
        <!-- end row -->
        
        
        <!-- Bootstrap CSS and JS -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- JavaScript code to display modal if there's an error -->
<script>
    $(document).ready(function(){
        @if(session('error'))
            $('#errorModal').modal('show');
        @endif
    });
</script>

<!-- Error Modal -->
<div class="modal fade" id="errorModal" tabindex="-1" role="dialog" aria-labelledby="errorModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="errorModalLabel">Error</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {{ session('error') }}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

        <div class="row">
            @foreach($traders as $trader)
            <div class="col-lg-4">
                <div class="text-center card-box">
                    
                    <span class="border border-4">
                        
                    <div class="member-card pt-2 pb-2" style="border:10px;">

                          <img class="logo-dark" style="width:40px;;" src="blue-verified.png" />
                        <div class="thumb-lg member-thumb mx-auto"><img
                                src="{{asset('uploads/trader/'.$trader->image)}}" class="rounded-circle img-thumbnail"
                                alt="profile-image" width="100%"></div>

                        <div class="">
                            <h4>{{$trader->name}}</h4>
                        </div>
                        <form method=>
                         <input type="hidden" name="copy_name" value="freddie">
                        <button name="copy" id="copyButton{{$trader->id}}"
                            class="btn btn-primary mt-3 btn-rounded waves-effect w-md waves-light"
                            onclick="toggleCopyText('{{$trader->id}}')">Copy Now</button>
  </form>
  
  <!--<div class="dropdown">-->
  <!--  <button class="btn btn-primary dropdown-toggle"    id="copyButton{{$trader->id}}" type="button" data-toggle="dropdown">Copy Now-->
  <!--  <span class="caret"></span></button>-->
  <!--  <ul class="dropdown-menu"  name="copy" onclick="toggleCopyText('{{$trader->id}}')">-->
  <!--    <li><a href="{{url('copy')}}">1 Month</a></li>-->
  <!--    <li><a href="{{url('copy')}}">3 Months</a></li>-->
  <!--          <li><a href="{{url('copy')}}">6 Months</a></li>-->
  <!--    <li><a href="{{url('copy')}}">12 Months</a></li>-->
  <!--  </ul>-->
  <!--</div>-->
                        <!-- Add more buttons as needed with unique IDs and the toggleCopyText function -->



                        <div class="mt-4">
                            <div class="row">
                                <div class="col-4">
                                    <div class="mt-3">
                                        <h6 style="color:grey;">{{$trader->copier}}</h6>
                                        <p class="">COPIERS</p>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="mt-3" >
                                        <h6 style="color:seagreen;">+{{$trader->gains}}</h6>
                                        <p class="">GAINS</p>
                                    </div>
                                </div>
                                
                                 <div class="col-4">
                                    <div class="mt-3">
                                        <h6 style="color:seagreen;">[{{$trader->risk}}]</h6>
                                        <p class="">RISK</p>
                                    </div>
                                </div>
                                
                                  <div class="col-4">
                                    <div class="mt-3">
                                        <h6 style="color:red;">-{{$trader->loss}}</h6>
                                        <p class="">LOSS</p>
                                    </div>
                                </div>
                                
                                  <div class="col-4">
                                    <div class="mt-3">
                                        <h6 style="color:green;">{{$trader->commission}}%</h6>
                                        <p class="" >COMMISSION</p>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="mt-3">
                                        <h6 style="color:grey;">{{$trader->total_transactions}}</h6>
                                        <p class="">TXN</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach


        </div>

    </div>
    <!-- container -->
</div>
<style>
    .card-box {
        padding: 20px;
        border-radius: 7px;
        margin-bottom: 50px;
        background-color: #fff;
    }

    .social-links li a {
        border-radius: 50%;
        color: rgba(121, 121, 121, .8);
        display: inline-block;
        height: 30px;
        line-height: 27px;
        border: 2px solid rgba(121, 121, 121, .5);
        text-align: center;
        width: 30px
    }

    .social-links li a:hover {
        color: #797979;
        border: 2px solid #797979
    }

    .thumb-lg {
        height: 88px;
        width: 88px;
    }

    .img-thumbnail {
        padding: .25rem;
        background-color: #fff;
        border: 1px solid #dee2e6;
        border-radius: .25rem;
        max-width: 70%;
        height: auto;
    }

    .text-pink {
        color: #ff679b !important;
    }

    .btn-rounded {
        border-radius: 2em;
    }

    .text-muted {
        color: #98a6ad !important;
    }
</style>
<!-- content @s -->

</div>
</div>
<script>
    document.addEventListener("DOMContentLoaded", function() {
    // Check if the text has been Copying and update the button text accordingly
    updateButtonText();
});

function toggleCopyText(traderId) {
    // Check if the text has been Copying
    if (localStorage.getItem("isTextCopying_" + traderId)) {
        // If Copying, change the button text to "Copy Now" and remove the flag
        document.getElementById("copyButton" + traderId).innerHTML = "Copy Now";
        localStorage.removeItem("isTextCopying_" + traderId);
    } else {
        // If not Copying, change the button text to "Copying" and set the flag
        document.getElementById("copyButton" + traderId).innerHTML = "Copying";
        localStorage.setItem("isTextCopying_" + traderId, true);
    }
}

function updateButtonText() {
    // Check the current state and update the button text accordingly
    @foreach($traders as $trader)
        if (localStorage.getItem("isTextCopying_{{ $trader->id }}")) {
            document.getElementById("copyButton{{ $trader->id }}").innerHTML = "Copying";
        } else {
            document.getElementById("copyButton{{ $trader->id }}").innerHTML = "Copy Now";
        }
    @endforeach
}


</script>


@include('dashboard.footer')