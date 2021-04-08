@extends('adminlte::page')

@section('content')
    <div class="row">
        <div class="col-12">
            @if ($errors->any()) 
                <div class="alert alert-danger mt-5"> 
                    <ul> 
                        @foreach ($errors->all() as $error) 
                        <li>{{ $error }}</li> 
                        @endforeach 
                    </ul> 
                </div> 
            @endif
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h1 class="mb-5">My profile</h1>
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Image</th>
                            <th scope="col">Name</th>
                            <th scope="col">Firstname</th>
                            <th scope="col">Function</th>
                            <th scope="col">Email</th>
                            <th scope="col">Description</th>
                            <th scope="col"> </th>
                          </tr>
                        </thead>
                        <tbody>
                            @auth
                                <tr>
                                    <th scope="row">{{Auth::user()->id}}</th>
                                    <td>
                                        <img src="{{asset('storage/img/'.Auth::user()->url)}}" alt="" height="50px">
                                    </td>
                                    <td>{{Auth::user()->name}}</td>
                                    <td>{{Auth::user()->firstname}}</td>
                                    <td>{{Auth::user()->positions->function}}</td>
                                    <td>{{Auth::user()->email}}</td>
                                    <td>{{Auth::user()->description}}</td>
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