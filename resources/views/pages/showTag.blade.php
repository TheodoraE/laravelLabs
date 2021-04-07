@extends('template.templateBlog')

@section('content')

	@if($posts->isNotEmpty())
		@foreach ($postsTaguer as $post)
			@foreach ($post->posts as $item)
				<div class="post-list">
					<p>{{ $item->title }}</p>
					<img src="{{ asset('storage/img/'.$item->url) }}">
				</div>
			@endforeach
		@endforeach
	@else 
		<div>
			<h2>No posts found</h2>
		</div>
	@endif

	{{-- @if($posts->isNotEmpty())
		@foreach ($postsCategory as $post)
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
						<a href="/posts/{{$post->id}}">{{count($commentsAll->where('post_id', $post->id))}} Comments</a>
					</div>
					<p>{{Str::limit($post->text, 318)}}</p>
					<a href="/posts/{{$post->id}}" class="read-more">Read More</a>
				</div>
			</div>
		@endforeach
	@else 
		<div>
			<h2>No posts found</h2>
		</div>
	@endif --}}


@endsection