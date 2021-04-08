@extends('adminlte::page')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h1 class="mb-5">Modifier la publication</h1>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="/posts/{{$post->id}}" method="POST" enctype="multipart/form-data" class="m-3">
                        @csrf
                        @method('PATCH')
                        
                        <div class="form-group">
                            <label for="url">Image : </label>
                            <input type="file" name="url" id="">
                        </div>
                        <div class="form-group">
                            <label for="title">Title : </label>
                            <input type="text" name="title" class="form-control" value="{{old('title') ? old('title') : $post->title}}">
                        </div>
                        <div class="form-group">
                            <label for="text">Post : </label> <br>
                            <textarea name="text" id="" cols="125" rows="10">{!!old('text') ? old('text') : $post->text!!}</textarea> <br>
                            <span>Insérer {{ $br }} pour aller à la ligne</span>
                        </div>
                        {{-- Select  --}}
                        <div class="form-group">
                            <label for="function">Category : </label>
                            <select name="category_id" id="">
                                <option value="{{$post->categories->id}}">{{$post->categories->category}}</option>
                                @foreach ($categories as $item)
                                    @if ($item->id != $post->category_id)
                                        <option value="{{$item->id}}">{{$item->category}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>

                        @foreach ($tags as $tag)
                            <div class="form-group">
                                <label for="tag_id">{{$tag->tag}} </label> <br>
                                <input type="checkbox" name="tag[]" id="" value="{{$tag->id}}">
                            </div>
                        @endforeach

                        <button type="submit" class="btn mt-4" style="background-color: #F7D3BB">Enregistrer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection