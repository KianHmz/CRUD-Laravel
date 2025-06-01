<header class="shadow" style="background-color: var(--color-header);">
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
        <h1 class="text-xl font-bold" style="color: var(--color-text);">Laravel CRUD</h1>
        <nav class="space-x-3 flex items-center">
            @auth
                <form action="{{ route('logout') }}" method="POST" class="inline">
                    @csrf
                    <button type="submit" class="hover:underline hover:cursor-pointer me-7" style="color: var(--color-link);">Logout</button>
                </form>
            @else
                <a href="{{ route('login') }}" class="hover:underline me-7" style="color: var(--color-link);">register/login</a>
            @endauth
            <a href="{{ route('users.index') }}" class="hover:underline" style="color: var(--color-link);">Users</a>
            <a href="{{ route('posts.index') }}" class="hover:underline" style="color: var(--color-link);">Posts</a>
        </nav>
    </div>
</header>
