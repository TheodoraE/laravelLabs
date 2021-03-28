@extends('adminlte::page')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h1 class="mb-5">Ajouter une adresse</h1>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="/contactFormAddress" method="POST" class="m-3">
                        @csrf
                        
                        <div class="form-group">
                            <label for="address1">Address 1 : </label>
                            <input type="text" name="address1" class="form-control" value="{{old('address1')}}">
                        </div>

                        <div class="form-group">
                            <label for="address2">Address 2 : </label>
                            <input type="text" name="address2" class="form-control" value="{{old('address2')}}">
                        </div>

                        <button type="submit" class="btn btn-success mt-4">Ajouter</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection