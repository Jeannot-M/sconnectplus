{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login' app()->getLocale()) }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email')" />

                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-primary-button class="ml-3">
                    {{ __('Log in') }}
                </x-primary-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}


@extends('auth.layout')

@section('auth')

    <div class="auth_div">
        <a href="/" class="auth_logo">
            <img src="{{ asset('images/logo_dore.png') }}" alt="" srcset="">
        </a>
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />


       <div class="form_div">
            <form action="{{ route('login', app()->getLocale()) }}" method="post">
                @csrf
                

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
                    <button type="submit" class="btn_register">{{ __('Me connecter') }}</button>
                </div>
            </form>
            <div class="__forget">
                <a href="javascript:void()">{{ __('Mot de passe oublié') }}</a>
            </div>
            <div class="ifcondition">
                <p>{{ __('Pas encore inscrit(e) ?') }} <a href="{{ route('register', app()->getLocale()) }}">{{ __('Créer votre compte par ici !') }}</a></p>
            </div>
            
    </div>
@endsection
