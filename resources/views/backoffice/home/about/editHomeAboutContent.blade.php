@extends('adminlte::page')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h1 class="mb-5">Modifier le texte</h1>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="/homeAboutContent/{{$edit->id}}" method="POST" class="m-3">
                        @csrf
                        @method(('PATCH'))
                        
                        <div class="form-group">
                            <label for="text">Text : </label>
                            <input type="text" name="text" class="form-control" value="{{old('text') ? old('text') : $edit->text}}">
                        </div>

                        <button type="submit" class="btn mt-4" style="background-color: #F7D3BB">Modifier</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection