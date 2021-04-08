@extends('adminlte::page')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h1 class="mb-5">Ajouter une publication</h1>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="/posts" method="POST" enctype="multipart/form-data" class="m-3">
                        @csrf
                        
                        <div class="form-group">
                            <label for="url">Image : </label>
                            <input type="file" name="url" id="">
                        </div>
                        <div class="form-group">
                            <label for="title">Title : </label>
                            <input type="text" name="title" class="form-control" value="{{old('title')}}">
                        </div>
                        <div class="form-group">
                            <label for="text">Post : </label> <br>
                            <textarea name="text" id="" cols="100" rows="5">{{old('text')}}</textarea> <br>
                            <span>Insérer {{ $br }} pour aller à la ligne</span>
                        </div>
                        {{-- Select  --}}
                        <div class="form-group">
                            <label for="function">Category : </label>
                            <select name="category_id" id="">
                                <option value="">Select a category</option>
                                @foreach ($categories as $item)
                                    <option value="{{$item->id}}">{{$item->category}}</option>
                                @endforeach
                            </select>
                        </div>

                        @foreach ($tags as $tag)
                            <div class="form-group">
                                <label for="text">{{$tag->tag}} </label> 
                                <input type="checkbox" name="tag[]" id="" value="{{$tag->id}}">
                            </div>
                        @endforeach

                        <button type="submit" class="btn mt-4" style="background-color: #AFE3D0">Ajouter</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection