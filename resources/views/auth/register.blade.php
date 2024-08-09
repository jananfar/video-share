@extends('auth-layout')
@section('class-body', 'sign-up-page')
@section('content')
<div id="log-in" class="site-form log-in-form">
    <div id="log-in-head">
        <h1>@lang('register.register')</h1>
        <div id="logo">
            <a href="{{ route('index') }}">
                <img src="{{ Vite::asset('resources/img/logo.png') }}">
            </a>
        </div>
    </div>
    <div class="form-output">
        <x-validation-errors></x-validation-errors>
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <div class="form-group label-floating">
                <label class="control-label">@lang('register.full-name')</label>
                <input class="form-control" type="text" name="name" required>
            </div>
            <div class="form-group label-floating">
                <label class="control-label">@lang('register.email')</label>
                <input class="form-control" type="email" name="email" required>
            </div>
            <div class="form-group label-floating">
                <label class="control-label">@lang('register.password')</label>
                <input class="form-control" type="password" name="password" required>
            </div>
            <div class="form-group label-floating">
                <label class="control-label">@lang('register.confirm-password')</label>
                <input class="form-control" type="password" name="password_confirmation" required>
            </div>
            <div class="remember">
                <div class="checkbox">
                    <label>
                        <input name="remember" type="checkbox">
                        @lang('register.remember-me')
                    </label>
                </div>
            </div>
            <button type="submit" class="btn btn-lg btn-primary full-width">@lang('register.register')</button>
            <div class="or"></div>
            <p>@lang('register.do-you-have-account')
                <a href="{{ route('login') }}">@lang('register.login')</a>
            </p>
        </form>
    </div>
</div>
@endsection