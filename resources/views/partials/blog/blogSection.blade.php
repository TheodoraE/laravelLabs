<!-- Post item -->
@foreach ($postsOK as $post)
    <div class="post-item">
        <div class="post-thumbnail">
            <img src="{{asset('storage/img/'.$post->url)}}" height="268px" alt="">
            <div class="post-date">
                @if ($post->created_at == NULL)

                    <h2>03</h2>
                    <h3>April 2017</h3>

                    @else

                    <h2>{{$post->created_at->format("d")}}</h2>
                    <h3>{{$post->created_at->format("m y")}}</h3>

                @endif
            </div>
        </div>
        <div class="post-content">
            <h2 class="post-title">{{$post->title}}</h2>
            <div class="post-meta">

                <a id="styleMeta" href="/filterCategory/{{$post->id}}">{{$post->categories->category}}</a>

                @foreach ($post->tags->take(2) as $tage)
                    @if ($loop->iteration == 1)
                        <a id="styleMeta" href="/filterTag/{{$tage->id}}">{{$tage->tag}}</a>
                    @else
                        <a href="/filterTag/{{$tage->id}}">, {{$tage->tag}}</a>
                    @endif
                @endforeach
                
                <a id="styleMeta" href="/posts/{{$post->id}}">{{count($commentsOK->where('post_id', $post->id))}} Comments</a>
            </div>
            <p>{!! Str::limit($post->text, 318) !!}</p>
            <a href="/posts/{{$post->id}}" class="read-more">Read More</a>
        </div>
    </div>
@endforeach

<div style="text-align: center">
    {{$postsOK->fragment('service')->links('vendor.pagination.bootstrap-4')}}
</div>
            
<!-- page section end-->