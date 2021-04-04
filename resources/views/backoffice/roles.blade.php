@extends('adminlte::page')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h1 class="mb-5">Roles</h1>

                    <a href="/roles/create" class="btn mb-3" style="background-color: #C1C8E3">Ajouter une fonction</a>

                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">role</th>
                            <th scope="col">User</th>
                            <th scope="col"> </th>
                            <th scope="col"> </th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($roles as $role)
                                <tr>
                                    <th scope="row">{{$role->id}}</th>
                                    <td>{{$role->role}}</td>
                                    <td>Le link ne fonctionne pas T.T</td>
                                    {{-- <td>{{$role->users->name}}</td> --}}
                                    <td>
                                        <a href="/roles/{{$role->id}}/edit" class="btn" style="background-color: #F7D3BB">EDIT</a>
                                    </td>
                                    <td>
                                        <form action="/roles/{{$role->id}}" method="POST">
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