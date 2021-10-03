<div class="m-4 p-4">
    <table class="table table-hover">
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
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->writer->name }}</td>
                    <td>{{ $post->created_at->diffForHumans() }}</td>
                    {{-- diffForHumans()은 1개월까지의 날짜를 표시한다 --}}
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $posts->links() }}
</div>