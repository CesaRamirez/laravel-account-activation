@extends('layouts.app')

@section('content')
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
<div class="d-flex justify-content-center align-items-center mt-5">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">Reset Password</div>
            <div class="card-body">
                <div class="card-text">

                    <form method="POST" action="{{ route('password.request') }}">
                        {{ csrf_field() }}

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-right">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email"
                                       type="email"
                                       class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}"
                                       name="email"
                                       value="{{ $email or old('email') }}" autofocus>

                                @if ($errors->has('email'))
                                    <small class="invalid-feedback">
                                        {{ $errors->first('email') }}
                                    </small>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-right">Password</label>

                            <div class="col-md-6">
                                <input id="password"
                                       type="password"
                                       class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}"
                                       name="password">

                                @if ($errors->has('password'))
                                    <small class="invalid-feedback">
                                        {{ $errors->first('password') }}
                                    </small>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 cold-form-label text-right">Confirm Password</label>
                            <div class="col-md-6">
                                <input id="password-confirm"
                                       type="password" class="form-control {{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}"
                                       name="password_confirmation">

                                @if ($errors->has('password_confirmation'))
                                    <small class="invalid-feedback">
                                        {{ $errors->first('password_confirmation') }}
                                    </small>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">
                        Reset Password
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
