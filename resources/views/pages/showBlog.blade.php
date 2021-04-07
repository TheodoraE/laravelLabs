@extends('template.templateBlog')

@section('content')
	<!-- Single Post -->
	<div class="single-post">
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
		<div class="comments">
			<h2>Comments ({{count($commentsAll->where('post_id', $post->id))}})</h2>
			@if (count($commentsAll->where('post_id', $post->id)) != 0)
				<ul class="comment-list">
					@foreach ($commentsAll as $comment)
						<li>
							<div class="avatar">
								<img src="{{asset('storage/img/'.$comment->url)}}" alt="">
							</div>
							<div class="commetn-text">
								<h3>{{$comment->firstname.' '.$comment->name}} | {{$comment->date}}</h3>
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
							<div class="col-sm-6">
								<input type="text" name="email" placeholder="Your email">
							</div>
							<div class="col-sm-6">
								<input type="file" name="url" id="">
							</div>
							{{-- <div class="col-sm-12">
								<label for="user_id">Author :</label>
								<select name="user_id" id="" class="form-control">
									<option value="{{Auth::user()->id}}">{{Auth::user()->firstname.' '.Auth::user()->name}}</option>
								</select>
							</div> --}}
							{{-- <div class="col-sm-12">
								<label for="user_id">Author :</label>
								<select name="user_id" id="" class="form-control">
									<option value="">Choose your profile</option>
									@foreach ($usersOK as $user)
										<option value="{{$user->id}}">{{$user->firstname.' '.$user->name.', '.$user->positions->function}}</option>
									@endforeach
								</select>
							</div> --}}
						@endif
						<div class="col-sm-12">
							<input type="text" name="date" placeholder="DD Month, YYYY">
						</div>

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