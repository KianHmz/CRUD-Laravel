@extends('layouts.app')

@section('title', 'Posts')

@section('content')
    <div class="p-6">
        <div class="max-w-6xl mx-auto my-2">

            @if (session('success'))
                <x-alerts.alert-success :message="session('success')" />
            @endif

            <a href="{{ route('posts.create') }}" class="text-m px-4 py-2 rounded"
                style="background-color: var(--color-button-create); color: white;"
                onmouseover="this.style.backgroundColor='var(--color-button-create-hover)'"
                onmouseout="this.style.backgroundColor='var(--color-button-create)'">
                New Post
            </a>

            <div class="mt-5 shadow rounded-xl overflow-hidden" style="background-color: var(--color-header);">
                <table class="w-full text-left">
                    <thead style="background-color: var(--color-table-head); color: var(--color-text);">
                        <tr>
                            <th class="px-6 py-3">ID</th>
                            <th class="px-6 py-3">Title</th>
                            <th class="px-6 py-3">Author</th>
                            <th class="px-6 py-3">Created At</th>
                            <th class="px-6 py-3">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y" style="border-color: var(--color-border);">
                        @foreach ($posts as $post)
                            <tr onclick="window.location='{{ route('posts.show', $post->id) }}'"
                                class="hover:cursor-pointer hover:[background-color:var(--color-table-row-hover)]">
                                <td class="px-6 py-4">{{ $post->id }}</td>
                                <td class="px-6 py-4">{{ $post->title }}</td>
                                <td class="px-6 py-4">{{ $post->user_id }}</td>
                                <td class="px-6 py-4">{{ $post->created_at }}</td>
                                <td class="px-6 py-4">
                                    <a href="{{ route('posts.edit', $post->id) }}" class="text-sm px-3 py-1 rounded"
                                        style="background-color: var(--color-button-edit); color: white;"
                                        onmouseover="this.style.backgroundColor='var(--color-button-edit-hover)'"
                                        onmouseout="this.style.backgroundColor='var(--color-button-edit)'">
                                        Edit
                                    </a>
                                    <form action="{{ route('posts.destroy', $post->id) }}" method="post" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button class="text-sm px-3 py-1 rounded ml-2"
                                            style="background-color: var(--color-button-delete); color: white;"
                                            onmouseover="this.style.backgroundColor='var(--color-button-delete-hover)'"
                                            onmouseout="this.style.backgroundColor='var(--color-button-delete)'">
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
