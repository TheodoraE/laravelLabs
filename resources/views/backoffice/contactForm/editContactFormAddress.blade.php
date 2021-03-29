@extends('adminlte::page')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h1 class="mb-5">Modifier l'adresse</h1>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="/contactFormAddress/{{$edit->id}}" method="POST" class="m-3">
                        @csrf
                        @method('PATCH')
                        
                        <div class="form-group">
                            <label for="address1">Address 1 : </label>
                            <input type="text" name="address1" class="form-control" value="{{old('address1') ? old('address1') : $edit->address1}}">
                        </div>

                        <div class="form-group">
                            <label for="address2">Address 2 : </label>
                            <input type="text" name="address2" class="form-control" value="{{old('address2') ? old('address2') : $edit->address2}}">
                        </div>

                        <button type="submit" class="btn mt-4" style="background-color: #F7D3BB">Enregistrer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection