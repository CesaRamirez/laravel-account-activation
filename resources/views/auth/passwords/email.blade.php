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
            <form method="POST" action="{{ route('password.email') }}" novalidate>
                @csrf
                <div class="card-content">
                    <h1 class="title has-text-centered">
                        <a href="{{ route('home') }}">
                            <img src="/acme.png" alt="Logo Acme" width="25%">
                        </a>
                    </h1>
                    <div class="field">
                        <label class="label">@lang('Email')</label>
                        <div class="control">
                            <input
                                class="input{{ $errors->has('email') ? ' is-danger' : '' }}"
                                type="email"
                                placeholder="john@email.com"
                                name="email"
                                value="{{ old('email') }}"
                                required
                                autofocus>
                            @if ($errors->has('email'))
                            <p class="help is-danger">{{ $errors->first('email') }}</p>
                            @endif
                        </div>
                    </div>
                    <div class="field">
                        <div class="control">
                            <button class="button is-info is-medium is-fullwidth" type="submit">
                                @lang('Send Password Reset Link')
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </article>
    </div>
</div>
@endsection
