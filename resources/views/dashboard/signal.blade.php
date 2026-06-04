@include('dashboard.header')
<br><br>

<h1 style="text-align:center;">Purchase Signal Plan</h1>
<div style="float:center" class="row">
<div class="col-sm-16 col-md-16">
<div class="card">
  <div class="card-header">
  <span><h3 style="color:crimson;text-align:center"></h3></span>
  </div>
  <form accept-charset="utf-8" method="post" action="{{url('get-signal')}}">
    {{csrf_field()}}
  <div class="card-body">
    <div class="form-group row">
      <label for="example-text-input" class="col-16 col-form-label">Full Name</label>
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
      <label for="example-url-input" class="col-16 col-form-label">Select Signal<font color="crimson">*</font></label>
      <div class="col-16">
      <select class="form-control" value="" name="signal" id="example-number-input" required>
      <option value="$1500 For Momentum Signals">Momentum Signals $1500</option>
      <option value="$3000 For Breakout Signals">Breakout Signals $3000</option>
      <option value="$5000 For Buying Oversold">Buying Oversold $5000</option>
      <option value="$10000 For Trend Signal">Trend Signal $10000</option>
      </select>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-16">
        <center><input class="btn btn-outline-primary" type="submit" name="investment" value="PURCHASE SIGNAL"></center>
      </div>
    </div>
    </form>
  </div>
</div>
</div>
<hr>
<a href="account"><button style="float:center" class="btn btn-primary">back to account</button></a>
</div>
<br><br>

  @include('dashboard.footer')