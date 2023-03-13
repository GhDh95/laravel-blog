<x-layout>
    <section class="max-w-md mx-auto">
        <h1 class="text-3xl">Publish new Post</h1>
        <form class="space-y-4 md:space-y-6" method="POST" action="/admin/posts">
            @csrf
            <div>
                <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                    title</label>
                <input value="{{ old('title') }}" type="text" name="title" id="title"
                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="title">

                @error('title')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="slug" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                    slug</label>
                <input value="{{ old('slug') }}" type="text" name="slug" id="slug"
                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="slug">

                @error('slug')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="excerpt" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                    excerpt</label>
                <textarea value="{{ old('excerpt') }}" placeholder="exerpt" class="w-full h-16 border border-gray-300 p-2 bg-gray-50"
                    name="excerpt" id="excerpt" cols="" rows=""></textarea>
                @error('excerpt')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="body" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">body</label>
                <textarea value="{{ old('body') }}" placeholder="body" class="w-full h-16 border border-gray-300 p-2 bg-gray-50"
                    name="body" id="body" cols="" rows=""></textarea>
                @error('body')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex flex-col space-y-2">
                <label class="font-semibold" for="category">Category</label>
                <select name="category_id" id="cateogry" class="md:w-1/2 p-1 rounded-lg">
                    @foreach (\App\Models\Category::get() as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>


            <button type="submit"
                class="w-full text-blue-600 bg-gray-200 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Publish</button>

            <x-flash />
        </form>
    </section>
</x-layout>
