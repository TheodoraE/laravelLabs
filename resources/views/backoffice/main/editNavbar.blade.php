@extends('adminlte::page')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h1 class="mb-5">Ajouter un lien navbar</h1>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="/navbars/{{$edit->id}}" method="POST" class="m-3">
                        @csrf
                        
                        <div class="form-group">
                            <label for="link">Link : </label>
                            <input type="text" name="link" class="form-control" value="{{old('link') ? old('link') : $edit->link}}">
                        </div>

                        <div class="form-group">
                            <label for="page">Page : </label>
                            <input type="text" name="page" class="form-control" value="{{old('page') ? old('page') : $edit->page}}">
                        </div>

                        <button type="submit" class="btn btn-warning mt-4">Ajouter</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection