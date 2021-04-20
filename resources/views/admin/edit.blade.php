
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

              <h5 class="card-title">Edit Users</h5>
            </div>
            <div class="card-body">
                    <form action="/updateusers/{{ $users->id }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <div class="form-group row">
                          <label for="name" class="col-sm-2 col-form-label">First Name</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" value="{{ $users->fname }}" name="fname"  id="fname" placeholder="First Name">
                          </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-sm-2 col-form-label">Last Name</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" value="{{ $users->lname }}" name="lname"  id="lname" placeholder="Last Name">
                            </div>
                          </div>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                        <div class="form-group row">
                            <label for="username" class="col-sm-2 col-form-label">UserName</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" value="{{ $users->username }}" name="username" id="username" placeholder="Username">
                            </div>
                          </div>
                          @error('username')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                          <div class="form-group row">
                            <label for="email" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                              <input type="email" value="{{ $users->email }}" class="form-control" name="email" id="email" placeholder="Email">
                            </div>
                          </div>
                          @error('email')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                          <div class="form-group row">
                            <label for="phone" class="col-sm-2 col-form-label">Phone</label>
                            <div class="col-sm-10">
                              <input type="number" value="{{ $users->phone }}" class="form-control" name="phone" id="phone" placeholder="Phone Number">
                            </div>
                          </div>
                          @error('phone')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                          <div class="form-group row">
                            <label for="country" class="col-sm-2 col-form-label">country</label>
                            <div class="col-sm-10">
                              <input type="text"  value="{{ $users->country }}" class="form-control" name="country" id="country" placeholder="country">
                            </div>
                          </div>
                          @error('country')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                        <div class="form-group row">
                          <label for="usertype" class="col-sm-2 col-form-label">UserType</label>
                          <div class="col-sm-10">
                            <select name="usertype" class="form-control"  id="usertype">
                                <option value="ADMIN">ADMIN</option>
                                <option value="USER" selected>USER</option>
                            </select>
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
@endsection
