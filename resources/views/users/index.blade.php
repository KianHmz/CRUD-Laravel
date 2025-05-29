@extends('layouts.app')

@section('title', 'Users')

@section('content')
    <div class="p-6">
        <div class="max-w-5xl mx-auto my-2">

            <a href="#" class="text-m px-4 py-2 rounded"
                style="background-color: var(--color-button-create); color: white;"
                onmouseover="this.style.backgroundColor= 'var(--color-button-create-hover)'"
                onmouseout="this.style.backgroundColor= 'var(--color-button-create)'">
                New
            </a>

            <div class="mt-5 shadow rounded-xl overflow-hidden" style="background-color: var(--color-header);">
                <table class="w-full text-left">
                    <thead style="background-color: var(--color-table-head); color: var(--color-text);">
                        <tr>
                            <th class="px-6 py-3">ID</th>
                            <th class="px-6 py-3">Name</th>
                            <th class="px-6 py-3">Email</th>
                            <th class="px-6 py-3">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y" style="border-color: var(--color-border);">
                        <tr class="hover:[background-color:var(--color-table-row-hover)]">
                            <td class="px-6 py-4">1</td>
                            <td class="px-6 py-4">Alice Smith</td>
                            <td class="px-6 py-4">alice@example.com</td>
                            <td class="px-6 py-4">
                                <a href="#" class="text-sm px-3 py-1 rounded"
                                    style="background-color: var(--color-button-edit); color: white;"
                                    onmouseover="this.style.backgroundColor= 'var(--color-button-edit-hover)'"
                                    onmouseout="this.style.backgroundColor= 'var(--color-button-edit)'">
                                    Edit
                                </a>
                                <button class="text-sm px-3 py-1 rounded ml-2"
                                    style="background-color: var(--color-button-delete); color: white;"
                                    onmouseover="this.style.backgroundColor='var(--color-button-delete-hover)'"
                                    onmouseout="this.style.backgroundColor='var(--color-button-delete)'">
                                    Delete
                                </button>
                            </td>
                        </tr>
                        <tr class="hover:[background-color:var(--color-table-row-hover)]">
                            <td class="px-6 py-4">2</td>
                            <td class="px-6 py-4">Bob Johnson</td>
                            <td class="px-6 py-4">bob@example.com</td>
                            <td class="px-6 py-4">
                                <a href="#" class="text-sm px-3 py-1 rounded"
                                    style="background-color: var(--color-button-edit); color: white;"
                                    onmouseover="this.style.backgroundColor= 'var(--color-button-edit-hover)'"
                                    onmouseout="this.style.backgroundColor= 'var(--color-button-edit)'">
                                    Edit
                                </a>
                                <button class="text-sm px-3 py-1 rounded ml-2"
                                    style="background-color: var(--color-button-delete); color: white;"
                                    onmouseover="this.style.backgroundColor='var(--color-button-delete-hover)'"
                                    onmouseout="this.style.backgroundColor='var(--color-button-delete)'">
                                    Delete
                                </button>
                            </td>
                        </tr>
                        <tr class="hover:[background-color:var(--color-table-row-hover)]">
                            <td class="px-6 py-4">3</td>
                            <td class="px-6 py-4">Charlie Davis</td>
                            <td class="px-6 py-4">charlie@example.com</td>
                            <td class="px-6 py-4">
                                <a href="#" class="text-sm px-3 py-1 rounded"
                                    style="background-color: var(--color-button-edit); color: white;"
                                    onmouseover="this.style.backgroundColor= 'var(--color-button-edit-hover)'"
                                    onmouseout="this.style.backgroundColor= 'var(--color-button-edit)'">
                                    Edit
                                </a>
                                <button class="text-sm px-3 py-1 rounded ml-2"
                                    style="background-color: var(--color-button-delete); color: white;"
                                    onmouseover="this.style.backgroundColor='var(--color-button-delete-hover)'"
                                    onmouseout="this.style.backgroundColor='var(--color-button-delete)'">
                                    Delete
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
