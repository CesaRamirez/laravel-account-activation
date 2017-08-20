@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-center align-items-center mt-5">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Register</div>
                <div class="card-body">
                    <div class="card-text">
                        <div class="container mt-2">
                        <form  method="POST" action="{{ route('register') }}">
                            {{ csrf_field() }}
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-right">Name</label>

                                <div class="col-md-6">
                                    <input id="name"
                                           type="text"
                                           class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}"
                                           name="name"
                                           value="{{ old('name') }}"
                                           autofocus>
                                    @if ($errors->has('name'))
                                        <small class="invalid-feedback">
                                            {{ $errors->first('name') }}
                                        </small>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-right">E-Mail Address</label>

                                <div class="col-md-6">
                                    <input id="email"
                                           type="email"
                                           class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}"
                                           name="email"
                                           value="{{ old('email') }}">

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
                                <label for="password-confirm" class="col-md-4 col-form-label text-right">Confirm Password</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">
                        Register
                    </button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
