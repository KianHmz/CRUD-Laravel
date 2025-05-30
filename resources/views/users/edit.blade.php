@extends('layouts.app')

@section('title', 'Edit User')

@section('content')
<div class="p-6">
    <div class="max-w-3xl mx-auto my-8" style="background-color: var(--color-header); padding: 2rem; border-radius: 1rem; box-shadow: 0 0 10px rgba(0,0,0,0.3);">

        <form method="POST" action="{{ route('users.update',$user->id) }}">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="name" class="block mb-1" style="color: var(--color-text);">Name</label>
                <input type="text" id="name" name="name"
                    class="w-full px-3 py-2 rounded text-black placeholder-white"
                    placeholder="Enter full name" value="{{old('name',$user->name)}}"
                    style="background-color: white;">
                @error('name')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="email" class="block mb-1" style="color: var(--color-text);">Email</label>
                <input type="email" id="email" name="email"
                    class="w-full px-3 py-2 rounded text-black placeholder-white"
                    placeholder="Enter email address" value="{{old('email',$user->email)}}"
                    style="background-color: white;">
                @error('email')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="password" class="block mb-1" style="color: var(--color-text);">Password</label>
                <input type="password" id="password" name="password"
                    class="w-full px-3 py-2 rounded text-black placeholder-white"
                    placeholder="Enter password" style="background-color: white;">
                @error('password')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="password_confirmation" class="block mb-1" style="color: var(--color-text);">Confirm Password</label>
                <input type="password" id="password_confirmation" name="password_confirmation"
                    class="w-full px-3 py-2 rounded text-black placeholder-white"
                    placeholder="Confirm password" style="background-color: white;">
            </div>

            <div class="flex justify-between">
                <a href="{{ route('users.index') }}"
                   class="px-4 py-2 rounded"
                   style="background-color: var(--color-button-delete); color: white;"
                   onmouseover="this.style.backgroundColor='var(--color-button-delete-hover)'"
                   onmouseout="this.style.backgroundColor='var(--color-button-delete)'">
                    Cancel
                </a>
                <button type="submit"
                        class="px-4 py-2 rounded"
                        style="background-color: var(--color-button-create); color: white;"
                        onmouseover="this.style.backgroundColor='var(--color-button-create-hover)'"
                        onmouseout="this.style.backgroundColor='var(--color-button-create)'">
                    Save
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
