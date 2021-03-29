@extends('adminlte::page')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h1 class="mb-5">Modifier le header</h1>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="/pageHeaders/{{$edit->id}}" method="POST" class="m-3">
                        @csrf
                        @method('PATCH')

                        <div class="form-group">
                            <label for="home">Home : </label>
                            <input type="text" name="home" class="form-control" value="{{old('home') ? old('home') : $edit->home}}">
                        </div>
                        
                        <div class="form-group">
                            <label for="homeLink">Home link : </label>
                            <input type="text" name="homeLink" class="form-control" value="{{old('homeLink') ? old('homeLink') : $edit->homeLink}}">
                        </div>

                        <div class="form-group">
                            <label for="page">Page : </label>
                            <input type="text" name="page" class="form-control" value="{{old('page') ? old('page') : $edit->page}}">
                        </div>

                        <button type="submit" class="btn mt-4" style="background-color: #F7D3BB">Enregistrer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection