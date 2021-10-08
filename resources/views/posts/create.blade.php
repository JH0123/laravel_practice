<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
              {{ __('Form') }}
            </h2>
            <button onclick=location.href="{{ route('posts.index') }}" class="btn btn-info hover:bg-blue-700 font-bold text-white">목록보기</button>
        </div>
    </x-slot>

    <div class="m-4 p-4">
    {{-- 파일 업로드 --}}
    <form class="row g-3" action="{{ route('posts.store') }}"
    method="post" enctype="multipart/form-data">
    @csrf{{-- 없으면 비활성화로 인해 페이지가 만료되었다는 페이지를 표시한다 --}}

    <div class="col-12 m-2">
    <label for="title" class="form-label">Title</label>
    {{-- 오래된 데이터 표시? --}}
    <textarea class="form=control" name="title" id="title">{{ old('title') }}</textarea>
    {{-- 입력을 하지 않을 시 에러메시지 출력 --}}  
    @error('title')
      <span class="text-red-800">{{ $message }}</span>
    @enderror
  </div>

  <div class="col-12 m-2">
    <label for="content" class="form-label">Content</label>
    <textarea class="form=control" name="content" id="content">{{ old('content') }}</textarea>
    {{-- <input class="form-control" id="content" name="content" /> --}}
    @error('content')
      <span class="text-red-800">{{ $message }}</span>
    @enderror
  </div>

  <div class="col-12 m-2">
  <button type="submit" class="btn btn-info hover:bg-blue-700 font-bold text-white">Submit</button>
  </div>
  
  </form>
  </div>
</x-app-layout>