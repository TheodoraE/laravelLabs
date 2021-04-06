@extends('adminlte::page')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h1 class="mb-5">Commentaires</h1>

                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Image</th>
                            <th scope="col">Name</th>
                            <th scope="col">Firstname</th>
                            <th scope="col">Email</th>
                            <th scope="col">Post</th>
                            <th scope="col">Comment</th>
                            <th scope="col">Date</th>
                            {{-- <th scope="col"> </th> --}}
                            <th scope="col"> </th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($commentsOK as $comment)
                                <tr>
                                    <th scope="row">{{$comment->id}}</th>
                                    <td>
                                        <img src="{{asset('storage/img/'.$comment->url)}}" height="25px" alt="">
                                    </td>
                                    <td>{{$comment->name}}</td>
                                    <td>{{$comment->firstname}}</td>
                                    <td>{{$comment->email}}</td>
                                    <td>{{$comment->posts->title}}</td>
                                    <td>{{$comment->comment}}</td>
                                    <td>{{$comment->date}}</td>
                                    {{-- <td>
                                        <a href="/comments/{{$comment->id}}/edit" class="btn" style="background-color: #F7D3BB">EDIT</a>
                                    </td> --}}
                                    <td>
                                        <form action="/comments/{{$comment->id}}" method="POST">
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

        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h1 class="mb-5">Commentaires en attente de validation</h1>

                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Image</th>
                            <th scope="col">Name</th>
                            <th scope="col">Firstname</th>
                            <th scope="col">Email</th>
                            <th scope="col">Post</th>
                            <th scope="col">Comment</th>
                            <th scope="col">Date</th>
                            <th scope="col"> </th>
                            <th scope="col"> </th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($comments as $comment)
                                @if ($comment->check == 0)
                                    <tr>
                                        <th scope="row">{{$comment->id}}</th>
                                        <td>
                                            <img src="{{asset('storage/img/'.$comment->url)}}" height="25px" alt="">
                                        </td>
                                        <td>{{$comment->name}}</td>
                                        <td>{{$comment->firstname}}</td>
                                        <td>{{$comment->email}}</td>
                                        <td>{{$comment->posts->title}}</td>
                                        <td>{{$comment->comment}}</td>
                                        <td>{{$comment->date}}</td>
                                        <td>
                                            <a href="/validerComment/{{$comment->id}}" class="btn" style="background-color: #AFE3D0">Valider</a>
                                          </td>
                                        <td>
                                            <form action="/comments/{{$comment->id}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn" style="background-color: #F7959D">DELETE</button>
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
@endsection