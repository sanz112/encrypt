
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bomex</title>
    <!-- CSRF Token -->
    {{-- <meta name="csrf-token" content="SEnWseU2wD2FeCIYUvrMUDDhNjB0yAeQOuUE7zqD"> --}}
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="/css/plug/bootstrap.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="/css/plug/fontAwesome.css">
    <!-- Custom Font Icons CSS-->
    <link rel="stylesheet" href="/css/plug/font.css">
    <!-- Google fonts - Muli-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="/css/plug/default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="/back/css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="/back/img/favicon.ico">
    <!-- Tweaks for older IEs-->
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  </head>
  <body>
    <header class="header">
      <nav class="navbar navbar-expand-lg">
        <div class="search-panel">
          <div class="search-inner d-flex align-items-center justify-content-center">
            <div class="close-btn">Close <i class="fa fa-close"></i></div>

          </div>
        </div>
        <div class="container-fluid d-flex align-items-center justify-content-between">
          <div class="navbar-header">
            <!-- Navbar Header--><a href="index.html" class="navbar-brand">
              <div class="brand-text brand-big visible text-uppercase"><strong class="text-primary">Bomex</strong></div>
              <div class="brand-text brand-sm"><strong class="text-primary">B</strong><strong>M</strong></div></a>
            <!-- Sidebar Toggle Btn-->
            <button class="sidebar-toggle"><i class="fa fa-long-arrow-left"></i></button>
          </div>
          <div class="right-menu list-inline no-margin-bottom">

            <!-- Log out               -->
            <div class="list-inline-item logout">
              <a class="dropdown-item" href="https://www.icomarkettrading.com/logout"
                  onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
                <i class="icon-logout"></i>Logout
                    </a>

                <form id="logout-form" action="https://www.icomarkettrading.com/logout" method="POST" style="display: none;">
                <input type="hidden" name="_token" value="SEnWseU2wD2FeCIYUvrMUDDhNjB0yAeQOuUE7zqD">              </form>
              </div>
          </div>
        </div>
      </nav>
    </header>
    <div class="d-flex align-items-stretch">
      <nav id="sidebar">
        <!-- Sidebar Header-->
        <div class="sidebar-header d-flex align-items-center">

          <div class="title">
            <h1 class="h5"></h1>
            <p>
                                              Pending
                                            </p>
          </div>
        </div>
               <ul class="list-unstyled">
          <li class="active"><a href="https://www.icomarkettrading.com/home"> <i class="icon-home"></i>Home </a></li>
          <li><a href="https://www.icomarkettrading.com/sell-bitcoin"> <i class="fa fa-btc"></i>Sell Bitcoin </a></li>
          <li><a href="https://www.icomarkettrading.com/buy-bitcoin"> <i class="fa fa-bitcoin"></i>Buy Bitcoin </a></li>
        {{-- <li><a href="https://www.icomarkettrading.com/plan"> <i class="fa fa-bar-chart"></i>Forex Trade</a></li> --}}
        <li><a href="https://www.icomarkettrading.com/withdrawal"> <i class="fa fa-money"></i>Withdraw</a>
          {{-- <li><a href="https://www.icomarkettrading.com/wallet"> <i class="fa fa-money"></i>Fund Wallet</a> --}}
          </li>
        </ul>
                      </nav>
    <div class="page-content">

      <main>



                    <div class="page-header">
    <div class="container-fluid">
      <h2 class="h5 no-margin-bottom">Dashboard</h2>
    </div>
  </div>
  <section class="no-padding-top no-padding-bottom">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3 col-sm-6">
          <div class="statistic-block block">
            <div class="progress-details d-flex align-items-end justify-content-between">
              <div class="title">
                <div class="icon"><i class="icon-user-1"></i></div><strong>Wallet</strong>
              </div>
              <div class="number dashtext-1">$0.00</div>
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

                                        No records yet!
                                      </tbody>
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
                  <tbody>

                                        <tr>
                      <td>
                        1000
                      </td>
                      <td>
                        Fbgv
                      </td>
                      <td>
                       Bvvvvv
                      </td>
                      <td>
                                              <span class="badge badge-danger">Pending</span>
                                             </td>
                    </tr>
                                      </tbody>
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
                        Status
                      </th>
                    </tr>
                  </thead>
                  <tbody>

                                        No records yet!
                                      </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>


          </div>
  </section>

  <footer class="footer">
    <div class="footer__block block no-margin-bottom">
      <div class="container-fluid text-center">
        <p class="no-margin-bottom">2021 &copy; Bomex Trade. All Rights Reserved.</p>
      </div>
    </div>
  </footer>

      </main>
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
  </body>
</html>
