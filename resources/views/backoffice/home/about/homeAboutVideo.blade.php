@extends('adminlte::page')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h1 class="mb-5">Home About Video</h1>

                    {{-- <a href="/homeAboutVideo/create" class="btn mb-3" style="background-color: #C1C8E3">Ajouter une video</a> --}}

                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Image</th>
                            <th scope="col">Youtube Link</th>
                            {{-- <th scope="col"> </th> --}}
                            <th scope="col"> </th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($homeAboutVideo as $video)
                            <tr>
                                <th scope="row">{{$video->id}}</th>
                                <td>
                                  <img src="{{asset('storage/img/'.$video->url)}}" alt="" height="150px">
                                </td>
                                <td>{{$video->youtubeLink}}</td>
                                <td>
                                    <a href="/homeAboutVideo/{{$video->id}}/edit" class="btn" style="background-color: #F7D3BB">EDIT</a>
                                </td>
                                {{-- <td>
                                  <form action="/homeAboutVideo/{{$card->id}}" method="POST">
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
    </div>
@endsection