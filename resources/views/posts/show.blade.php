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
    <section class="flex justify-center ">
        <div class="flex flex-col space-y-6">
            <x-post-comment />
            <x-post-comment />
            <x-post-comment />
        </div>
    </section>
</x-layout>
