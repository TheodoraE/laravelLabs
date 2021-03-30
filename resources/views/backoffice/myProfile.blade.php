@extends('adminlte::page')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h1 class="mb-5">My profile</h1>
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nom</th>
                            <th scope="col">Email</th>
                            {{-- <th scope="col"> </th> --}}
                            <th scope="col"> </th>
                          </tr>
                        </thead>
                        <tbody>
                            @auth
                                <tr>
                                    <th scope="row">{{Auth::user()->id}}</th>
                                    <td>{{Auth::user()->name}}</td>
                                    <td>{{Auth::user()->email}}</td>
                                    {{-- <td>{{$user->}}</td> --}}
                                    <td>
                                        <a href="/users/{{Auth::user()->id}}/edit" class="btn" style="background-color: #F7D3BB">EDIT</a>
                                    </td>
                                </tr>
                            @endauth
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
@endsection