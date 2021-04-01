@extends('adminlte::page')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h1 class="mb-5">Modifier l'adresse</h1>
                    
                    <form action="/contactMap/{{$edit->id}}" method="POST">
                        @csrf
                        @method('PATCH')

                        <div class="form-group">
                            <label for="address">New address :</label>
                            <input type="text" class="form-control" name="address" value="{{old('address') ? old('address') : $edit->address}}">
                        </div>

                        <button type="submit" class="btn" style="background-color: #F7D3BB">Enregistrer</button>
                    </form>
                               
            </div>
        </div>
    </div>
@endsection