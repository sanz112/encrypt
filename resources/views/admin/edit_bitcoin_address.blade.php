
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
      <h2 class="h5 no-margin-bottom">Admin Dashboard</h2>
    </div>
  </div>
  <section class="no-padding-bottom">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header">

              <h5 class="card-title">Edit Admin Infomation</h5>
            </div>
            <div class="card-body">
                    <form action="/update_bitcoin_address/{{ $users->id }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <div class="form-group row">
                          <label for="name" class="col-sm-2 col-form-label">Bitcoin Address</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" value="{{ $users->bitcoinAddress }}" name="bitcoinAddress"  id="bitcoinAddress" placeholder="Bitcoin Address">
                          </div>
                        </div>
                        <div class="form-group row">
                          <div class="col-sm-10">
                            <button type="submit" class="btn btn-success">Update</button>
                            <a href="/admin" type="submit" class="btn btn-danger">Cancel</a>
                          </div>
                        </div>
                      </form>

                      <br>

                      <form action="/update_bitcoin_address/{{ $users->id }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <div class="form-group row">
                          <label for="name" class="col-sm-2 col-form-label">Information admin wish to send to the front page</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" value="{{ $users->info }}" name="bitcoinAddress"  id="bitcoinAddress" placeholder="Bitcoin Address">
                          </div>
                        </div>
                        <div class="form-group row">
                          <div class="col-sm-10">
                            <button type="submit" class="btn btn-success">Update</button>
                            <a href="/admin" type="submit" class="btn btn-danger">Cancel</a>
                          </div>
                        </div>
                      </form>
                </div>
            </div>
        </div>
    </div>

</div>
</section>
<footer class="mt-3 footer">
    <div class="footer__block block no-margin-bottom">
      <div class="container-fluid text-center">
        <p class="no-margin-bottom">2020 &copy; Realcapitalassets Trade. All Rights Reserved.</p>
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
@endsection
