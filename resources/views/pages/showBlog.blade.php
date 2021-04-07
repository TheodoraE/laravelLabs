@extends('template.templateBlog')

@section('content')
	<!-- Single Post -->
	<div class="single-post">
		<div class="post-thumbnail">
			<img src="{{asset('storage/img/'.$post->url)}}" alt="">
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
                <a href="/filterCategory/{{$post->id}}">{{$post->categories->category}}</a>
                @foreach ($post->tags as $tage)
                    <a href="/filterTag/{{$tage->id}}">{{$tage->tag}}</a>
                @endforeach
                <a href="#comments">{{count($commentsId)}} Comments</a>
            </div>
			<p>{!!$post->text!!}</p>
		</div>
		<!-- Post Author -->
		<div class="author">
			<div class="avatar">
				<img src="{{asset('storage/img/'.$post->users->url)}}" height="117px" alt="">
			</div>
			<div class="author-info">
				<h2>{{$post->users->firstname.' '.$post->users->name}}, <span>Author</span></h2>
				<p>{{$post->users->description}}</p>
			</div>
		</div>
		<!-- Post Comments -->
		<div id="comments" class="comments">
			<h2>Comments ({{count($commentsId)}})</h2>
			@if (count($commentsId) != 0)
				<ul class="comment-list">
					@foreach ($commentsId as $comment)
						<li>
							<div class="avatar">
								<img src="{{asset('storage/img/'.$comment->url)}}" alt="">
							</div>
							<div class="commetn-text">
								<h3>{{$comment->firstname.' '.$comment->name}} | 
									@if ($comment->created_at == NULL)
										<td>03 april 2017</td>
									@else
										<td>{{$comment->created_at->format("d").' '.$comment->created_at->format("m y")}}</td>
									@endif
								</h3>
								<p>{{$comment->comment}}</p>
							</div>
						</li>
					@endforeach
				</ul>
			@else
				<h2>... No comments yet ...</h2>
			@endif
		</div>
		<!-- Commert Form -->
		<div class="row">
			<div class="col-md-9 comment-from">
				<h2>Leave a comment</h2>
				<form action="/comments" method="POST" class="form-class">
					@csrf
					<div class="row">

						@if (Auth::check() == 0)
							<div class="col-sm-12">
								<label for="">Author :</label>
							</div>

							<div class="col-sm-6">
								<input type="text" name="firstname" placeholder="Your firstname">
							</div>
							<div class="col-sm-6">
								<input type="text" name="name" placeholder="Your name">
							</div>
							<div class="col-sm-12">
								<input type="text" name="email" placeholder="Your email">
							</div>
							
						@endif

						<div class="col-sm-12">
							{{-- <input type="text" name="subject" placeholder="Subject"> --}}
							<textarea name="comment" placeholder="Comment"></textarea>
							<button class="site-btn">send</button>
						</div>
					</div>
				</form>

			</div>
		</div>
	</div>

@endsection