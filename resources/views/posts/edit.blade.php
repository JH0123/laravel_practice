<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight dark:text-gray-300">
              {{ __('Edit Form') }}
            </h2>
            <button onclick=location.href="{{ route('posts.show', ['post'=>$post->id]) }}" class="btn btn-info hover:bg-blue-700 font-bold text-white">상세보기</button>
        </div>
    </x-slot>

    <div class="m-4 p-4">
      <form id="editForm" class="row g-3" action="{{ route('posts.update',['post'=>$post->id]) }}"
      method="post" enctype="multipart/form-data">
      @method('patch')
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
          <div class="flex item-center">
          <label for="image" class="form-label">Add image</label>
          @if ($post->image)
          <img src="{{ '/storage/images/'. $post->image }}"  alt="post image" class="h-20 w-20 rounded-full">
          <button onclick="return deleteImage({{ $post->id }})" class="btn btn-danger h-10 mx-2 my-2">이미지 삭제</button>
          </div>
          @else
          <span>첨부 이미지 없음</span>
          @endif
          <input type="file" name="image" id="image">
        </div>

        <div class="col-12 m-2">
          <button type="submit" class="btn btn-info hover:bg-blue-700 font-bold text-white">Edit</button>
        </div>
  
      </form>
      <script>
      function deleteImage(id){
        editForm = document.getElementById('editForm');
        editForm._method.value = 'delete';
        editForm.action = '/posts/images/'+id;
        editForm.submit();
        return false;
      }
    </script>
    </div>
</x-app-layout>