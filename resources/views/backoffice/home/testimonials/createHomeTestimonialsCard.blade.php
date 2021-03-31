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
                            <label for="user_id">User : </label>
                            <select name="user_id" id="">
                                <option value="">Choose the user</option>
                                @foreach ($users as $user)
                                    <option value="{{$user->id}}">{{$user->firstname}} {{$user->name}}, {{$user->positions->function}}</option>
                                @endforeach
                            </select>
                        </div>

                        <button type="submit" class="btn mt-4" style="background-color: #AFE3D0">Ajouter</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection