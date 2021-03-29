@extends('adminlte::page')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h1 class="mb-5">Modifier le footer</h1>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="/footers/{{$edit->id}}" method="POST" class="m-3">
                        @csrf
                        @method('PATCH')

                        <div class="form-group">
                            <label for="copyright">Copyright : </label>
                            <input type="text" name="copyright" class="form-control" value="{{old('copyright') ? old('copyright') : $edit->copyright}}">
                        </div>

                        <div class="form-group">
                            <label for="credits">Credits : </label>
                            <input type="text" name="credits" class="form-control" value="{{old('credits') ? old('credits') : $edit->credits}}">
                        </div>

                        <div class="form-group">
                            <label for="creditsLink">CreditsLink : </label>
                            <input type="text" name="creditsLink" class="form-control" value="{{old('creditsLink') ? old('creditsLink') : $edit->creditsLink}}">
                        </div>

                        <button type="submit" class="btn mt-4" style="background-color: #F7D3BB">Enregistrer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection