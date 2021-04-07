<!-- Post item -->
@foreach ($posts as $post)
    <div class="post-item">
        <div class="post-thumbnail">
            <img src="{{asset('storage/img/'.$post->url)}}" alt="">
            <div class="post-date">
                <h2>{{$post->day}}</h2>
                <h3>{{$post->year}}</h3>
            </div>
        </div>
        <div class="post-content">
            <h2 class="post-title">{{$post->title}}</h2>
            <div class="post-meta">
                <a href="/filterCategory/{{$post->id}}">{{$post->categories->category}}</a>
                @foreach ($post->tags->take(2) as $tage)
                    <a href="/filterTag/{{$tage->id}}">{{$tage->tag}}</a>
                @endforeach
                <a href="/posts/{{$post->id}}">{{count($commentsId)}} Comments</a>
            </div>
            <p>{{Str::limit($post->text, 318)}}</p>
            <a href="/posts/{{$post->id}}" class="read-more">Read More</a>
        </div>
    </div>
@endforeach

<!-- Pagination -->
<div class="page-pagination">
    <a class="active" href="">01.</a>
    <a href="">02.</a>
    <a href="">03.</a>
</div>
            
<!-- page section end-->