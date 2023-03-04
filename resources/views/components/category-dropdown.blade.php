<x-dropdown :current_category="$current_category">
    <x-dropdown-item href="/?{{ http_build_query(request()->except('category', 'page')) }}" :active="request()->routeIs('home')">
        All
    </x-dropdown-item>
    @foreach ($categories as $category)
        <x-dropdown-item
            href="/?category={{ $category->slug }} & {{ http_build_query(request()->except('category', 'page')) }}"
            :active="request()->is('categories/' . $category->slug)">
            {{ ucwords($category->name) }}
        </x-dropdown-item>
    @endforeach
</x-dropdown>
