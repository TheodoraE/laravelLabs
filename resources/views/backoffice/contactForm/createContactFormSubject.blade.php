@extends('adminlte::page')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h1 class="mb-5">Ajouter un sujet</h1>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="/contactFormSubjects" method="POST" class="m-3">
                        @csrf
                        
                        <div class="form-group">
                            <label for="subject">Sujet : </label>
                            <input type="text" name="subject" class="form-control" value="{{old('subject')}}">
                        </div>

                        <button type="submit" class="btn mt-4" style="background-color: #AFE3D0">Ajouter</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection