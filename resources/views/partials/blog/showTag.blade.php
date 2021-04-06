<!-- page section -->
<div class="page-section spad">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-7 blog-posts">
                {{-- @if($posts->isNotEmpty()) --}}
                    @foreach ($postsTaguer as $post)
                        @foreach ($post->posts as $item)
                            <div class="post-list">
                                <p>{{ $item->title }}</p>
                                <img src="{{ asset('storage/img/'.$item->url) }}">
                            </div>
                        @endforeach
                    @endforeach
                {{-- @else 
                    <div>
                        <h2>No posts found</h2>
                    </div>
                @endif --}}
            </div>
            <!-- Sidebar area -->
            <div class="col-md-4 col-sm-5 sidebar">
                <!-- Single widget -->
                <div class="widget-item">
                    <form action="#" class="search-form">
                        <input type="text" placeholder="Search">
                        <button class="search-btn"><i class="flaticon-026-search"></i></button>
                    </form>
                </div>
                <!-- Single widget -->
                <div class="widget-item">
                    <h2 class="widget-title">Categories</h2>
                    <ul>
                        @foreach ($categories as $category)
                            <li><a href="#">{{$category->category}}</a></li>
                        @endforeach
                    </ul>
                </div>
                <!-- Single widget -->
                <div class="widget-item">
                    <h2 class="widget-title">Tags</h2>
                    <ul class="tag">
                        @foreach ($tags as $tag)
                            <li><a href="">{{$tag->tag}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- page section end-->