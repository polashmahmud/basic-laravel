<div class="w-full bg-white p-6 shadow rounded-md">
    <div class="items-center justify-between flex">
        <h1 class="text-2xl font-medium leading-none text-gray-8000">Laravel Basic</h1>
        <div class="space-x-3">
            <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
            <x-nav-link href="/posts" :active="request()->is('posts')">Posts</x-nav-link>
        </div>
    </div>
</div>
