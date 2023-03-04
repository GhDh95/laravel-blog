<x-layout>

    @include('posts._header')

    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">

        @if ($posts->count() > 0)
            <x-posts-grid :posts="$posts" />
            {{ $posts->links() }}
        @else
            <p class="text-center text-3xl">There are no posts yet.</p>
        @endif

        <x-flash />
    </main>
</x-layout>
