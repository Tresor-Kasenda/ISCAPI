@extends('layouts.app')

@section('content')
    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo h1 white-color">
                    ISC-LUBUMBASHI
                </div>
                <div class="login-form" style="margin-top: 10%">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <label for="email">{{ __('Adresse email') }}</label>
                            <input
                                id="email"
                                type="email"
                                class="form-control @error('email') is-invalid @enderror"
                                name="email"
                                value="{{ old('email') }}"
                                required autocomplete="email"
                                autofocus
                            >
                        </div>
                        <div class="form-group">
                            <label for="password">{{ __('Mot de passe') }}</label>
                            <input
                                id="password"
                                type="password"
                                class="form-control @error('password') is-invalid @enderror"
                                name="password"
                                required
                                autocomplete="current-password"
                            >
                        </div>
                        <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">
                            {{ __('Connexion') }}
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
