@extends('layouts.app')

@section('title', 'Create Post')

@section('content')
    <div class="p-6">
        <div class="max-w-3xl mx-auto my-8"
            style="background-color: var(--color-header); padding: 2rem; border-radius: 1rem; box-shadow: 0 0 10px rgba(0,0,0,0.3);">

            <form method="POST" action="{{ route('posts.store') }}">
                @csrf

                <div class="mb-4">
                    <label for="title" class="block mb-1" style="color: var(--color-text);">Title</label>
                    <input type="text" id="title" name="title" required
                        class="w-full px-3 py-2 rounded text-black placeholder-white"
                        placeholder="Enter post title" value="{{old('title')}}"
                        style="background-color: white;">
                    @error('title')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="category" class="block mb-1" style="color: var(--color-text);">Category</label>
                    <input type="text" id="category" name="category" required
                        class="w-full px-3 py-2 rounded text-black placeholder-white" placeholder="Enter post category"
                        value="{{ old('category') }}" style="background-color: white;">
                    @error('category')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="description" class="block mb-1" style="color: var(--color-text);">Description</label>
                    <textarea id="description" name="description" rows="5" required
                        class="w-full px-3 py-2 rounded text-black placeholder-white" placeholder="Write post description..."
                        style="background-color: white;">{{old('description')}}</textarea>
                    @error('description')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex justify-between">
                    <a href="{{ route('posts.index') }}" class="px-4 py-2 rounded"
                        style="background-color: var(--color-button-delete); color: white;"
                        onmouseover="this.style.backgroundColor='var(--color-button-delete-hover)'"
                        onmouseout="this.style.backgroundColor='var(--color-button-delete)'">
                        Cancel
                    </a>
                    <button type="submit" class="px-4 py-2 rounded"
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
        input::placeholder,
        textarea::placeholder {
            color: white !important;
            opacity: 1;
        }
    </style>
@endsection
