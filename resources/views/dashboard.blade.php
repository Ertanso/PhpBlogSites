<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Blog Posts') }}
        </h2>
    </x-slot>

    <div class="py-12">

        @forelse ($posts as $post)
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-6">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <img src="https://www.timsahajans.com.tr/data/uploads/Blog-Nedir-Cesitleri-Nelerdir.jpg" style="height: 200px">
                    <h2>{{ $post->title }}</h2>
                    <p>{{ $post->body }}</p>
                    <small>By {{ $post->user->name }}</small>
                </div>
            </div>
        </div>
    @empty
        <p>No posts found.</p>
    @endforelse

        
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
    </div>
    </div>
</x-app-layout>
