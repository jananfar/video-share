@extends('auth-layout')
@section('class-body', 'log_in_page')
@section('content')
<div id="log-in" class="site-form log-in-form">
    <div id="log-in-head">
        <h1>@lang('login.login')</h1>
        <div id="logo">
            <a href="{{ route('index') }}">
                <img src="{{ Vite::asset('resources/img/logo.png') }}">
            </a>
        </div>
    </div>
    <div class="form-output">
        <x-validation-errors></x-validation-errors>
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="form-group label-floating">
                <label class="control-label">@lang('login.email')</label>
                <input class="form-control" type="email" name="email" required>
            </div>
            <div class="form-group label-floating">
                <label class="control-label">@lang('login.password')</label>
                <input class="form-control" type="password" name="password" required>
            </div>
            <div class="remember">
                <div class="checkbox">
                    <label>
                        <input name="remember" type="checkbox">
                        @lang('login.remember-me')
                    </label>
                </div>
                <a href="{{ route('password.request') }}" class="forgot">@lang('login.forgot-password')</a>
            </div>
            <button type="submit" class="btn btn-lg btn-primary full-width">@lang('login.login')</button>
            <div class="or"></div>
            <p>@lang('login.dont-you-have-account')
                <a href="{{ route('register') }}">@lang('login.register')</a>
            </p>
        </form>
    </div>
</div>
@endsection