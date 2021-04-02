@extends('adminlte::page')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h1 class="mb-5">Modifier la newsletter</h1>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="/newsletter/{{$edit->id}}" method="POST">
                        @csrf
                        @method('PATCH')
                        
                        <div class="form-group">
                            <label for="title">Title : </label>
                            <input type="text" name="title" class="form-control" value="{{old('title') ? old('title') : $edit->title}}">
                        </div>
                        <div class="form-group">
                            <label for="placeholder">Placeholder : </label>
                            <input type="text" name="placeholder" class="form-control" value="{{old('placeholder') ? old('placeholder') : $edit->placeholder}}">
                        </div>
                        <div class="form-group">
                            <label for="button">Button : </label>
                            <input type="text" name="button" class="form-control" value="{{old('button') ? old('button') : $edit->button}}">
                        </div>

                        <button type="submit" class="btn" style="background-color: #F7D3BB">Enregistrer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection