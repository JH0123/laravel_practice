<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
              {{ __('Edit Form') }}
            </h2>
            <button onclick=location.href="{{ route('posts.show', ['post'=>$post->id]) }}" class="btn btn-info hover:bg-blue-700 font-bold text-white">상세보기</button>
        </div>
    </x-slot>

    <div class="m-4 p-4">
      <form class="row g-3" action="{{ route('posts.update',['post'=>$post->id]) }}"
      method="post" enctype="multipart/form-data">
      @method('patch') {{-- 값 저장? --}}
      @csrf

        <div class="col-12 m-2">
          <label for="title" class="form-label">Title</label>
          <textarea class="form-control" name="title" id="title">{{ $post->title }}</textarea>
          @error('title')
            <span class="text-red-800">{{ $message }}</span>
          @enderror
        </div>

        <div class="col-12 m-2">
          <label for="content" class="form-label">Content</label>
          <textarea class="form-control" name="content" id="content">{{ $post->content }}</textarea>

          @error('content')
            <span class="text-red-800">{{ $message }}</span>
          @enderror
        </div>

        <div class="col-12 m-2">
          <button type="submit" class="btn btn-info hover:bg-blue-700 font-bold text-white">Edit</button>
        </div>
  
      </form>
    </div>
</x-app-layout>