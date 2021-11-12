@extends('layouts.navigation')

<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight dark:text-gray-300">
              {{ __('Posts') }}
            </h2>
             <button onclick=location.href="{{ route('posts.create') }}" class="btn btn-info hover:bg-blue-700 font-bold text-white">글쓰기</button>
        </div>
    </x-slot>
    <div class="m-4 p-4">
    <table class="table dark:text-gray-300">
    <thead>
      <tr>
        <th scope="col">제목</th>
        <th scope="col">작성자</th>
        <th scope="col">작성일</th>
      </tr>
    </thead>
    <tbody>
      {{-- 게시글 표시 --}}
      @foreach ($posts as $post)
        <tr>
          {{-- title을 클릭했을 시 show로 이동, post의 id값도 넘겨준다 --}}
          <td><a href="{{ route('posts.show', ['post'=>$post->id]) }}">{{ $post->title }}</a></td>
          <td>{{ $post->writer->name }}</td>
          <td>{{ $post->created_at->diffForHumans() }}</td>
          {{-- diffForHumans()은 1개월까지의 날짜를 표시한다 --}}
        </tr>
    @endforeach
      </tbody>
      </table>
      </div>
</x-app-layout>