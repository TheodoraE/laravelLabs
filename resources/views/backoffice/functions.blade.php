@extends('adminlte::page')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h1 class="mb-5">Functions</h1>

                    <a href="/functions/create" class="btn mb-3" style="background-color: #C1C8E3">Ajouter une fonction</a>

                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Image</th>
                            <th scope="col"> </th>
                            <th scope="col"> </th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($functions as $function)
                                <tr>
                                    <th scope="row">{{$function->id}}</th>
                                    <td>{{$function->function}}</td>
                                    <td>
                                        <a href="/functions/{{$function->id}}/edit" class="btn" style="background-color: #F7D3BB">EDIT</a>
                                    </td>
                                    <td>
                                        <form action="/functions/{{$function->id}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn" style="background-color: #F7959D">DELETE</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
@endsection