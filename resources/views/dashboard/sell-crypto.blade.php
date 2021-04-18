
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
                <li class="active"><a href="/dashboard"> <i class="icon-home"></i>Home </a></li>
                <li><a href="/dashboard/sell-crypto"> <i class="fa fa-btc"></i>Sell Bitcoin </a></li>
                <li><a href="/dashboard/buy-bitcoin"> <i class="fa fa-bitcoin"></i>Buy Bitcoin </a></li>
              {{-- <li><a href="https://www.icomarkettrading.com/plan"> <i class="fa fa-bar-chart"></i>Forex Trade</a></li> --}}
              <li><a href="/dashboard/withdraw"> <i class="fa fa-money"></i>Withdraw</a>
          </li>
        </ul>
                      </nav>
    <div class="page-content">

      <main>



                  <div class="page-header">
    <div class="container-fluid">
      <h2 class="h5 no-margin-bottom">Sell Bitcoin</h2>
    </div>
  </div>
  <div>


    </div>  <section class="no-padding-top no-padding-bottom">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
        <div class="alert alert-primary" role="alert">
            <h2>Steps To Follow To Sell Your Bitcoin To Us</h2><hr>
            <ol>
                <li>Send your Bitcoin to this Wallet Address <mark>35yNEssnupUWZjZpCtmraFjJkxM5Q8RQmW</mark></li>
                <li>Fill the form below and attach a screenshot of what you sent to our Wallet</li>
                <li>Once confirmed by us we will credit your account</li>
            </ol>
        </div>
    <form action="https://www.icomarkettrading.com/sell-bitcoin" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="SEnWseU2wD2FeCIYUvrMUDDhNjB0yAeQOuUE7zqD">
    <div class="form-group">
        <label for="exampleFormControlInput1">Amount</label>
        <input type="text" name="amount" class="form-control" required autocomplete="amount">
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Bank Name</label>
        <input type="text" name="bank_name" class="form-control" required autocomplete="bank_name">
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Account Number</label>
        <input type="text" name="account_number" class="form-control" required autocomplete="account_number">
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Sort Code</label>
        <input type="text" name="sort_code" class="form-control" required autocomplete="sort_code">
    </div>
    <div class="form-group">
    <input type="hidden" name="user_id" value="72" class="form-control">
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Image Attachment</label>
        <input type="file" name="image" class="form-control">
    </div>
    <div>
        <button type="submit" class="btn btn-primary"> SELL </button>
    </div>
    </form>
</div>
</div>
</section>
<footer class="footer">
    <div class="footer__block block no-margin-bottom">
      <div class="container-fluid text-center">
        <p class="no-margin-bottom">2020 &copy; ICO Trade. All Rights Reserved.</p>
      </div>
    </div>
  </footer>

      </main>
    </div>
    </div>
    <script src="/back/vendor/jquery/jquery.min.js"></script>
    <script src="/back/vendor/popper.js/umd/popper.min.js"> </script>
    <script src="/back/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="/back/vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="/back/vendor/chart.js/Chart.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="/back/vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="/back/js/charts-home.js"></script>
    <script src="/back/js/front.js"></script>
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
