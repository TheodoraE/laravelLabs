@extends('adminlte::page')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h1 class="mb-5">Ajouter un témoignage</h1>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="/homeTestimonialsCards" method="POST" enctype="multipart/form-data" class="m-3">
                        @csrf
                        
                        <div class="form-group">
                            <label for="button">Decoration : </label>
                            <input type="text" name="span" class="form-control" value="{{old('span')}}">
                        </div>
                        <div class="form-group">
                            <label for="link">Text : </label>
                            <input type="text" name="text" class="form-control" value="{{old('text')}}">
                        </div>
                        <div class="form-group">
                            <label for="url">Image : </label> <br>
                            <input type="file" name="url" id="url">
                        </div>
                        <div class="form-group">
                            <label for="name">Name : </label>
                            <input type="text" name="name" class="form-control" value="{{old('name')}}">
                        </div>
                        <div class="form-group">
                            <label for="function">Function : </label>
                            <input type="text" name="function" class="form-control" value="{{old('function')}}">
                        </div>

                        <button type="submit" class="btn mt-4" style="background-color: #AFE3D0">Ajouter</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection