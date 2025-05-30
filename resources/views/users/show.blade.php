@extends('layouts.app')

@section('title', 'User Details')

@section('content')
    <div class="p-6">
        <div class="max-w-3xl mx-auto bg-white shadow rounded-xl p-6" style="background-color: var(--color-header);">

            <div class="mb-4">
                <span class="font-semibold" style="color: var(--color-text);">ID:</span>
                <span style="color: var(--color-text);">{{ $user->id }}</span>
            </div>

            <div class="mb-4">
                <span class="font-semibold" style="color: var(--color-text);">Name:</span>
                <span style="color: var(--color-text);">{{ $user->name }}</span>
            </div>

            <div class="mb-4">
                <span class="font-semibold" style="color: var(--color-text);">Email:</span>
                <span style="color: var(--color-text);">{{ $user->email }}</span>
            </div>

            <div class="mt-6">
                <a href="{{ route('users.index') }}" class="px-3 py-2 rounded text-xs"
                    style="background-color: var(--color-button-edit); color: white;"
                    onmouseover="this.style.backgroundColor='var(--color-button-edit-hover)'"
                    onmouseout="this.style.backgroundColor='var(--color-button-edit)'">
                    Back to List
                </a>
            </div>
        </div>
    </div>
@endsection
