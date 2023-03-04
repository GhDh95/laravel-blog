<header class="max-w-xl mx-auto mt-20 text-center">
    <h1 class="text-4xl">
        Latest <span class="text-blue-500">Laravel From Scratch</span> News
    </h1>


    <div class="grid grid-cols-2 justify-items-center">

        <x-category-dropdown />
        <div class=" w-fit bg-gray-100 rounded-xl h-10 mt-10 px-2">
            <form method="GET" action="/">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                <input type="text" name="search" placeholder="Find something"
                    class="mt-2 text-center align-bottom bg-transparent placeholder-black font-semibold text-sm"
                    value="{{ request('search') }}">
            </form>
        </div>
    </div>


    </div>
</header>
