@extends('adminlte::page')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h1 class="mb-5">Ajouter un header</h1>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="/pageHeaders" method="POST" class="m-3">
                        @csrf

                        <div class="form-group">
                            <label for="home">Home : </label>
                            <input type="text" name="home" class="form-control" value="{{old('home')}}">
                        </div>
                        
                        <div class="form-group">
                            <label for="homeLink">Home link : </label>
                            <input type="text" name="homeLink" class="form-control" value="{{old('homeLink')}}">
                        </div>

                        <div class="form-group">
                            <label for="page">Page : </label>
                            <input type="text" name="page" class="form-control" value="{{old('page')}}">
                        </div>

                        <button type="submit" class="btn mt-4" style="background-color: #AFE3D0">Ajouter</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection