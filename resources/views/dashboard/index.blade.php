@extends('layouts.dash')

@section('content')

<div class="d-flex align-items-stretch">
      <nav id="sidebar">
        <!-- Sidebar Header-->
        <div class="sidebar-header d-flex align-items-center">

          <div class="title">
            <h1 class="h5">{{ Auth::user()->username }}</h1>
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
      <h2 class="h5 no-margin-bottom">Dashboard</h2>
      @if (session('status'))
      <div class="mt-4 alert alert-danger alert-dismissible fade show" role="alert">
          {{ session('status') }}
      </div>
      @endif
    </div>
  </div>
  <section class="no-padding-top no-padding-bottom">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3 col-sm-6">
          <div class="statistic-block block">
            <div class="progress-details d-flex align-items-end justify-content-between">
              <div class="title">
                <div class="icon"></div><strong> Your Wallet</strong>
              </div>
              <div class="number dashtext-1">${{ $users->wallet }}</div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="statistic-block block">
            <div class="progress-details d-flex align-items-end justify-content-between">
              <div class="title">
                <div class="icon"></div><strong>BTC Price</strong>
              </div>
              <div class="number dashtext-2" id="btc"></div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="statistic-block block">
            <div class="progress-details d-flex align-items-end justify-content-between">
              <div class="title">
                <div class="icon"></div><strong>ETH Price</strong>
              </div>
              <div class="number dashtext-3" id="ethCoin"></div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="statistic-block block">
            <div class="progress-details d-flex align-items-end justify-content-between">
              <div class="title">
                <div class="icon"></div><strong>LTC Price</strong>
              </div>
              <div class="number dashtext-4" id="liteCoin"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="no-padding-bottom">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="drills-chart block">
            <iframe src="https://s.tradingview.com/widgetembed/?frameElementId=tradingview_a3b34&symbol=BITFINEX%3ABTCUSD&interval=1&hidesidetoolbar=0&symboledit=1&saveimage=1&toolbarbg=f1f3f6&calendar=1&studies=BB%40tv-basicstudies&theme=Dark&style=9&timezone=Etc%2FUTC&studies_overrides=%7B%7D&overrides=%7B%7D&enabled_features=%5B%5D&disabled_features=%5B%5D&locale=en&utm_source=user.ultimate-stockfx.com&utm_medium=widget_new&utm_campaign=chart&utm_term=BITFINEX%3ABTCUSD"
            width="100%" height="500px" frameborder="0">
            </iframe>

          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="no-padding-bottom">
    <div class="container-fluid">

      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header">

              <h5 class="card-title">Sold Bitcoins Table</h5>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table">
                  <thead class="text-primary">
                    <tr>
                      <th>
                        Amount
                      </th>
                      <th>
                        Bank Name
                      </th>
                      <th>
                        Account Number
                      </th>
                      <th>
                        Sort Code
                      </th>
                      <th>
                        Status
                      </th>
                    </tr>
                  </thead>
                  <tbody>

                    @forelse ($users->sellCryptos as $model)
                    <tbody>

                        <td>
                            {{ $model->amount }}
                          </td>
                          <td>
                            {{ $model->bank_name }}
                          </td>
                          <td>
                            {{ $model->account_number }}
                          </td>
                          <td>
                            {{ $model->sort_code }}
                          </td>
    <td>
                            <span class="badge badge-danger">{{ $model->status}} </span>
                           </td>

                    </tbody>

                    @empty
                  <tbody>
                    <td>
                      <span>No records Found</span>
                     </td>
                  </tbody>
                    @endforelse
                </table>
              </div>
            </div>
          </div>
        </div>

      </div>

      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header">
              <h5 class="card-title">Bought Bitcoins Table</h5>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table">
                  <thead class="text-primary">
                    <tr>
                      <th>
                        Amount
                      </th>
                      <th>
                        Wallet Name
                      </th>
                      <th>
                        Wallet Address
                      </th>
                      <th>
                        Status
                      </th>
                    </tr>
                  </thead>
                  @forelse ($users->buyBitcoins as $model)
                  <tbody>

                    <tr>
                      <td>
                        {{ $model->amount ?? '' }}
                      </td>
                      <td>
                        {{ $model->wallet_name ?? '' }}
                      </td>
                      <td>
                        {{ $model->hash_key ?? '' }}
                      </td>
                      <td>
                        <span class="badge badge-danger">{{ $model->status}} </span>
                         </td>
                      </tr>
                  </tbody>

                  @empty
                <tbody>
                  <td>
                    <span>No records Found</span>
                   </td>
                </tbody>
                  @endforelse
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header">
              <h5 class="card-title">Withdrawals</h5>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table">
                  <thead class="text-primary">
                    <tr>
                      <th>
                        Amount
                      </th>
                      <th>
                        Bank Name
                      </th>
                      <th>
                        Account Number
                      </th>
                      <th>
                        Status
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse ($users->withdrawCoins as $model)
                    <tbody>

                      <tr>
                        <td>
                            {{ $model->amount }}
                          </td>
                          <td>
                            {{ $model->bank_name }}
                          </td>
                          <td>
                            {{ $model->account_number }}
                          </td>
                          <td>
                            {{ $model->sort_code }}
                          </td>
    <td>
                            <span class="badge badge-danger">{{ $model->status}} </span>
                           </td>
  </tr>
                    </tbody>

                    @empty
                  <tbody>
                    <td>
                      <span>No records Found</span>
                     </td>
                  </tbody>
                    @endforelse
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header">

              <h5 class="card-title">Investment Plans Table </h5>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table">
                  <thead class="text-primary">
                    <tr>
                      <th>
                        Investment Type
                      </th>
                      <th>
                        Sort Code
                      </th>
                      <th>
                        Status
                      </th>
                    </tr>
                  </thead>
                  <tbody>

                    @forelse ($users->plans as $model)
                    <tbody>

                        <td>
                            {{ $model->plan_name }}
                          </td>
                          <td>
                            {{ $model->sort_code }}
                          </td>
                            <td>
                            <span class="badge badge-danger">{{ $model->status }} </span>
                           </td>

                    </tbody>

                    @empty
                  <tbody>
                    <td>
                      <span>No Investment Plans</span>
                     </td>
                  </tbody>
                    @endforelse
                </table>
              </div>
            </div>
          </div>
        </div>

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
