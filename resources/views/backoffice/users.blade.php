@extends('adminlte::page')

@section('content')
    <div class="row">
        <div class="col-12">
          <div class="card">
              <div class="card-body">
                  @if (count($userOK) <= 1)
                      <h1 class="mb-5">{{count($userOK)}} Utilisateur</h1>
                  @else
                      <h1 class="mb-5">{{count($userOK)}} Utilisateurs</h1>
                  @endif

                  {{-- <div style="width: 99%; height: 100%; float: left; height: auto; overflow-x: auto; overflow-y: hidden; white-space: nowrap;"> --}}
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Image</th>
                            <th scope="col">Name</th>
                            <th scope="col">Firstname</th>
                            <th scope="col">Function</th>
                            <th scope="col">Role</th>
                            <th scope="col">Email</th>
                            <th scope="col">Description</th>
                            <th scope="col"> </th>
                            <th scope="col"> </th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($users as $user)
                            @if ($user->check == 1)
                              <tr>
                                <th scope="row">{{$user->id}}</th>
                                <td>
                                    <img src="{{asset('storage/img/'.$user->url)}}" alt="" height="50px">
                                </td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->firstname}}</td>
                                <td>{{$user->positions->function}}</td>
                                <td>{{$user->roles->role}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->description}}</td>
                                
                                @if ($user->role_id == 1)
                                  @can('isAdmin')
                                    <td>
                                      <a href="/users/{{$user->id}}/edit" class="btn" style="background-color: #F7D3BB">EDIT</a>
                                    </td>
                                    <td>
                                      <form action="/users/{{$user->id}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn" style="background-color: #F7959D">DELETE</button>
                                      </form>
                                    </td>
                                  @endcan
                                @elseif ($user->role_id != 1)
                                  @can('isWebMaster')
                                      <td>
                                        <a href="/users/{{$user->id}}/edit" class="btn" style="background-color: #F7D3BB">EDIT</a>
                                      </td>
                                      <td>
                                        <form action="/users/{{$user->id}}" method="POST">
                                          @csrf
                                          @method('DELETE')
                                          <button class="btn" style="background-color: #F7959D">DELETE</button>
                                        </form>
                                      </td>
                                    @endcan
                                @endif
                              </tr>
                            @endif
                          @endforeach
                        </tbody>
                    </table>
                  {{-- </div> --}}
              </div>
          </div>
        </div>

        <div class="col-12">
            <div class="card">
                <div class="card-body">

                  <h1 class="mb-5">Les utilisateurs en attente de validation</h1>

                  <div style="width: 99%; height: 100%; float: left; height: auto; overflow-x: auto; overflow-y: hidden; white-space: nowrap;">
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Image</th>
                          <th scope="col">Name</th>
                          <th scope="col">Firstname</th>
                          <th scope="col">Function</th>
                          <th scope="col">Role</th>
                          <th scope="col">Email</th>
                          <th scope="col">Description</th>
                          <th scope="col"> </th>
                          <th scope="col"> </th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($users as $user)
                          @if ($user->check == 0)
                            <tr>
                              <th scope="row">{{$user->id}}</th>
                              <td>
                                  <img src="{{asset('storage/img/'.$user->url)}}" alt="" height="50px">
                              </td>
                              <td>{{$user->name}}</td>
                              <td>{{$user->firstname}}</td>
                              <td>{{$user->positions->function}}</td>
                              <td>{{$user->roles->role}}</td>
                              <td>{{$user->email}}</td>
                              <td>{{$user->description}}</td>
                              <td>
                                <a href="/valider/{{$user->id}}" class="btn" style="background-color: #AFE3D0">Valider l'inscription</a>
                              </td>
                              <td>
                                <form action="/users/{{$user->id}}" method="POST">
                                  @csrf
                                  @method('DELETE')
                                  <button class="btn" style="background-color: #F7959D">Désapprouver</button>
                                </form>
                              </td>
                            </tr>
                          @endif
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
            </div>
        </div>
    </div>
@endsection