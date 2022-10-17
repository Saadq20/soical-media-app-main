{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 


<x-sig-layouts>
    @extends('layout.main')
    @section('content')
    
    
    <div class="page-header header-filter"  style="background-image: url('../assets/img/mang.jpg'); background-size: cover; background-position: top center;">
        <div class="container">
          <div class="row">
            <div class="col-md-10 ml-auto mr-auto">
              <div class="card card-signup">
                <h2 class="card-title text-center">Register</h2>
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-5 ml-auto">
                      <div class="info info-horizontal">
                        <div class="icon icon-rose">
                          <i class="material-icons">timeline</i>
                        </div>
                        <div class="description">
                          <h4 class="info-title">Optimal Send Times</h4>
                          <p class="description">
                            Utilize optimization algorithms to automatically schedule content to post at the times.
                          </p>
                        </div>
                      </div>
                      <div class="info info-horizontal">
                        <div class="icon icon-primary">
                          <i class="material-icons">code</i>
                        </div>
                        <div class="description">
                          <h4 class="info-title">Code and atuomat</h4>
                          <p class="description">
                            Import and schedule multiple social posts across different profiles and networks <br>simultaneously Save time
                          </p>
                        </div>
                      </div>
                      <div class="info info-horizontal">
                        <div class="icon icon-info">
                          <i class="material-icons">group</i>
                        </div>
                        <div class="description">
                          <h4 class="info-title">Built Audience</h4>
                          <p class="description">
                            There is also a Fully Customizable  Dashboard .
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-5 mr-auto">
                      <div class="social text-center">
                        <button class="btn btn-just-icon btn-round btn-twitter">
                          <i class="fa fa-twitter"></i>
                        </button>
                        <button class="btn btn-just-icon btn-round btn-dribbble">
                          <i class="fa fa-dribbble"></i>
                        </button>
                        <button class="btn btn-just-icon btn-round btn-facebook">
                          <i class="fa fa-facebook"> </i>
                        </button>
                        <h4> or be classical </h4>
                      </div>
                      <form class="form" method="post" action="{{route('register')}}">
                        @csrf
                        <div class="form-group">
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text">
                                <i class="material-icons">face</i>
                              </span>
                            </div>
                            <input type="text" class="form-control" placeholder="First Name...">
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text">
                                <i class="material-icons">mail</i>
                              </span>
                            </div>
                            <input type="text" class="form-control" placeholder="Email...">
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text">
                                <i class="material-icons">lock_outline</i>
                              </span>
                            </div>
                            <input type="password" placeholder="Password..." class="form-control" />
                          </div>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" value="" checked>
                            <span class="form-check-sign">
                              <span class="check"></span>
                            </span>
                            I agree to the <a href="#something">terms and conditions</a>.
                          </label>
                        </div>
                        <div class="text-center">
                          <button type="submit" class="btn btn-primary btn-round">Get Started</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
    
    @endsection
    
    
    
</x-sig-layouts>

--}}