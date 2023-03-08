@props(['comment'])
<article class="flex max-w-lg space-x-5 bg-gray-100 p-2 rounded-xl max-h-[200px] overflow-y-auto">
    <div class="shrink-0 mt-8">
        <img class="rounded-full" src="https://i.pravatar.cc/100?u={{ $comment->user_id }}" alt="">
    </div>
    <div class="flex flex-col space-y-2">
        <header>
            <h3 class="font-bold">{{ $comment->author->username }}</h3>
            <p class="text-xs">
                <time>{{ $comment->created_at->diffForHumans() }}</time>
            </p>
        </header>

        <p class="">
            {{ $comment->body }}
        </p>
    </div>
</article>
