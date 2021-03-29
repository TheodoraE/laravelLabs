@extends('adminlte::page')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h1 class="mb-5">Page Header</h1>

                    <a href="/pageHeaders/create" class="btn mb-3" style="background-color: #C1C8E3">Ajouter un header</a>

                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Home</th>
                            <th scope="col">Home Link</th>
                            <th scope="col">Page</th>
                            <th scope="col"> </th>
                            <th scope="col"> </th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($pageHeaders as $header)
                            <tr>
                                <th scope="row">{{$header->id}}</th>
                                <td>{{$header->home}}</td>
                                <td>{{$header->homeLink}}</td>
                                <td>{{$header->page}}</td>
                                <td>
                                    <a href="/pageHeaders/{{$header->id}}/edit" class="btn" style="background-color: #F7D3BB">EDIT</a>
                                </td>
                                <td>
                                  <form action="/pageHeaders/{{$header->id}}" method="POST">
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