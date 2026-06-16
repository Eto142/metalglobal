@include('dashboard.header')
<br><br>

<div class="container" id="inv">
  <br><br>


  
  
  @if (session('status'))
  <div class="alert alert-success" role="alert">
    {{ session('status') }}
  </div>
  @endif
  @if($message = Session::get('success'))
  <div class="alert alert-success">
    <p>{{ $message }}</p>
  </div>
  @endif

  <h1 class="text-center">{{ $item }} Payment</h1>
  <br>

  <h4 class="text-center text-danger">
    SEND 
    {{-- @if($item == 'Bitcoin')
    <strong>{{ $btc_amount }}</strong>
    @elseif($item == 'Ethereum')
    <strong>{{ $eth_amount }}</strong>
    @endif --}}
    {{ $amount}}
    {{ $item }} TO THE WALLET ADDRESS BELOW OR SCAN THE QR CODE WITH YOUR WALLET APP
  </h4>
  <br>

  <div class="text-center">
    @if($item == 'Bitcoin')
      @foreach($payment as $payments)
      <img src="{{ asset('manager/uploads/manager/'.$payments->btcImage) }}" width="300" height="300" class="btn btn-outline-success" title="Click to Copy Bitcoin Address">
      <br><br>
      <div class="address-box bg-success text-white">
        <strong><input id="myInput" type="text" value="{{ $payments->btc_address }}" readonly></strong>
      </div>
      @endforeach
    @elseif($item == 'Usdt')
      @foreach($payment as $payments)
      <img src="{{ asset('manager/uploads/manager/'.$payments->usdtImage) }}" width="300" height="300" class="btn btn-outline-success" title="Click to Copy USDT Address">
      <br><br>
      <div class="address-box bg-success text-white">
        <strong><input id="myInput" type="text" value="{{ $payments->usdt_address }}" readonly></strong>
      </div>
      @endforeach
    @elseif($item == 'Ethereum')
      @foreach($payment as $payments)
      <img src="{{ asset('manager/uploads/manager/'.$payments->ethImage) }}" width="300" height="300" class="btn btn-outline-success" title="Click to Copy Ethereum Address">
      <br><br>
      <div class="address-box bg-success text-white">
        <strong><input id="myInput" type="text" value="{{ $payments->eth_address }}" readonly></strong>
      </div>
      @endforeach
    @endif
    <button type="button" onclick="myFunction()" class="btn btn-info mt-3">Click to Copy</button>
  </div>

  <br><br>
  <div class="alert alert-danger text-center">
    <marquee>Ensure to copy the address correctly to avoid payment errors.</marquee>
  </div>
  <br>

  <div class="col-md-12 text-center">
    <label>If your payment of <span class="text-success" style="font-size: 1.25em;">${{ $amount }}</span> was successful, please upload proof of payment below.</label>
    <br><br>
    <form action="{{ url('/make-deposit') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <input type="hidden" name="amount" value="{{ $amount }}">
      <input type="hidden" name="payment_method" value="{{ $item }}">
      <div class="form-group">
        <input type="file" name="image" class="form-control-file">
      </div>
      <br>
      <button type="submit" name="paid" class="btn btn-primary">Upload Payment Proof</button>
    </form>
  </div>
</div>

<style>
  .address-box {
    padding: 15px;
    border-radius: 8px;
    display: inline-block;
    width: 82%;
    margin-top: 10px;
  }
  #myInput {
    width: 100%;
    background-color: #5CB85C;
    color: white;
    border: none;
    text-align: center;
    font-size: 1.1em;
  }
  .text-center {
    text-align: center;
  }
</style>

<script>
  function myFunction() {
    var copyText = document.getElementById("myInput");
    copyText.select();
    document.execCommand("copy");
    alert("Copied the address: " + copyText.value);
  }
</script>





<script>
        function myFunction() {
                var copyText = document.getElementById("myInput");
                copyText.select();
                copyText.setSelectionRange(0, 99999);
                document.execCommand("copy");
                Swal.fire('', '<b>Bitcoin Wallet Copied : </b> ' + copyText.value + '', '', '');
        }
</script><br><br>
@include('dashboard.footer')