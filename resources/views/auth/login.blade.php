@extends('layouts.master2')
@php
    $halaman = 'Login';
@endphp
@section('polos')
<style>
    body {
        width: 100%;
        height: 80vh;
        background: url("{{asset('assets/img/testimonials-bg.jpg')}}") top center;
        background-size: cover;
        position: relative;
        border-bottom: 1px solid #222;
    }
</style>
<div class="container">
    <div style="transform: translate(0%, 20%)">
    <center>
        <h1 class="text-light"><img src="{{ asset('bootstrap/dist/img/musicLogo.png') }}" alt="" class="img-fluid"><span> SPK Studio Music</span></a></h1>
    </center>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    <a class="btn btn-link" href="{{ route('register') }}">
                        {{ __('Klik disini untuk daftar member baru!') }}
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
