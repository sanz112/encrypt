
@extends('layouts.dash')

@section('content')
    <div class="d-flex align-items-stretch">
      <nav id="sidebar">
        <!-- Sidebar Header-->
        <div class="sidebar-header d-flex align-items-center">

          <div class="title">
            <h1 class="h5">T S</h1>
            <p>
                                              Pending
                                            </p>
          </div>
        </div>
               <ul class="list-unstyled">
                <li class="active"><a href="/dashboard"> <i class="icon-home"></i>Home </a></li>
                <li><a href="/dashboard/sell-crypto"> <i class="fa fa-btc"></i>Sell Bitcoin </a></li>
                <li><a href="/dashboard/buy-bitcoin"> <i class="fa fa-bitcoin"></i>Buy Bitcoin </a></li>
              {{-- <li><a href="https://www.icomarkettrading.com/plan"> <i class="fa fa-bar-chart"></i>Forex Trade</a></li> --}}
              <li><a href="/dashboard/withdraw"> <i class="fa fa-money"></i>Withdraw</a>
          </li>
        </ul>
                      </nav>
    <div class="page-content">





                  <div class="page-header">
  <div class="container-fluid">
    <h2 class="h5 no-margin-bottom">Buy Bitcoin</h2>
  </div>
</div>
<div>


    </div><section class="no-padding-top no-padding-bottom">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="alert alert-primary" role="alert">
            <h2>Steps To Follow To Buy Bitcoin from Us</h2><hr>
            <ol>
                <li>Fill in your details below</li>
                <li>Make sure you have some money in your wallet</li>
                <li>Once confirmed by us we will credit your Bitcoin Wallet</li>
            </ol>
          </div>
    <form action="https://www.icomarkettrading.com/buy-bitcoin" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="SEnWseU2wD2FeCIYUvrMUDDhNjB0yAeQOuUE7zqD">
    <div class="form-group">
        <label for="exampleFormControlInput1">Amount</label>
        <input type="text" name="amount" class="form-control" required autocomplete="amount">
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Wallet Name</label>
        <input type="text" name="wallet_name" class="form-control" required autocomplete="bank_name">
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Wallet Address</label>
        <input type="text" name="hash_key" class="form-control" required autocomplete="account_number">
    </div>

    <div class="form-group">
    <input type="hidden" name="user_id" value="72" class="form-control">
    </div>

    <div>
        <button type="submit" class="btn btn-primary"> BUY </button>
    </div>
    </form>
</div>
  </div>
</section>

<footer class="footer">
  <div class="footer__block block no-margin-bottom">
    <div class="container-fluid text-center">
      <p class="no-margin-bottom">2021 &copy; Realcapitalassets Trade. All Rights Reserved.</p>
    </div>
  </div>
</footer>
    </div>
    </div>
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
