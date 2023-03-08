<x-layout>

    <div class="mb-10 py-8 px-6">
        <a href="/">
            <div class="flex justify-center pt-20 pb-10">
                <span class="material-symbols-outlined cursor-pointer">
                    arrow_back_ios
                </span>
                <p class="">

                    Back to Posts
                </p>

            </div>
        </a>
        <div class="flex flex-col md:flex md:flex-row justify-center space-x-10 md:px-96">
            <div class="min-w-[240px]">
                <img class="h-[200px] w-[240px] rounded-lg" src="/images/illustration-1.png" alt="">
                <p class="text-center py-3  text-sm text-gray-600">Published {{ $post->created_at->diffForHumans() }}
                </p>
                <div class="flex items-center">
                    <img class="w-20 h-20" src="/images/lary-head.svg" alt="">
                    <a href="/?author={{ $post->author->username }}">
                        <p class="font-semibold">{{ $post->author->name }}</p>
                    </a>
                </div>
            </div>
            <div class="flex flex-col space-y-4">
                <div class="">
                    <p class="text-4xl font-bold pb-2">{{ $post->title }}</p>
                    <x-category-button :category="$post->category" />
                </div>
                <p class="">{{ $post->body }}</p>
            </div>
        </div>
    </div>
    {{-- Comment section --}}
    <section class="flex flex-col items-center space-y-10">

        <form class="flex rounded-xl flex-col space-y-4 border border-gray-600 px-5  py-4 max-w-[350px] md:max-w-none"
            action="/posts/{{ $post->slug }}/comments" method="post">
            @csrf
            <header class="flex pb-3 items-center space-x-2 border-b border-gray-100">
                <img class="rounded-full" src="https://i.pravatar.cc/60?u={{ auth()->id() }}" alt="">
                <p>Want to participate? </p>
            </header>

            @auth
                <textarea value="{{ old('body') }}" class="px-3 border-b border-black" placeholder="quick say something! "
                    name="body" id="" cols="40" rows="4">
                </textarea>
                @error('body')
                    <p class="text-sm text-red-500">{{ $message }}</p>
                @enderror

                <button class="self-end border border-blue-700 px-2 py-1 rounded-xl bg-blue-600 text-white"
                    type="submit">Post</button>
            @else
                <a class="hover:underline self-end" href="/login">login</a>
            @endauth

        </form>

        <div class="flex flex-col space-y-6">
            @foreach ($post->comments->reverse() as $comment)
                <x-post-comment :comment="$comment" />
            @endforeach
        </div>
    </section>
    <x-flash />

</x-layout>
