@extends('adminlte::page')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h1 class="mb-5">Modifier la catégorie</h1>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="/categories/{{$edit->id}}" method="POST" class="m-3">
                        @csrf
                        @method('PATCH')
                        
                        <div class="form-group">
                            <label for="category">Category : </label>
                            <input type="text" name="category" class="form-control" value="{{old('category') ? old('category') : $edit->category}}">
                        </div>

                        <button type="submit" class="btn mt-4" style="background-color: #F7D3BB">Enregistrer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection