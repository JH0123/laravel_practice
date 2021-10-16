<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight dark:text-gray-300">
              {{ __('Show') }}
            </h2>
            <button onclick=location.href="{{ route('posts.index') }}" class="btn btn-info hover:bg-blue-700 font-bold text-white">목록보기</button>
        </div>
    </x-slot>
    <x-post-show :post="$post"/>
</x-app-layout>