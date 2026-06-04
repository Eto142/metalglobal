@include('dashboard.header')
<br><br>

<h3 style="text-align:center;">Account Settings</h3>
<br>
<div class="row">
  <div class="col-sm-8 col-md-8">
    <form method="POST" action>
      <div class="card">
        <div class="card-header">
          <span>
            <h3 style="color:crimson;text-align:center"></h3>
          </span>
          <span>
            <h3 style="color:green;text-align:center"></h3>
          </span>
          <h6 class="card-title">CHANGE PASSWORD</h6>
        </div>
        <form action="{{url('/change-password')}}" method="POST">
            @csrf
        <div class="card-body">
          <div class="form-group row">
            <label for="example-number-input" class="col-16 col-form-label">Old Password</label>
            <div class="col-16">
              <input class="form-control" type="password" value="" name="old_password" id="example-number-input" required>
              <span style="color:crimson"></span>
            </div>
          </div>
          <div class="form-group row">
            <label for="example-number-input" class="col-16 col-form-label">New Password</label>
            <div class="col-16">
              <input class="form-control" type="password" value="" name="new_password" id="example-number-input" required>
              <span style="color:crimson"></span>
            </div>
          </div>
          <div class="form-group row">
            <label for="example-number-input" class="col-16 col-form-label">Rewrite New Password</label>
            <div class="col-16">
              <input class="form-control" type="password" value="" name="password2" id="example-number-input" required>
              <span style="color:crimson"></span>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-16">
              <center><a href="{{url('home')}}"><input class="btn btn-outline-secondary" type="reset" name="request_btn" value="clear"></a>
                <input class="btn btn-outline-primary" type="submit" name="changePwd_btn" value="Change Password">
              </center>
            </div>
          </div>
        </div>
      </div>
    </form>
    <hr>
  </div>



  <div class="col-sm-8 col-md-8">

      <div class="card">
        <div class="card-header">
          <h6 class="card-title">PROFILE IMAGE</h6>
        </div>
        <div class="card-body">
          <div class="form-group row">
            <label for="example-number-input" class="col-16 col-form-label">Change Profile Image</label>
            <div class="col-16">
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
                <form action="{{route('upload_picture')}}" method ="POST" enctype="multipart/form-data">
                  {{ csrf_field()}}
              <img style="width:200px;height:200px;border-radius:30px" class="form-control" src="{{asset('user/uploads/id/'.Auth::user()->photo)}}" alt="{{Auth::user()->name}}">
              <input class="form-control" name="image" type="file" id="example-number-input" required>
            </div>
          </div>
          <!-- <div class="form-group row"> -->
          <div class="col-16">
            <center>
            <!-- <a href="account"><input class="btn btn-outline-secondary" type="reset" name="request_btn" value="clear"></a> -->
              <input class="btn btn-outline-primary" type="submit" name="changeImg_btn" value="Change Profile Image">
            </center>
          </div>
          <!-- </div> -->
        </div>
      </div>
    </form>
    <hr>
    <a href="account"><button class="btn btn-primary">back to account</button></a>
  </div>

</div><br><br>




    @include('dashboard.footer')