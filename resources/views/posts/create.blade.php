<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
              {{ __('Form') }}
            </h2>
            <button onclick=location.href="{{ route('posts.index') }}" class="btn btn-info hover:bg-blue-700 font-bold text-white">목록보기</button>
        </div>
    </x-slot>

    <div>
    {{-- 파일 업로드 --}}
    <form class="row g-3" action="{{ route('posts.store') }}"
    method="post" enctype="multipart/form-data">
    @csrf{{-- 없으면 비활성화로 인해 페이지가 만료되었다는 페이지를 표시한다 --}}
    <div class="col-12 m-2">
    <label for="title" class="form-label">Title</label>
    <input class="form-control" id="title" name="title" />
    {{-- <textarea class="form=control" name="title" id="title">{{ old('title') }}</textarea> --}}
  </div>

  <div class="col-12 m-2">
    <label for="content" class="form-label">Content</label>
    <input class="form-control" id="content" name="content" />
  </div>

  <div class="col-12 m-2">
  <button type="submit" class="btn btn-info hover:bg-blue-700 font-bold text-white">Submit</button>
  </div>
  
  </form>
  </div>
</x-app-layout>