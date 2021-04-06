<div class="container">
    {{-- @if($posts->isNotEmpty()) --}}
        @foreach ($posts as $post)
            <div class="post-list">
                <p>{{ $post->title }}</p>
                <img src="{{ asset('storage/img/'.$post->url) }}">
            </div>
        @endforeach
    {{-- @else 
        <div>
            <h2>No posts found</h2>
        </div>
    @endif --}}
</div>