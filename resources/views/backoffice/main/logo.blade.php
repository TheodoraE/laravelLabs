@extends('adminlte::page')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h1>Logo</h1>
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Logo</th>
                            <th scope="col"> </th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($logos as $logo)
                            <tr>
                                <th scope="row">{{$logo->id}}</th>
                                <td>{{$logo->name}}</td>
                                <td>
                                    <img src="{{'storage/img/'.$logo->url}}" alt="" height="50px">
                                </td>
                                <td>
                                    <a href="/logos/{{$logo->id}}/edit" class="btn btn-warning">EDIT</a>
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