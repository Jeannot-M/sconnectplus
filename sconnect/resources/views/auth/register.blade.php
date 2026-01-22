{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register', app()->getLocale()) }}">
            @csrf

            <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('Name')" />

                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" />

                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login', app()->getLocale()) }}">
                    {{ __('Already registered?') }}
                </a>

                <x-primary-button class="ml-4">
                    {{ __('Register') }}
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
       <div class="form_div">
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

            <form action="{{ route('register', app()->getLocale()) }}" method="post">
                @csrf
                <div class="group_control">
                    <input type="text"  class="form_control" name="name" placeholder="Prenom & Nom" required>
                </div>
             

                <div class="group_control">
                    <input type="tel"  class="form_control" name="phone" placeholder="N° Téléphone" required>
                </div>

                <div class="group_control">
                    <input type="email" class="form_control" name="email" placeholder="E-mail adresse" required>
                </div>

                <div class="group_control">
                    <input type="password" class="form_control" name="password"  placeholder="Mot de passe" >
                </div>

                <div class="btn_div">
                    <button type="submit" class="btn_register">Créer mon compte</button>
                </div>
            </form>
            <div class="ifcondition">
                <p>Déjà membre ? <a href="{{ route('login', app()->getLocale()) }}">Connectez-vous en cliquant ici !</a></p>
            </div>
            <div class="polin">
                <small>En validant ce formulaire, je déclare avoir lu les Conditions Générales et la politique de confidentialité sur mes données.</small>
            </div>
       </div>
    </div>
@endsection