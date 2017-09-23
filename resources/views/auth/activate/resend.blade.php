@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-center align-items-center mt-5">
    <div class="col-6">
        <div class="card">
            <div class="card-header">Resend Activation Email</div>
            <div class="card-body">
                <div class="card-text">
                    <form method="POST" action="{{ route('auth.activate.resend') }}">
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
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">
                        Resend
                    </button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
