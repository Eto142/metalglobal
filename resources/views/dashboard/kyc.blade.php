@include('dashboard.header')
<br><br>


<h1 style="text-align:center;"><i class="fa fa-user"></i> Verify Account</h1>
<div class="row">
<div class="col-sm-16 col-md-16">
 <p>Verify  your account by providing us with a valid document (ID card). Drivers Licence, Valid Work ID, Passport, etc are accepted. Please do not try to upload a fake Document as our support teams reviews every document uploaded. Detected fake documents will lead to immediate suspension of account!, Once Uploaded, Our support team reviews your document. The Uploaded documents are for verification purposes only and are deleted  once confirmed. You will be notified via email once your document has been verified. Choose your document and click on the Verify Account button.</p>
   <div class="card">
     <div class="card-header">
       <!--<h6 class="card-title"></h6>-->
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

     <form action="{{ url('/upload-kyc')}}" method="POST"
         enctype="multipart/form-data">
         @csrf
     <div class="card-body">
       <div class="form-group row">
         <label for="example-number-input" class="col-16 col-form-label">Document Name</label>
         <div class="col-16">
           <input class="form-control" type="text" value="" name="card_name" placeholder="E.g: Driver\'s License, Valid Work ID, Passport, etc)" id="example-number-input"  required>
         </div>
       </div>
       <div class="form-group row">
         <label for="example-number-input" class="col-16 col-form-label">Front Page</label>
         <div class="col-16">
           <input type="file" name="card"  required>
         </div>
       </div>
       <div class="form-group row">
         <label for="example-number-input" class="col-16 col-form-label">Back Page</label>
         <div class="col-16">
           <input  type="file" name="pass"  required>
         </div>
       </div>
       <div class="form-group row">
         <div class="col-16">
           <center><a href="{{url('home')}}"><input class="btn btn-outline-secondary" type="reset" name="request_btn" value="clear"></a>
           <button class="btn btn-outline-primary" type="submit" name="verification">Verify Account</button></center>
         </div>
       </div>
       </form>
     </div>
   </div>
   <hr>
</div>
</div><br><br>



    @include('dashboard.footer')