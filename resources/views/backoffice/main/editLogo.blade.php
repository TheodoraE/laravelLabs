@extends('adminlte::page')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h1 class="mb-5">Modifier le logo</h1>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="/logos/{{$edit->id}}" method="POST" enctype="multipart/form-data" class="m-3">
                        @csrf
                        @method('PATCH')

                        <div class="form-group w-50">
                            <label for="name">Nom : </label>
                            <input type="text" name="name" class="form-control" value="{{old('name') ? old('name') : $edit->name}}">
                        </div>

                        <div class="form-group">
                            <input type="file" name="url" id="">
                        </div>

                        <button type="submit" class="btn mt-4" style="background-color: #F7D3BB">Enregistrer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection