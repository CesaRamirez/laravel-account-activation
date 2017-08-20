@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-center align-items-center mt-5">
    <div class="col-6">
        <div class="card">
            <div class="card-header">Login</div>
            <div class="card-body">
                <div class="card-text">
                    <form method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email"
                                       type="email"
                                       class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}"
                                       name="email"
                                       value="{{ old('email') }}"
                                       autofocus>

                                @if ($errors->has('email'))
                                    <small class="invalid-feedback">
                                        {{ $errors->first('email') }}
                                    </small>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label">Password</label>

                            <div class="col-md-6">
                                <input id="password"
                                       type="password"
                                       class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}"
                                       name="password"
                                       required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <label class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <span class="custom-control-indicator"></span>
                                    <span class="custom-control-description">Remember Me</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">
                        Login
                    </button>

                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        Forgot Your Password?
                    </a>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
