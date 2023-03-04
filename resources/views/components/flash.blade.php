@if (session()->has('success'))
    <div x-data="{
        show: true,
        removeMessage() {
            setTimeout(() => { this.show = false }, 4000);
        }
    }" x-init="removeMessage()" x-show="show">
        <p class="fixed bottom-0 right-0 ml-10 mr-10 bg-blue-500 py-3 px-4 rounded-xl text-white">
            {{ session('success') }}</p>
    </div>
@endif
