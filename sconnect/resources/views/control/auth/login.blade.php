@extends('auth.layout')

@section('auth')
    <div class="auth_div">
        <a href="/" class="auth_logo">
            <img src="{{ asset('images/logo_1.png') }}" alt="" srcset="">
        </a>
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />


       <div class="form_div">
            <form action="{{ route('control.check') }}" method="post">
                @csrf
                @if (Session::get('fail'))
                    <div class="badge text_danger">{{ Session::get('fail') }}</div>
                @endif
                <div class="group_control">
                    <input type="email" class="form_control" name="email" placeholder="{{ __('E-mail adresse') }}" required>
                    @error('email')
                        <small class="text_danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="group_control">
                    <input type="password" class="form_control"  name="password"  placeholder="{{ __('Mot de passe') }}" required autocomplete="current-password">
                    @error('password')
                        <small class="text_danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="remember">
                    <input type="checkbox" name="remember" id="remember_token"><label for="remember_token">{{ __('Garder ma session ouverte') }}</label>
                </div>
                <div class="btn_div">
                    <button type="submit" class="btn_control">{{ __('Me connecter') }}</button>
                </div>
            </form>
            
            
    </div>
@endsection