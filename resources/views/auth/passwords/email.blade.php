@extends('layouts.app')

@section('content')
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
<div class="d-flex justify-content-center align-items-center mt-5">
    <div class="col-6">
        <div class="card">
            <form method="POST" action="{{ route('password.email') }}">
                {{ csrf_field() }}
                <div class="card-header">Reset Password</div>
                <div class="car-body">
                    <div class="card-text">
                        <div class="container mt-3">
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
                        </div>
                        </div>
                    </div>
                    <div class="card-footer">
                    <button type="submit" class="btn btn-primary">
                        Send Password Reset Link
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
