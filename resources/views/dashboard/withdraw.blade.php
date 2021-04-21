@extends('layouts.dash')

@section('content')

    <div class="d-flex align-items-stretch">
      <nav id="sidebar">
        <!-- Sidebar Header-->
        <div class="sidebar-header d-flex align-items-center">

          <div class="title">
            <h1 class="h5"{{ Auth::user()->username }}</h1>
            {{-- <p>
                                              Pending
                                            </p> --}}
          </div>
        </div>
        <ul class="list-unstyled">
            <li class="{{ 'dashboard' ==  request()->path() ? 'active' : '' }}"><a href="/dashboard"> <i class="icon-home"></i>Home </a></li>
            <li class="{{ 'dashboard/sell-crypto' ==  request()->path() ? 'active' : '' }}"><a href="/dashboard/sell-crypto"> <i class="fa fa-btc"></i>Sell Bitcoin </a></li>
            <li class="{{ 'dashboard/buy-bitcoin' ==  request()->path() ? 'active' : '' }}"><a href="/dashboard/buy-bitcoin"> <i class="fa fa-bitcoin"></i>Buy Bitcoin </a></li>
          {{-- <li><a href="https://www.icomarkettrading.com/plan"> <i class="fa fa-bar-chart"></i>Forex Trade</a></li> --}}
          <li class="{{ 'dashboard/plan' ==  request()->path() ? 'active' : '' }}"><a href="/dashboard/plan"> <i class="fa fa-money"></i>Plan</a>
          </li>
          <li class="{{ 'dashboard/withdraw' ==  request()->path() ? 'active' : '' }}"><a href="/dashboard/withdraw"> <i class="fa fa-money"></i>Withdraw</a>
      </li>
      @if (Auth::user()->usertype == "ADMIN")
      <li class="{{ 'admin' ==  request()->path() ? 'active' : '' }}">
      <div class="dropdown">
          {{-- <a class="btn btn-primary dropdown-toggle" href="#!" role="button" id="dropdownMenuLink"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Dropdown link
          </a> --}}
          <a class="dropdown-toggle" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="/admin"> <i class="fa fa-money"></i>Admin Page</a>
          <div class="dropdown-menu dropdown-primary" aria-labelledby="dropdownMenuLink">
            <a class="dropdown-item" href="/admin"><i class="fa fa-money"></i>Home</a>
            <a class="dropdown-item" href="/admin/plan"><i class="fa fa-money"></i>Plan</a>
            <a class="dropdown-item" href="/admin/withdraw"><i class="fa fa-money"></i>Withdraw</a>
            <a class="dropdown-item" href="/admin/seller"><i class="fa fa-money"></i>Sellers</a>
            <a class="dropdown-item" href="/admin/buyer"><i class="fa fa-money"></i>Buyers</a>
          </div>
        </div>
      </li>
  @endif
        </ul>
                      </nav>
    <div class="page-content">


                  <div class="page-header">
  <div class="container-fluid">
    <h2 class="h5 no-margin-bottom">Withdrawal</h2>
  </div>
</div>
<div>


    </div><section class="no-padding-top no-padding-bottom">
  <div class="container-fluid">
    <div class="row">
        @if (session('status'))
        <div class="mt-4 alert alert-success alert-dismissible fade show" role="alert">
            {{ session('status') }}
        </div>
        @endif
      <div class="col-md-12">
        <div class="alert alert-primary" role="alert">
            <h2>Steps To Follow To Withdraw Your Cash</h2><hr>
            <ol>
                <li>Fill the form below</li>
                <li>Once confirmed by us we will credit your account</li>
            </ol>
          </div>
    <form class="mb-3" action="/withdraws" method="POST">
        @csrf
    <div class="form-group">
        <label for="exampleFormControlInput1">Amount</label>
        <input type="text" name="amount" class="form-control @error('amount') is-invalid @enderror" autocomplete="amount">
        @error('amount')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    </div>
<div class="form-group">
        <label for="exampleFormControlInput1">Bank Name</label>
        <input type="text" name="bank_name" class="form-control @error('bank_name') is-invalid @enderror" autocomplete="bank_name">
        @error('bank_name')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Account Number</label>
        <input type="text" name="account_number" class="form-control @error('account_number') is-invalid @enderror" autocomplete="account_number">
        @error('account_number')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Sort Code</label>
        <input type="text"  name="sort_code" id="sort_code" class="form-control" autocomplete="sort_code">
    </div>
    <script>
        //  alert('hi');
         document.getElementById('sort_code').value = Math.floor(Math.random() * 100000) + 1);
        // $(document).ready(function() {
        //     alert('hell0');
        //    $("input#sort_code").val(Math.floor((Math.random() * 1000000000000) + 1));
        //  });
   </script>
    <div class="form-group">
    <input type="hidden" name="user_id" value="{{ request()->user()->id }}" class="form-control">
    </div>

        <button type="submit" class="btn btn-primary"> Withdraw </button>
    </div>
    </form>
  </div>
</div>
</section>
<footer class="mt-3 footer">
  <div class="footer__block block no-margin-bottom">
    <div class="container-fluid text-center">
      <p class="no-margin-bottom">2021 &copy; Realcapitalassets. All Rights Reserved.</p>
    </div>
  </div>
</footer>

    </div>
    </div>
    <style>
        .float{
	position:fixed;
	width:60px;
	height:60px;
	bottom:20px;
	right:20px;
	background-color:#25d366;
	color:#FFF;
	border-radius:50px;
	text-align:center;
  font-size:30px;
	box-shadow: 1px 2px 2px #999;
  z-index:100;
}

.my-float{
	margin-top:16px;
}
</style>
<a href="https://api.whatsapp.com/send?phone=19784641094&amp;text=Good%20Day." class="float" target="_blank">
<i class="fa fa-whatsapp my-float"></i>
</a>
    <script src="/js/plug/jquery.min.js"></script>
    <script src="/js/plug/popper.js"> </script>
    <script src="/js/plug/bootstrap.js"></script>
    <script src="/js/plug/cookie.js"> </script>
    <script src="/js/plug/chrt.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="/js/plug/validate.js"></script>
    <script src="/js/plug/chart.js"></script>
    <script src="/js/plug/front.js"></script>
    <script>
    <script>
      var formatter = new Intl.NumberFormat('en-US', {
        style: 'currency',
        currency: 'USD',
    });


      jQuery.ajax({
          url: "https://min-api.cryptocompare.com/data/pricemulti",
          data: "fsyms=BTC,ETH,DASH,LTC&tsyms=USD",
          dataType: 'json',
      }).done(function(data) {
          jQuery("#dashCoin").html('$' + data.DASH.USD);
          jQuery("#ethCoin").html('$' + data.ETH.USD);
          jQuery("#btc").html('$' + data.BTC.USD);
          jQuery("#liteCoin").html('$' + data.LTC.USD);
      }).fail(function() {
          console.log("API error");
      });
  </script>

@endsection
