<div class="container">
    <div class="card-body">
        <h5 class="card-title">제목 : {{ $post->title }}</h5>
        <p class="card-text">내용 : {{ $post->content }}</p>
    </div>
    <ul class="list-group list-group-flush">
        {{-- diffForHumans()를 적지 않았을 때는 연월일 시간이 다 표시된다 --}}
        <li class="list-group-item">등록일 : {{ $post->created_at->diffForHumans() }}</li>
        <li class="list-group-item">작성일 : {{ $post->updated_at->diffForHumans() }}</li>
        <li class="list-group-item">작성자 : {{ $post->writer->name }}</li>
    </ul>
</div>