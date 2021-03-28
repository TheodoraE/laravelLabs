@extends('adminlte::page')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h1 class="mb-5">Navbar</h1>

                    <a href="/navbars/create" class="btn btn-info mb-3">Ajouter un lien</a>

                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Link</th>
                            <th scope="col">Page</th>
                            <th scope="col"> </th>
                            <th scope="col"> </th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($navbars as $navbar)
                            <tr>
                                <th scope="row">{{$navbar->id}}</th>
                                <td>{{$navbar->link}}</td>
                                <td>{{$navbar->page}}</td>
                                <td>
                                    <a href="/navbars/{{$navbar->id}}/edit" class="btn btn-warning">EDIT</a>
                                </td>
                                <td>
                                  <form action="/navbars/{{$navbar->id}}" method="POST">
                                      @csrf
                                      @method('DELETE')
                                      <button type="submit" class="btn btn-danger">DELETE</button>
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