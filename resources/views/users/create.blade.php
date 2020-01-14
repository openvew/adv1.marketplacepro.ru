@extends('layouts.home')

@section('content')

    <h1 class="h3 mb-2 text-gray-800">{{ __('users.AddUser') }}</h1>

    <div class="card o-hidden border-0 shadow-lg my-5">
	
      <div class="card-body p-0">
	        
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-9">
            <div class="p-5">
			{{--<div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
			</div>--}}
              <form class="user" method="POST">
			    @csrf
				<div class="form-group">
                  <input name = "name" type="test" class="form-control form-control-user @error('name') is-invalid @enderror" id="exampleLastName" placeholder="{{ __('Name') }}" value="{{ old('name') }}" required autocomplete="name" autofocus>
				    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                <input type="email" class="form-control form-control-user  @error('email') is-invalid @enderror" id="exampleInputEmail" placeholder="{{ __('E-Mail Address') }}" name="email" value="{{ old('email') }}" required autocomplete="email">
                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user @error('password') is-invalid @enderror" id="exampleInputPassword" placeholder="{{ __('Password') }}" name="password" required autocomplete="new-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                  <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user" id="exampleRepeatPassword"  name="password_confirmation" placeholder="Repeat Password" required autocomplete="new-password">
                  </div>
                </div>
				<button type="submit" class="btn btn-primary btn-user btn-block">
                                    {{ __('Register') }}
                </button>
              </form>
              <hr>
              
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
