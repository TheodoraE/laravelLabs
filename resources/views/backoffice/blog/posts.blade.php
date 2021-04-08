@extends('adminlte::page')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h1 class="mb-5">Publications</h1>

                    <a href="/posts/create" class="btn" style="background-color: #C1C8E3">Ajouter une publication</a>
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Image</th>
                            <th scope="col">Date</th>
                            <th scope="col">Title</th>
                            <th scope="col">Post</th>
                            <th scope="col">Category</th>
                            <th scope="col">Author</th>
                            <th scope="col"> </th>
                            <th scope="col"> </th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($postsOK as $post)
                                
                                <tr>
                                    <th scope="row">{{$post->id}}</th>
                                    <td>
                                        <img src="{{asset('storage/img/'.$post->url)}}" height="50px" alt="">
                                    </td>

                                    @if ($post->created_at == NULL)
                                        <td>03 April 2017</td>
                                    @else
                                        <td>{{$post->created_at->format("d").' '.$post->created_at->format("m y")}}</td>
                                    @endif

                                    <td>{{$post->title}}</td>
                                    <td>{!!Str::limit($post->text, 318)!!}</td>
                                    <td>{{$post->categories->category}}</td>
                                    <td>{{$post->users->firstname.' '.$post->users->name.', '.$post->users->positions->functionlink}}</td>

                                    @can("editDelete", $post)
                                        <td>
                                            <a href="/posts/{{$post->id}}/edit" class="btn" style="background-color: #F7D3BB">EDIT</a>
                                        </td>
                                        <td>
                                            <form action="/posts/{{$post->id}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn" style="background-color: #F7959D">DELETE</button>
                                            </form>
                                        </td>
                                    @endcan

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        @can("isWebMaster")
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h1 class="mb-5">Publications en attente de validation</h1>

                        <div style="width: 99%; height: 100%; float: left; height: auto; overflow-x: auto; overflow-y: hidden; white-space: nowrap;">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Post</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Author</th>
                                    <th scope="col"> </th>
                                    <th scope="col"> </th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach ($postsNO as $post)
                                        
                                        <tr>
                                            <th scope="row">{{$post->id}}</th>
                                            <td>
                                                <img src="{{asset('storage/img/'.$post->url)}}" height="25px" alt="">
                                            </td>

                                            @if ($post->created_at == NULL)
                                                <td>03 April 2017</td>
                                            @else
                                                <td>{{$post->created_at->format("d").' '.$post->created_at->format("m y")}}</td>
                                            @endif
                                            
                                            <td>{{$post->title}}</td>
                                            <td>{!!$post->text!!}</td>
                                            <td>{{$post->categories->category}}</td>
                                            <td>{{$post->users->firstname}}</td>
                                            <td>
                                                <a href="/validerPost/{{$post->id}}" class="btn" style="background-color: #AFE3D0">Valider</a>
                                            </td>
                                            <td>
                                                <form action="/posts/{{$post->id}}" method="POST">
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
        @endcan
    </div>
@endsection