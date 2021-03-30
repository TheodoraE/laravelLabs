@extends('adminlte::page')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h1 class="mb-5">Ajouter une card</h1>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="/homeAboutCards" method="POST" class="m-3">
                        @csrf
                        
                        <div class="form-group">
                            <label for="classCol">Column class : </label>
                            <input type="text" name="classCol" class="form-control" value="{{old('classCol')}}">
                        </div>

                        <div class="form-group">
                            <label for="classIcon">Icon Class : </label>
                            <input type="text" name="classIcon" class="form-control" value="{{old('classIcon')}}">
                        </div>

                        <div class="form-group">
                            <label for="title">Title : </label>
                            <input type="text" name="title" class="form-control" value="{{old('title')}}">
                        </div>

                        <div class="form-group">
                            <label for="text">Text : </label>
                            <input type="text" name="text" class="form-control" value="{{old('text')}}">
                        </div>

                        <button type="submit" class="btn mt-4" style="background-color: #AFE3D0">Ajouter</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection