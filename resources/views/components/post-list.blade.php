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
    {{-- pagination --}}
    {{ $posts->links() }}
</div>