@include('dashboard.header')
<br><br>

<h1 style="text-align:center;">Upgrade Account</h1>
<div style="float:center" class="row">
<div class="col-sm-16 col-md-16">
<div class="card">
  <div class="card-header">
  <span><h3 style="color:crimson;text-align:center"></h3></span>
  </div>
  <form action="deposit" method="POST">
  <div class="card-body">
    <div class="form-group row">
      <label for="example-text-input" class="col-16 col-form-label">Full Name<font color="crimson">*</font></label>
      <div class="col-16">
        <input style="color:black" class="form-control" type="hidden" name="uid" value="Tgod1422" id="example-text-input">
        <input style="color:black" class="form-control" name="name" type="text" value="" id="example-text-input" required>
      </div>
    </div>
        <input style="color:black" class="form-control" type="hidden" value="" id="example-search-input"  required>
      
    <div class="form-group row">
      <label for="example-email-input" class="col-16 col-form-label">Email<font color="crimson">*</font></label>
      <div class="col-16">
        <input style="color:black" class="form-control" type="email" name="email" value="" id="example-email-input" required >
      </div>
    </div>
    <div class="form-group row">
      <label for="example-url-input" class="col-16 col-form-label">Select Package<font color="crimson">*</font></label>
      <div class="col-16">
      <select class="form-control" value="" name="plan" id="example-number-input" required>
    <option>PLAN</option>
    <option>PREMIUM $5,000 - $9,999</option>
    <option>DELUXE $10,000 - $49,999</option>
    <option>VIP $50,000 - $100,000</option>
      </select>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-16">
        <center><input class="btn btn-outline-primary" type="submit" name="request_upgrade" value="UPGRADE"></center>
      </div>
    </div>
    </form>
  </div>
</div>
</div>
<hr>
<a href="account"><button style="float:center" class="btn btn-primary">back to account</button></a>
</div><br><br>


  @include('dashboard.footer')