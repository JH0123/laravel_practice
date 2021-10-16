<div class="container dark:text-black">
    <div class="card" style="width: 80%;  margin:10px">
        @if ($post->image)
    <img src="{{ '/storage/images/'. $post->image }}" class="card-img-top" alt="post image">
    @else
    <span>첨부 이미지 없음</span>
    @endif
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
    <div class="card-body flex">
        <a href="{{ route('posts.edit',['post'=>$post->id]) }}" class="card-link">수정하기</a>
        
        <div class="ml-4">
        <form class="row g-3" action="{{ route('posts.destroy',['post'=>$post->id]) }}"
        method="post" enctype="multipart/form-data">
        @method('delete')
        @csrf

        <button type="submit">삭제하기</button>
        </form>
        </div>
    </div>
</div>