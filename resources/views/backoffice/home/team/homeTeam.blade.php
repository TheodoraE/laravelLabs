@extends('adminlte::page')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h1 class="mb-3">Home Team Title</h1>

                    {{-- <a href="/homeTeamTitle/create" class="btn mb-3" style="background-color: #C1C8E3">Ajouter un titre</a> --}}

                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            {{-- <th scope="col"> </th> --}}
                            <th scope="col"> </th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($homeTeamTitle as $title)
                            <tr>
                                <th scope="row">{{$title->id}}</th>
                                <td>{{$title->title}}</td>
                                <td>
                                    <a href="/homeTeamTitle/{{$title->id}}/edit" class="btn" style="background-color: #F7D3BB">EDIT</a>
                                </td>
                                {{-- <td>
                                  <form action="/homeTeamTitle/{{$title->id}}" method="POST">
                                      @csrf
                                      @method('DELETE')
                                      <button type="submit" class="btn" style="background-color: #F7959D">DELETE</button>
                                  </form>
                              </td> --}}
                            </tr>
                          @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>

        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h1 class="mb-3">Home Team Card</h1>

                    {{-- <a href="/homeTeamCard/create" class="btn mb-3" style="background-color: #C1C8E3">Ajouter une card</a> --}}

                    {{-- <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Image</th>
                            <th scope="col">Name</th>
                            <th scope="col">Function</th>
                            <th scope="col"> </th>
                            <th scope="col"> </th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($homeTeamCards as $card)
                            <tr>
                                <th scope="row">{{$card->id}}</th>
                                <td>
                                    <img src="{{asset('storage/img/'.$card->url)}}" alt="" height="80px">
                                </td>
                                <td>{{$card->name}}</td>
                                <td>{{$card->function}}</td>
                                <td>
                                    <a href="/homeTeamCard/{{$card->id}}/edit" class="btn" style="background-color: #F7D3BB">EDIT</a>
                                </td>
                                <td>
                                  <form action="/homeTeamCard/{{$card->id}}" method="POST">
                                      @csrf
                                      @method('DELETE')
                                      <button type="submit" class="btn" style="background-color: #F7959D">DELETE</button>
                                  </form>
                                </td>
                            </tr>
                          @endforeach
                        </tbody>
                      </table> --}}
                </div>
            </div>
        </div>
    </div>
@endsection