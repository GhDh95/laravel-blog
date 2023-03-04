@props(['current_category'])
<div class=" flex mt-10 " x-data="{
    open: false
}">
    <button class="bg-gray-100 relative py-2 px-3 text-sm font-semibold rounded-xl w-32" @click="open = !open"
        @click.away="open = false">
        {{ isset($current_category) ? ucwords($current_category->name) : 'Categories' }}
        <div class="absolute flex flex-col bg-gray-200 w-full inset-x-0 mt-4 rounded z-50 max-h-52 overflow-auto"
            x-show="open">
            {{ $slot }}
        </div>
    </button>

</div>
