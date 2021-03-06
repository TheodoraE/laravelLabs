@extends('adminlte::page')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h1 class="mb-5">Modifier la card</h1>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="/servicesFeaturesCards/{{$edit->id}}" method="POST" class="m-3">
                        @csrf
                        @method('PATCH')

                        <div class="form-group">
                            <label for="icon_id">Icon : </label>
                            <div class="row d-flex my-3">
                                @foreach ($icons as $icon)
                                    @if ($icon->id == $edit->icon_id)
                                        <div class="input-group my-2 col">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <input type="radio" aria-label="Radio button for following text input" value="{{$icon->id}}" name="icon_id" checked>
                                                </div>
                                            </div>
                                            <i class="{{$icon->icon}}" style="font-size: 40px"></i>
                                        </div>
                                    @else
                                        <div class="input-group my-2 col">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <input type="radio" aria-label="Radio button for following text input" value="{{$icon->id}}" name="icon_id">
                                                </div>
                                            </div>
                                            <i class="{{$icon->icon}}" style="font-size: 40px"></i>
                                        </div>
                                    @endif
                                    
                                @endforeach
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="title">Title : </label>
                            <input type="text" name="title" class="form-control" value="{{old('title') ? old('title') : $edit->title}}">
                        </div>

                        <div class="form-group">
                            <label for="text">Text : </label>
                            <input type="text" name="text" class="form-control" value="{{old('text') ? old('text') : $edit->text}}">
                        </div>

                        <button type="submit" class="btn mt-4" style="background-color: #F7D3BB">Enregistrer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection