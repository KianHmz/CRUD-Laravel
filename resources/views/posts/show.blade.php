@extends('layouts.app')

@section('title', 'Post Details')

@section('content')
    <div class="p-6">
        <div class="max-w-3xl mx-auto bg-white shadow rounded-xl p-6" style="background-color: var(--color-header);">

            <div class="">
                <span class="font-semibold" style="color: var(--color-text);">Post ID:</span>
                <span style="color: var(--color-text);">{{ $post->id }}</span>
            </div>

            <div class="mb-4">
                <span class="font-semibold" style="color: var(--color-text);">author ID:</span>
                <span style="color: var(--color-text);">{{ $post->user_id }}</span>
            </div>

            <div class="mb-4">
                <span class="font-semibold" style="color: var(--color-text);">title:</span><br>
                <span style="color: var(--color-text);">{{ $post->title }}</span>
            </div>

            <div class="mb-4">
                <span class="font-semibold" style="color: var(--color-text);">description:</span><br>
                <span style="color: var(--color-text);">{{ $post->description }}</span>
            </div>

            <div class="mb-4">
                <span class="font-semibold" style="color: var(--color-text);">created at:</span><br>
                <span style="color: var(--color-text);">{{ $post->created_at }}</span>
            </div>

            <div class="mt-6">
                <a href="{{ route('posts.index') }}" class="px-3 py-2 rounded text-xs"
                    style="background-color: var(--color-button-edit); color: white;"
                    onmouseover="this.style.backgroundColor='var(--color-button-edit-hover)'"
                    onmouseout="this.style.backgroundColor='var(--color-button-edit)'">
                    Back to List
                </a>
            </div>
        </div>
    </div>
@endsection
