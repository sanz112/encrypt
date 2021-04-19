
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <title>Realcapitalassets/title>
        <!-- mobile responsive meta -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" sizes="57x57" href="img/favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="img/favicon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="img/favicon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="img/favicon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="img/favicon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="img/favicon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="img/favicon/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="img/favicon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
        <link rel="manifest" href="img/favicon/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
</head>
<body class="active-preloader-ovh">

<div class="preloader"><div class="spinner"></div></div><!-- /.preloader -->



<header class="header header-home-one">
    <nav class="navbar navbar-default header-navigation stricky">
        <div class="thm-container clearfix">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button style="color: #fff !important" type="button" class="navbar-toggle collapsed bitmex-icon-menu" data-toggle="collapse" data-target=".main-navigation" aria-expanded="false"> </button>
                <a class="navbar-brand" href="#">
                    {{-- <img src="img/logonew.png" alt="Awesome Image"/> --}}
                    RealCapitalAssets
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse main-navigation mainmenu " id="main-nav-bar">

                <ul class="nav navbar-nav navigation-box">
                    <li class="current">
                        <a href="#!">Home</a>
                        {{-- <ul class="sub-menu">
                            <li><a href="index.html">Home Page One</a></li>
                            <li><a href="index2.html">Home Page Two</a></li>
                            <li><a href="index3.html">Home Page Three</a></li>
                            <li><a href="index4.html">Home Page Four</a></li>
                            <li><a href="index5.html">Home Page Five</a></li>
                        </ul><!-- /.sub-menu --> --}}
                    </li>
                    <li> <a href="#about">About</a> </li>
                    <li>
                        <a href="#faq">FAQ</a>
                        {{-- <ul class="sub-menu">
                            <li><a href="services.html">Service Page</a></li>
                            <li><a href="service-details.html">Service Details</a></li>
                        </ul><!-- /.sub-menu --> --}}
                    </li>
                    {{-- <li>
                        <a href="#">Pages</a>
                        <ul class="sub-menu">
                            <li><a href="404.html">404 Page</a></li>
                            <li><a href="how-it-works.html">How it works</a></li>
                            <li>
                            	<a href="team.html">Our Team</a>
                            	{{-- <ul class="sub-menu">
                            		<li><a href="team.html">Team Style One</a></li>
                            		<li><a href="team2.html">Team Style Two</a></li>
                            		<li><a href="team3.html">Team Style Three</a></li>
                            	</ul><!-- /.sub-menu --> --}}
                            {{-- </li>
                            <li><a href="what-is-bit.html">What Is Bitcoin</a></li>
                            <li><a href="exchange.html">Exchange</a></li>
                            <li><a href="charts.html">Charts</a></li>
                        </ul><!-- /.sub-menu -->
                    </li> --}}
                    {{-- <li>
                        <a href="blog.html">News</a>
                        {{-- <ul class="sub-menu">
                            <li><a href="blog.html">News Grid</a></li>
                            <li><a href="blog-details.html">News Details</a></li>
                        </ul><!-- /.sub-menu -->
                    </li> --}}
                    <li> <a href="#contact">Contact</a> </li>
                    <li  class="valign-middle"> <a style="color: #fff" href="/login">Login</a> </li>
                    <li  class="valign-middle"> <a style="color: yellow"href="/register">Register</a> </li>
                </ul>
            </div><!-- /.navbar-collapse -->
            <div class="right-side-box">
                {{-- <a href="#test-search" class="search-icon popup-with-zoom-anim bitmex-icon-search"></a><!-- --}}
            <a href="#hidden-sidebar" class="side-menu-icon bitmex-icon-menu side-nav-opener"></a>
            </div><!-- /.right-side-box -->
        </div><!-- /.container -->
    </nav>
</header><!-- /.header -->


<div id="minimal-bootstrap-carousel" class="carousel slide carousel-fade slider-home-one" data-ride="carousel">
	<div id="particles-js"></div><!-- /#particles-js -->
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active slide-1" style="background-image: url(img/banner-1-1-1.png);background-position: right bottom;">

            <div class="carousel-caption">
                <div class="thm-container">
                    <div class="box valign-middle">
                        <div class="content ">
                            <h3 data-animation="animated fadeInUp">Crypto-<br>currency for<br>
                                Stock Trading.</h3>
                            <p data-animation="animated fadeInDown">Crypto</p>
                            <a href="/dashboard" class="thm-btn" data-animation="animated fadeInDown">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item slide-2" style="background-image: url(img/bit.png);background-position: right center;">

            <div class="carousel-caption">
                <div class="thm-container">
                    <div class="box valign-middle">
                        <div class="content ">
                            <h3 data-animation="animated fadeInUp">Bitcoins are secure <br /> in your pocket</h3>
                            <p data-animation="animated fadeInDown"> Bitcoin is a <br /> decentralized crrency and are very secure</p>
                            <a href="/dashboard" class="thm-btn" data-animation="animated fadeInDown">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Controls -->
    <a class="left carousel-control" href="#minimal-bootstrap-carousel" role="button" data-slide="prev">
        <i class="fa fa-angle-left"></i>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#minimal-bootstrap-carousel" role="button" data-slide="next">
        <i class="fa fa-angle-right"></i>
        <span class="sr-only">Next</span>
    </a>

    <ul class="carousel-indicators list-inline custom-navigation">
        <li data-target="#minimal-bootstrap-carousel" data-slide-to="0" class="active"></li><!--
        --><li data-target="#minimal-bootstrap-carousel" data-slide-to="1"></li>
    </ul>
</div>

<section class="feature-style-one sec-pad text-center">
	<div class="thm-container">
		<div class="row">
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="single-feature-style-one">
					<div class="icon-box">
						<i class="bitmex-icon-businessman"></i>
					</div><!-- /.icon-box -->
					<a href="#"><h3>Register</h3></a>
					<p>Simply go to the sign-up section on the website, fill in your details, and submit your registration. Once accepted, you gain access to our proprietary Bitcoin and Forex trading completely free.</p>
				</div><!-- /.single-feature-style-one -->
			</div><!-- /.col-md-4 -->
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="single-feature-style-one">
					<div class="icon-box">
						<i class="bitmex-icon-wallet"></i>
					</div><!-- /.icon-box -->
					<a href="#"><h3>Fund Account</h3></a>
					<p>To get your trading account underway, you’ll need to add some funds. With ICO, your first investment can be as little as $100, but feel free to invest as much as you desire.</p>
				</div><!-- /.single-feature-style-one -->
			</div><!-- /.col-md-4 -->
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="single-feature-style-one">
					<div class="icon-box">
						<i class="bitmex-icon-data"></i>
					</div><!-- /.icon-box -->
					<a href="#"><h3>Relax</h3></a>
					Now that your registration has been accepted and you’ve made your first investment, you’re all done. Simply click ‘trade’ to start reaping the daily % for trading with us, and ofcourse you can cancel your trade any time and withdraw your wallet balance.</p>
				</div><!-- /.single-feature-style-one -->
			</div><!-- /.col-md-4 -->
		</div><!-- /.row -->
	</div><!-- /.thm-container -->
</section><!-- /.feature-style-one -->

<section class="about-style-one gray-bg sec-pad" id="about">
	<div class="thm-container">
		<div class="row">
			<div class="col-md-6">
				<div class="about-style-one-content">
					<span>Learn about us</span>
					<h3>About Bitcoin</h3>
					<p>At Realcapitalassets we have profesional Forex Traders who will use their professional expertice to help you trade your Cryptocurrency in the stock market and make profits from %10 monthly, The more you invest the more profit you earn per day.</p>
					<a href="/dashboard" class="thm-btn yellow-bg-hvr">Get Started</a>
				</div><!-- /.about-style-one-content -->
			</div><!-- /.col-md-6 -->
			<div class="col-md-6">
				<img src="img/about-moc-1.png" alt="" class="moc-img" />
			</div><!-- /.col-md-6 -->
		</div><!-- /.row -->
	</div><!-- /.thm-container -->
</section><!-- /.about-style-one -->

<section class="fun-fact-style-one dark-bg sec-pad">
	<div class="thm-container">
		<div class="row">
			<div class="col-md-3 col-sm-6">
				<div class="single-fun-fact-style-one text-center">
					<i class="bitmex-icon-coin"></i>
					<p>Total Transactions</p>
					<h3 class="counter">8980</h3>
				</div><!-- /.single-fun-fact-style-one text-center -->
			</div><!-- /.col-md-3 -->
			<div class="col-md-3 col-sm-6">
				<div class="single-fun-fact-style-one text-center">
					<i class="bitmex-icon-wallet"></i>
					<p>Bitcoin Wallets</p>
					<h3 class="counter">7540</h3>
				</div><!-- /.single-fun-fact-style-one text-center -->
			</div><!-- /.col-md-3 -->
			<div class="col-md-3 col-sm-6">
				<div class="single-fun-fact-style-one text-center">
					<i class="bitmex-icon-like"></i>
					<p>Happy Users</p>
					<h3 class="counter">9260</h3>
				</div><!-- /.single-fun-fact-style-one text-center -->
			</div><!-- /.col-md-3 -->
			<div class="col-md-3 col-sm-6">
				<div class="single-fun-fact-style-one text-center">
					<i class="bitmex-icon-handshake"></i>
					<p>Bitcoin Investors</p>
					<h3 class="counter">5721</h3>
				</div><!-- /.single-fun-fact-style-one text-center -->
			</div><!-- /.col-md-3 -->
		</div><!-- /.row -->
	</div><!-- /.thm-container -->
</section><!-- /.fun-fact-style-one -->
<section class="btc-calculator sec-pad">
	<div class="thm-container">
		<div class="sec-title text-center black">
			<span>Bitcoin currency</span>
			<h3>Calculator</h3>
			{{-- <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy <br /> eirmod tempor invidunt ut laboret dolore magna aliquyam erat.</p> --}}
		</div><!-- /.sec-title -->
		<form action="#" class="btc-calc-form row">
			<div class="col-md-3">
				<input type="text" placeholder="Enter Amount" />
			</div><!-- /.col-md-3 -->
			<div class="col-md-3">
				<select class="selectpicker">
					<option value="#">Bitcoin ( BTC )</option>
					{{-- <option value="#">Bitcoin ( BTC )</option>
					<option value="#">Bitcoin ( BTC )</option>
					<option value="#">Bitcoin ( BTC )</option>
					<option value="#">Bitcoin ( BTC )</option>
					<option value="#">Bitcoin ( BTC )</option> --}}
				</select>
			</div><!-- /.col-md-3 -->
			<div class="col-md-3">
				<input type="text" placeholder="Enter Amount" />
			</div><!-- /.col-md-3 -->
			<div class="col-md-3">
				<select class="selectpicker">
					<option value="#">US Dollars</option>
					{{-- <option value="#">US Dollars</option>
					<option value="#">US Dollars</option>
					<option value="#">US Dollars</option>
					<option value="#">US Dollars</option>
					<option value="#">US Dollars</option> --}}
				</select>
			</div><!-- /.col-md-3 -->
		</form><!-- /.btc-calc-form -->
	</div><!-- /.thm-container -->
</section><!-- /.btc-calculator -->

<section class="how-it-works sec-pad">
	<div class="thm-container">
		<div class="sec-title text-center">
			<span>check our process</span>
			<h3>How It Works</h3>
		</div><!-- /.sec-title text-center -->
		<div class="row">
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="single-how-it-works text-center">
					<div class="icon-box">
						<i class="bitmex-icon-wallet"></i>
						<div class="count">01</div><!-- /.count -->
					</div><!-- /.icon-box -->
					<h3>Choose Your Wallet</h3>
					<p>Select your walllet options</p>
				</div><!-- /.single-how-it-works text-center -->
			</div><!-- /.col-md-4 -->
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="single-how-it-works text-center">
					<div class="icon-box">
						<i class="bitmex-icon-payment"></i>
						<div class="count">02</div><!-- /.count -->
					</div><!-- /.icon-box -->
					<h3>Make a Payment</h3>
					<p>Send a receipts of payment option</p>
				</div><!-- /.single-how-it-works text-center -->
			</div><!-- /.col-md-4 -->
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="single-how-it-works text-center">
					<div class="icon-box">
						<i class="bitmex-icon-tap"></i>
						<div class="count">03</div><!-- /.count -->
					</div><!-- /.icon-box -->
					<h3>Start Buying & Selling</h3>
					<p>Start selling and buying of your crypto currency</p>
				</div><!-- /.single-how-it-works text-center -->
			</div><!-- /.col-md-4 -->
		</div><!-- /.row -->
	</div><!-- /.thm-container -->
</section><!-- /.how-it-works -->

<section class="coin-chart-style-one sec-pad dark-bg">
	<div class="thm-container">
		<div class="sec-title light text-center">
			<span>Our Growth</span>
			<h3>Coin Charts</h3>
		</div><!-- /.sec-title light -->
		<div class="row">
			<div class="col-md-6">
				<div class="chart-title">
					<h3>$22,000</h3>
					<p>Bitcoin Price</p>
				</div><!-- /.chart-title -->
				<canvas id="price-rate-chart"></canvas><!-- /#price-rate-chart -->
			</div><!-- /.col-md-6 -->
			<div class="col-md-6">
				<div class="chart-title">
					<h3>Eth</h3>
					<p>Eth Price</p>
				</div><!-- /.chart-title -->
				<canvas id="eth-stats-chart"></canvas><!-- /#price-rate-chart -->
			</div><!-- /.col-md-6 -->
		</div><!-- /.row -->
	</div><!-- /.thm-container -->
</section><!-- /.coin-chart-style-one -->
{{--
<section class="team-style-one sec-pad">
	<div class="thm-container">
		<div class="sec-title text-center">
			<span>meet our team</span>
			<h3>Bitcoin Experts</h3>
		</div><!-- /.sec-title text-center -->
		<div class="row">
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="single-team-style-one hvr-float-shadow">
					<div class="img-box">
						<img src="img/team-1-1.jpg" alt="Awesome Image"/>
					</div><!-- /.img-box -->
					<div class="text-box text-center">
						<h3>Kathern Dughi</h3>
						<span>Director</span>
						<p>Praesent dapibus iseleifend augu <br /> eget sollicitudin velit liqu lese.</p>
						<div class="social">
				        	<a href="#" class="fa fa-twitter"></a><!--
				        	--><a href="#" class="fa fa-facebook"></a><!--
				        	--><a href="#" class="fa fa-youtube-play"></a><!--
				        	--><a href="#" class="fa fa-pinterest"></a>
				        </div><!-- /.social -->
					</div><!-- /.text-box -->
				</div><!-- /.single-team-style-one -->
			</div><!-- /.col-md-4 -->
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="single-team-style-one hvr-float-shadow">
					<div class="img-box">
						<img src="img/team-1-2.jpg" alt="Awesome Image"/>
					</div><!-- /.img-box -->
					<div class="text-box text-center">
						<h3>Sau Merzlak</h3>
						<span>Director</span>
						<p>Present dapibus iseleifend augu <br /> eget sollicitudin velit liqu lese.</p>
						<div class="social">
				        	<a href="#" class="fa fa-twitter"></a><!--
				        	--><a href="#" class="fa fa-facebook"></a><!--
				        	--><a href="#" class="fa fa-youtube-play"></a><!--
				        	--><a href="#" class="fa fa-pinterest"></a>
				        </div><!-- /.social -->
					</div><!-- /.text-box -->
				</div><!-- /.single-team-style-one -->
			</div><!-- /.col-md-4 -->
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="single-team-style-one hvr-float-shadow">
					<div class="img-box">
						<img src="img/team-1-3.jpg" alt="Awesome Image"/>
					</div><!-- /.img-box -->
					<div class="text-box text-center">
						<h3>Corie Malkasian</h3>
						<span>Director</span>
						<p>Praesent dapibus iseleifend augu <br /> eget sollicitudin velit liqu lese.</p>
						<div class="social">
				        	<a href="#" class="fa fa-twitter"></a><!--
				        	--><a href="#" class="fa fa-facebook"></a><!--
				        	--><a href="#" class="fa fa-youtube-play"></a><!--
				        	--><a href="#" class="fa fa-pinterest"></a>
				        </div><!-- /.social -->
					</div><!-- /.text-box -->
				</div><!-- /.single-team-style-one -->
			</div><!-- /.col-md-4 -->
		</div><!-- /.row -->
	</div><!-- /.thm-container -->
</section><!-- /.team-style-one sec-pad --> --}}

  {{-- <!-- Pricing -->
  <div class="section-padding bg-color-2" id="pricing">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <div class="section-heading text-center">
            <h3>Crypto Pricing</h3>
            <p>See The Latest Price of The Popular Cryptocurrency</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="pricing-slider" id="pricing-slider">
          <div class="pricing-box">
            <div class="pricing-thumb pricing-thumb-1"></div>
            <div class="pricing-body text-center">
              <div class="icon">
                <img src="/front/images/logo/pricing/icon-1.png" class="img-responsive" alt="">
              </div>
              <h6>Bitcoin</h6>
              <p id="btc"></p>
            </div>
          </div>
          <div class="pricing-box">
            <div class="pricing-thumb pricing-thumb-2"></div>
            <div class="pricing-body text-center">
              <div class="icon">
                <img src="/front/images/logo/pricing/icon-2.png" class="img-responsive" alt="">
              </div>
              <h6>Ethereum</h6>
              <p id="ethCoin"></p>
            </div>
          </div>
          <div class="pricing-box">
            <div class="pricing-thumb pricing-thumb-4"></div>
            <div class="pricing-body text-center">
              <div class="icon">
                <img src="/front/images/logo/pricing/icon-4.png" class="img-responsive" alt="">
              </div>
              <h6>Dash</h6>
              <p id="dashCoin"></p>
            </div>
          </div>
          <div class="pricing-box">
            <div class="pricing-thumb pricing-thumb-4"></div>
            <div class="pricing-body text-center">
              <div class="icon">
                <img src="/front/images/logo/pricing/litecoin.png" class="img-responsive" alt="" width="60px" height="60px">
              </div>
              <h6>LiteCoin</h6>
              <p id="liteCoin"></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> --}}
  <!-- Pricing End -->


  <!-- FAQ -->
  <div class="frequiently-ask-question section-padding-top bg-color-2" id="faq">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <div class="section-heading text-center">
            <h3 style="color:#fff">F.A.Q</h3>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="Realcapitalassetst-accordion">
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingOne">
                  <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      What is Realcapitalassets Trade ?
                    </a>
                  </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                  <div class="panel-body">
                    Realcapitalassets is a group of profesional forex traders that helps you trade you Cryptocurrency at the stock market and expect profits from %15 bper day, we also buy and sell cryptocurrency to whoever needs it.
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingTwo">
                  <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      How much can i earn per day?
                    </a>
                  </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                  <div class="panel-body">
                    You shoud expect to earn upto %15 percent if you are on our Gold plan, you can earn more than that if you invest more.
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingThree">
                  <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      Does Realcapitalassets charge any fee?
                    </a>
                  </h4>
                </div>
                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                  <div class="panel-body">
                    Yes, and guess what we only charge 10% of your profit made by our traders.
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingFour">
                  <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                      Is Realcapitalassets like MLM or affiliate marketting?
                    </a>
                  </h4>
                </div>
                <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                  <div class="panel-body">
                    Realcapitalassets is a leading forex trading platform, which makes it different from MLM or Affiliate Marketting, you make significant earnings with a small investment..
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- FAQ End -->


<div style="padding: 50px 0;" class="footer-top mt-4 pt-5" id="contact">
	<div class="thm-container">
		<div class="row mt-5">
			<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
				<div class="single-footer-top">
					<p><i class="bitmex-icon-envelope"></i><span>Email: </span>inquiry@bitcoin.com</p>
				</div><!-- /.single-footer-top -->
			</div><!-- /.col-md-4 -->
			<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
				<div class="single-footer-top">
					<p><i class="bitmex-icon-phone-call"></i><span>Call: </span>2800 256 508</p>
				</div><!-- /.single-footer-top -->
			</div><!-- /.col-md-4 -->
			<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
				<div class="single-footer-top">
					<p><i class="bitmex-icon-placeholder"></i><span>Address: </span>Suite 20 Bitcoin Street West USA</p>
				</div><!-- /.single-footer-top -->
			</div><!-- /.col-md-4 -->
		</div><!-- /.row -->
	</div><!-- /.thm-container -->
</div><!-- /.footer-top -->

<footer class="site-footer">
	<div class="thm-container">
		<div class="row masonary-layout">
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="single-footer-widget">
					<div class="title">
						<h3>About</h3>
					</div><!-- /.title -->
					<ul class="links-list">
						<li><a href="#">Home</a></li>
						<li><a href="#">Jobs</a></li>
						<li><a href="#">Our Team</a></li>
						<li><a href="#">Contact Us</a></li>
						<li><a href="#">Latest News</a></li>
						<li><a href="#">Free Consultancy</a></li>
					</ul><!-- /.links-list -->
				</div><!-- /.single-footer-widget -->
			</div><!-- /.col-md-3 -->
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="single-footer-widget">
					<div class="title">
						<h3>Bitcoin</h3>
					</div><!-- /.title -->
					<ul class="links-list">
						<li><a href="#">Get Started</a></li>
						<li><a href="#">Wallets</a></li>
						<li><a href="#">Buy & Sell Bitcoins</a></li>
						<li><a href="#">Exchange Market</a></li>
						<li><a href="#">Daily Stats</a></li>
					</ul><!-- /.links-list -->
				</div><!-- /.single-footer-widget -->
			</div><!-- /.col-md-3 -->
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="single-footer-widget">
					<div class="title">
						<h3>Legal</h3>
					</div><!-- /.title -->
					<ul class="links-list">
						<li><a href="#">Guide</a></li>
						<li><a href="#">FAQ</a></li>
						<li><a href="#">Advertise</a></li>
						<li><a href="#">Privacy Policy</a></li>
						<li><a href="#">Terms of Use</a></li>
					</ul><!-- /.links-list -->
				</div><!-- /.single-footer-widget -->
			</div><!-- /.col-md-3 -->
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="single-footer-widget">
					<div class="title">
						<h3>Subscribe</h3>
					</div><!-- /.title -->
					<form action="inc/mailchimp/subscribe.php" class="subscribe-form">
						<input type="text" placeholder="Email Address" />
						<button type="submit" class="fa fa-check"></button>
					</form><!-- /.subscribe-form -->
				</div><!-- /.single-footer-widget -->
			</div><!-- /.col-md-3 -->
		</div><!-- /.row -->
	</div><!-- /.thm-container -->
</footer><!-- /.site-footer -->

<div class="footer-bottom">
	<div class="thm-container clearfix">
		<div class="pull-left copy-text">
			<p>&copy; 2021 Realcapitalassets All copy rights are reserved. Powered by Witt<span style="color: plum;">Stack</span></p>
		</div><!-- /.pull-left copy-text -->
		<div class="social pull-right">
        	<a href="#" class="fa fa-twitter"></a><!--
        	--><a href="#" class="fa fa-facebook"></a><!--
        	--><a href="#" class="fa fa-youtube-play"></a><!--
        	--><a href="#" class="fa fa-pinterest"></a>
        </div><!-- /.social -->
	</div><!-- /.thm-container -->
</div><!-- /.footer-bottom -->

{{-- <div class="search_area zoom-anim-dialog mfp-hide" id="test-search">
    <div class="search_box_inner">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search for...">
            <span class="input-group-btn">
                <button class="btn btn-default" type="button"><i class="bitmex-icon-search"></i></button>
            </span>
        </div>
    </div>
</div> --}}


<section class="hidden-sidebar side-navigation">
    <a href="#" class="close-button side-navigation-close-btn fa fa-times"></a><!-- /.close-button -->
    <div class="sidebar-content">
        <h3>Realcapitalassets</h3>
        <p>You can reach us on any of this </p>
        <p class="contact-info">Inquiry@bitcoin.com <br /> +2348134567865 </p><!-- /.contact-info -->
        <div class="social">
        	<a href="#" class="fa fa-twitter"></a><!--
        	--><a href="#" class="fa fa-facebook"></a><!--
        	--><a href="#" class="fa fa-youtube-play"></a><!--
        	--><a href="#" class="fa fa-pinterest"></a>
        </div><!-- /.social -->
    </div><!-- /.sidebar-content -->
</section><!-- /.hidden-sidebar -->
<style>
    /*** Pricing ***/
/* .pricing-slider .pricing-box {
  background-color: rgba(255, 255, 255, 0.05);
  border-radius: 5px;
  overflow: hidden;
  box-shadow: 0px 3px 5px 0px rgba(0, 0, 0, 0.05); }
  .pricing-slider .pricing-box .pricing-body .button {
    color: #ffffff; }
.pricing-slider .owl-controls .owl-pagination .owl-page {
  background: rgba(0, 0, 0, 0.4); } */
  .section-padding-top {
  padding-top: 120px;
  padding-bottom: 90px;
}
    .bg-color-2 {
  background-color: #061949; }
  .bg-color-2 .Realcapitalassetst-accordion .panel {
    background-color: rgba(255, 255, 255, 0.05);
    border-color: rgba(255, 255, 255, 0.05); }
    .bg-color-2 .Realcapitalassetst-accordion .panel .panel-heading .panel-title a[aria-expanded=true] {
      border-color: rgba(255, 255, 255, 0.05); }
    .bg-color-2 .Realcapitalassetst-accordion .panel .panel-body {
      color: #7695b5; }
  .bg-color-2 .panel-default > .panel-heading {
    color: #ffffff; !important }
    /* .section-padding {
  padding: 120px 0;
}
.pricing-slider .pricing-box {
  -webkit-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.5);
          box-shadow: 0 1px 5px rgba(0, 0, 0, 0.5);
  margin: 0 15px 5px;
}
.pricing-slider .pricing-box .pricing-thumb {
  width: 100%;
  height: 150px;
  -webkit-clip-path: ellipse(100% 100% at 50% 0%);
  clip-path: ellipse(100% 100% at 50% 0%);
  shape-margin: 2em;
}
.pricing-slider .pricing-box .pricing-thumb-1 {
  background: url(../images/pricing/1.jpg) no-repeat center center;
  background-size: cover;
}
.pricing-slider .pricing-box .pricing-thumb-2 {
  background: url(../images/pricing/2.jpg) no-repeat center center;
  background-size: cover;
}
.pricing-slider .pricing-box .pricing-thumb-3 {
  background: url(../images/pricing/3.jpg) no-repeat center center;
  background-size: cover;
}
.pricing-slider .pricing-box .pricing-thumb-4 {
  background: url(../images/pricing/4.jpg) no-repeat center center;
  background-size: cover;
}
.pricing-slider .pricing-box .pricing-body {
  padding-bottom: 20px;
}
.pricing-slider .pricing-box .pricing-body .icon {
  display: inline-block;
  position: relative;
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
}
.pricing-slider .pricing-box .pricing-body h6 {
  margin-top: -25px;
  margin-bottom: 5px;
}
.pricing-slider .pricing-box .pricing-body p span.down {
  color: #f87a46;
}
.pricing-slider .pricing-box .pricing-body p .up {
  color: #35a947;
}
.pricing-slider .pricing-box .pricing-body .button {
  border: 1px solid #686868;
  padding: 6px 30px;
  margin-top: 10px;
  border-radius: 22px;
  color: #000000;
  font-weight: 700;
  -webkit-transition: all .3s ease;
  transition: all .3s ease;
}
.pricing-slider .pricing-box .pricing-body .button:hover {
  background-image: -webkit-gradient(linear, left top, right top, from(#f87a46), to(#feb933));
  background-image: linear-gradient(to right, #f87a46, #feb933);
  border: 1px solid transparent;
  color: #ffffff;
}
.pricing-slider .owl-controls {
  text-align: center;
  margin-top: 30px;
}
.pricing-slider .owl-controls .owl-pagination .owl-page {
  height: 10px;
  width: 10px;
  border-radius: 50%;
  background: #cecece;
  display: inline-block;
  margin: 0 5px;
}
.pricing-slider .owl-controls .owl-pagination .owl-page.active {
  background-image: -webkit-gradient(linear, left top, right top, from(#f87a46), to(#feb933));
  background-image: linear-gradient(to right, #f87a46, #feb933);
} */

.Realcapitalassetst-accordion .panel .panel-heading {
  border: 0;
  background: transparent;
  padding: 0;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
.Realcapitalassetst-accordion .panel .panel-heading .panel-title a {
  padding: 30px 30px 30px 60px;
  display: block;
  position: relative;
}
.Realcapitalassetst-accordion .panel .panel-heading .panel-title a:before {
  font-family: FontAwesome;
  left: 30px;
  position: absolute;
}
.Realcapitalassetst-accordion .panel .panel-heading .panel-title a[aria-expanded=true] {
  border-bottom: 1px solid rgba(0, 0, 0, 0.1);
}
.Realcapitalassetst-accordion .panel .panel-heading .panel-title a[aria-expanded=true]:before {
  content: "\f106";
  -webkit-transition: all .3s ease;
  transition: all .3s ease;
}
.Realcapitalassetst-accordion .panel .panel-heading .panel-title a[aria-expanded=false] {
  border-bottom: 0;
}
.Realcapitalassetst-accordion .panel .panel-heading .panel-title a[aria-expanded=false]:before {
  content: "\f106";
  -webkit-transform: rotate(180deg);
          transform: rotate(180deg);
  -webkit-transition: all .3s ease;
  transition: all .3s ease;
}
.Realcapitalassetst-accordion .panel .panel-collapse .panel-body {
  border-top: 0;
  padding: 30px 60px;
}
.Realcapitalassetst-accordion .panel + .panel {
  margin-top: 0;
}

</style>

<div class="scroll-to-top scroll-to-target" data-target="html"><i class="d-flex align-items-center fa fa-angle-up"></i></div>

<script src="js/jquery.js"></script>

<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-select.min.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/isotope.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/waypoints.min.js"></script>
<script src="js/jquery.counterup.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/particles.min.js"></script>
<script src="js/particles-config.js"></script>
<script src="js/Chart.min.js"></script>
<script src="js/chart-config.js"></script>
<script src="js/custom.js"></script>

</body>
</html>
