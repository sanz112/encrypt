@extends('layouts.dash')

@section('content')

<div class="d-flex align-items-stretch">
      <nav id="sidebar">
        <!-- Sidebar Header-->
        <div class="sidebar-header d-flex align-items-center">

          <div class="title">
            <h1 class="h5">{{ Auth::user()->username }}</h1>
          </div>
        </div>
        <ul class="list-unstyled">
            <li class="{{ 'dashboard' ==  request()->path() ? 'active' : '' }}"><a href="/dashboard"> <i class="icon-home"></i>Home </a></li>
            <li class="{{ 'dashboard/sell-crypto' ==  request()->path() ? 'active' : '' }}"><a href="/dashboard/sell-crypto"> <i class="fa fa-btc"></i>Sell Bitcoin </a></li>
            <li class="{{ 'dashboard/buy-bitcoin' ==  request()->path() ? 'active' : '' }}"><a href="/dashboard/buy-bitcoin"> <i class="fa fa-bitcoin"></i>Buy Bitcoin </a></li>
          {{-- <li><a href="https://www.icomarkettrading.com/plan"> <i class="fa fa-bar-chart"></i>Forex Trade</a></li> --}}
          <li class="{{ 'dashboard/plan' ==  request()->path() ? 'active' : '' }}"><a href="/dashboard/plan"> <i class="fa fa-btc"></i>Plan</a>
          </li>
          <li class="{{ 'dashboard/withdraw' ==  request()->path() ? 'active' : '' }}"><a href="/dashboard/withdraw"> <i class="fa fa-money"></i>Withdraw</a>
      </li>
      @if (Auth::user()->usertype == "ADMIN")
      <li class="{{ 'admin' ==  request()->path() ? 'active' : '' }}"><a href="/admin"> <i class="fa fa-money"></i>Admin Page</a> </li>
  @endif
        </ul>
                      </nav>
    <div class="page-content">




                    <div class="page-header">
<div class="container-fluid">
  <h2 class="h5 no-margin-bottom">Invest</h2>
</div>
</div>
<div>


  </div><section class="no-padding-top no-padding-bottom">
<div class="container-fluid">
  <div class="row">
    @if (session('status'))
    <div class="alert alert-danger" role="alert">
        {{ session('status') }}
    </div>
    @endif
  <div class="col-md-12">
      <div class="alert alert-primary" role="alert">
          <h2>Steps To Follow To Start Trading</h2><hr>
          <ol>
              <li>Fill the form below</li>
              <li>Your plan will be active within 10 minutes</li>
          </ol>
        </div>
  <form id="myForm">
  <div class="form-group">
      <label for="exampleFormControlInput1">Choose a plan</label>
      <select name="name" id="name"class="form-control" required>
      <option style="background-color:black;" value="beginner">Beginner 250$</option>
      <option style="background-color:black;" value="bronze">Bronze 500$</option>
      <option style="background-color:black;" value="silver">Silver 1000$</option>
      <option style="background-color:black;" value="gold">Gold 10,000$</option>
      </select>
  </div>
  <div class="form-group">
  <input type="hidden" id="user_id" name="user_id" value="72" class="form-control">
  </div>
  <div>
    <button type="submit" class="btn btn-primary"> Invest </button>
  </div>

</div>
  </form>

</div>
</div>
</section>
<script src="/js/plug/jquery.min.js"></script>
<script>

var $ = jQuery;

   $(".btn-primary").click(function(event){
       event.preventDefault();

       let name = $("#name").val();
       let user_id = $("#user_id").val();
        let _token = $('meta[name="csrf-token"]').attr('content');

       $.ajax({
         url: "plan",
         type:"POST",
         data:{
           name:name,
           user_id:user_id,
           _token:_token
         },
         success:function(response){
           console.log(response);
           if(response.success) {

            swal({
              title: "Success!",
              text: `${response.success}`,
              icon: "success",
              button: "OK",
            })
            $("#myForm")[0].reset();
           }else{
            swal('Oops!', `${response.error}`, 'error');
             $("#myForm")[0].reset();
           }
         },

       });

   });
   </script>
<footer class="footer">
<div class="footer__block block no-margin-bottom">
  <div class="container-fluid text-center">
    <p class="no-margin-bottom">2021 &copy; RealCapitalassets. All Rights Reserved.</p>
  </div>
</div>
</footer>
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
