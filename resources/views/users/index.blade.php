@extends('layouts.app')

@section('title', 'Users')

@section('content')
    <div class="p-6">
        <div class="max-w-5xl mx-auto my-2">

            @if (session('success'))
                <x-alerts.alert-success :message="session('success')" />
            @endif

            @auth
                @if (Auth::user()->isAdmin())
                    <a href="{{ route('users.create') }}" class="text-m px-4 py-2 rounded"
                        style="background-color: var(--color-button-create); color: white;"
                        onmouseover="this.style.backgroundColorF= 'var(--color-button-create-hover)'"
                        onmouseout="this.style.backgroundColor= 'var(--color-button-create)'">
                        New
                    </a>
                @endif
            @endauth

            <div class="mt-5 shadow rounded-xl overflow-hidden" style="background-color: var(--color-header);">
                <table class="w-full text-left">
                    <thead style="background-color: var(--color-table-head); color: var(--color-text);">
                        <tr>
                            <th class="px-6 py-3">ID</th>
                            <th class="px-6 py-3">Name</th>
                            <th class="px-6 py-3">Email</th>
                            @auth
                                @if (Auth::user()->isAdmin())
                                    <th class="px-6 py-3">Actions</th>
                                @endif
                            @endauth
                        </tr>
                    </thead>
                    <tbody class="divide-y" style="border-color: var(--color-border);">
                        @foreach ($users as $user)
                            <tr onclick="window.location='{{ route('users.show', $user->id) }}'"
                                class="hover:[background-color:var(--color-table-row-hover)] hover:cursor-pointer">
                                <td class="px-6 py-4">{{ $user->id }}</td>
                                <td class="px-6 py-4">{{ $user->name }}</td>
                                <td class="px-6 py-4">{{ $user->email }}</td>
                                @auth
                                    @if (Auth::user()->isAdmin())
                                        <td class="px-6 py-4">
                                            <a href="{{ route('users.edit', $user->id) }}" class="text-sm px-3 py-1 rounded"
                                                style="background-color: var(--color-button-edit); color: white;"
                                                onmouseover="this.style.backgroundColor= 'var(--color-button-edit-hover)'"
                                                onmouseout="this.style.backgroundColor= 'var(--color-button-edit)'">
                                                Edit
                                            </a>
                                            <form action="{{ route('users.destroy', $user->id) }}" method="post"
                                                class="inline">
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
                                    @endif
                                @endauth
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
