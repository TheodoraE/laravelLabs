@extends('adminlte::page')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h1 class="mb-5">Categories </h1>

                    <a href="/categories/create" class="btn" style="background-color: #C1C8E3">Ajouter une categorie</a>

                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Category</th>
                            <th scope="col"> </th>
                            <th scope="col"> </th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                                <tr>
                                    <th scope="row">{{$category->id}}</th>
                                    <td>{{$category->category}}</td>
                                    <td>
                                        <a href="/categories/{{$category->id}}/edit" class="btn" style="background-color: #F7D3BB">EDIT</a>
                                    </td>
                                    <td>
                                        <form action="/categories/{{$category->id}}" method="POST">
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