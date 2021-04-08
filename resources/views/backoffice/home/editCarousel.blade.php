@extends('adminlte::page')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h1 class="mb-5">Modifier l'image</h1>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="/homeCarousels/{{$edit->id}}" method="POST" enctype="multipart/form-data" class="m-3">
                        @csrf
                        @method('PATCH')
                        
                        <div class="form-group">
                            <label for="url">Image : </label> <br>
                            <img src="{{asset('storage/img/'.$edit->url)}}" height="200px" alt=""> <br> <br>

                            <input type="file" name="url" id="url">
                        </div>

                        <div class="form-group">
                            <label for="order">Order :</label>
                            <input type="number" name="order" id="" value="{{old('order') ? old('order') : $edit->order}}">
                        </div>

                        <button type="submit" class="btn mt-4" style="background-color: #F7D3BB">Enregistrer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection