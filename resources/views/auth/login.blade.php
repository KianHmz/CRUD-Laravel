@extends('layouts.app')

@section('title', 'Login')

@section('content')
    <div class="p-6">
        <div class="max-w-3xl mx-auto my-8"
            style="background-color: var(--color-header); padding: 2rem; border-radius: 1rem; box-shadow: 0 0 10px rgba(0,0,0,0.3);">

            @if (session('success'))
                <x-alerts.alert-success :message="session('success')" />
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="mb-4">
                    <label for="email" class="block mb-1" style="color: var(--color-text);">Email</label>
                    <input type="email" id="email" name="email" required
                        class="w-full px-3 py-2 rounded text-black placeholder-white" placeholder="Enter your email"
                        value="{{ old('email') }}" style="background-color: white;">
                    @error('email')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="password" class="block mb-1" style="color: var(--color-text);">Password</label>
                    <input type="password" id="password" name="password" required
                        class="w-full px-3 py-2 rounded text-black placeholder-white" placeholder="Enter your password"
                        style="background-color: white;">
                    @error('password')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex justify-between">
                    <a href="{{ route('register') }}" class="px-4 py-2 rounded"
                        style="background-color: var(--color-button-edit); color: white;"
                        onmouseover="this.style.backgroundColor='var(--color-button-edit-hover)'"
                        onmouseout="this.style.backgroundColor='var(--color-button-edit)'">
                        Back to Register
                    </a>
                    <button type="submit" class="px-4 py-2 rounded"
                        style="background-color: var(--color-button-create); color: white;"
                        onmouseover="this.style.backgroundColor='var(--color-button-create-hover)'"
                        onmouseout="this.style.backgroundColor='var(--color-button-create)'">
                        Login
                    </button>
                </div>
            </form>
        </div>
    </div>

    <style>
        input::placeholder {
            color: white !important;
            opacity: 1;
        }
    </style>
@endsection
