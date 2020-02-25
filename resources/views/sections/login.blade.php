<div role="tabpanel" class="tab-pane fade in active" id="login">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="login-register-bg">

                    <div class="row">
                        @include('admin/elements/flash')
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="heading">
                                <h2>{{(Config::get('app.locale') == 'ar') ? $globalNames->login_ar :$globalNames->login }}</h2>
                            </div>

                            <form method="POST" action="{{ $routeName }}">
                                @csrf

                                  <div class="listing-title-area">

                                      <div class="form-group">
                                          <label>{{(Config::get('app.locale') == 'ar') ? $globalNames->email_ar :$globalNames->email }}
                                          </label>
                                          <input type="email" name="email" class="form-control" >
                                      </div>
                                   </div>


                                    <div class="listing-title-area">

                                      <div class="form-group">
                                          <label>
                                            {{(Config::get('app.locale') == 'ar') ? $globalNames->password_ar :$globalNames->password }}
                                          </label>
                                          <input type="password" name="password" class="form-control" >
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <button>
                                          {{(Config::get('app.locale') == 'ar') ? $globalNames->login_now_ar :$globalNames->login_now }}
                                      </button>
                                  </div>

                            </form>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
