
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
                 <li class="{{ 'admin' ==  request()->path() ? 'active' : '' }}"><a href="/admin"> <i class="fa fa-money"></i>Admin Page</a> </li>
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
                          <label for="name" class="col-sm-2 col-form-label">Name</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" value="{{ $users->name }}" name="name"  id="name" placeholder="name">
                          </div>
                        </div>
                        <div class="form-group row">
                            <label for="username" class="col-sm-2 col-form-label">UserName</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" value="{{ $users->username }}" name="username" id="username" placeholder="Username">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="email" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                              <input type="email" value="{{ $users->email }}" class="form-control" name="email" id="email" placeholder="Email">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="phone" class="col-sm-2 col-form-label">Phone</label>
                            <div class="col-sm-10">
                              <input type="number" value="{{ $users->phone }}" class="form-control" name="phone" id="phone" placeholder="Phone Number">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="country" class="col-sm-2 col-form-label">country</label>
                            <div class="col-sm-10">
                              <input type="text"  value="{{ $users->country }}" class="form-control" name="country" id="country" placeholder="country">
                            </div>
                          </div>
                        <div class="form-group row">
                          <label for="usertype" class="col-sm-2 col-form-label">UserType</label>
                          <div class="col-sm-10">
                            <select name="usertype" class="form-control"  id="usertype">
                                <option value="ADMIN">ADMIN</option>
                                <option value="USER" selected>USER</option>
                            </select>
                          </div>
                        </div>
                        {{-- <fieldset class="form-group">
                          <div class="row">
                            <legend class="col-form-label col-sm-2 pt-0">Radios</legend>
                            <div class="col-sm-10">
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                                <label class="form-check-label" for="gridRadios1">
                                  First radio
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                                <label class="form-check-label" for="gridRadios2">
                                  Second radio
                                </label>
                              </div>
                              <div class="form-check disabled">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" disabled>
                                <label class="form-check-label" for="gridRadios3">
                                  Third disabled radio
                                </label>
                              </div>
                            </div>
                          </div>
                        </fieldset>
                        <div class="form-group row">
                          <div class="col-sm-2">Checkbox</div>
                          <div class="col-sm-10">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" id="gridCheck1">
                              <label class="form-check-label" for="gridCheck1">
                                Example checkbox
                              </label>
                            </div>
                          </div>
                        </div> --}}
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
