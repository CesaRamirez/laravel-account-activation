@extends('layouts.app')

@section('content')
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
<div class="columns flex h-screen items-center justify-center">
    <div class="column is-two-fifths-desktop is-half-tablet is-one-mobile">
        <article class="card is-rounded is-shadowless">
            <div class="card-content">
                <form method="POST" action="{{ route('password.request') }}" novalidate>
                    @csrf
                    <input type="hidden" name="token" value="{{ $token }}">

                    <div class="field">
                        <label class="label">@lang('Email')</label>
                        <div class="control">
                            <input
                                class="input{{ $errors->has('email') ? ' is-danger' : '' }}"
                                type="email"
                                placeholder="john@email.com"
                                name="email"
                                value="{{ old('email') }}"
                                required>
                            @if ($errors->has('email'))
                            <p class="help is-danger">{{ $errors->first('email') }}</p>
                            @endif
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">@lang('Password')</label>
                        <div class="control">
                            <input
                                class="input{{ $errors->has('password') ? ' is-danger' : '' }}"
                                type="password"
                                name="password"
                                required>
                            @if ($errors->has('password'))
                            <p class="help is-danger">{{ $errors->first('password') }}</p>
                            @endif
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">@lang('Confirm Password')</label>
                        <div class="control">
                            <input
                                class="input"
                                type="password"
                                name="password_confirmation"
                                id="password-confirm"
                                required>
                        </div>
                    </div>
                    <div class="field">
                            <div class="control">
                                <button class="button is-info is-medium is-fullwidth" type="submit">
                                    @lang('Reset Password')
                                </button>
                            </div>
                        </div>
                </div>
            </form>
        </article>
    </div>
</div>
@endsection