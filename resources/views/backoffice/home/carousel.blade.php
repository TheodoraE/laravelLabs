@extends('adminlte::page')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h1 class="mb-5">Carousel</h1>

                    <a href="/homeCarousels/create" class="btn mb-3" style="background-color: #C1C8E3">Ajouter une image</a>

                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Image</th>
                            <th scope="col">Order</th>
                            <th scope="col"> </th>
                            <th scope="col"> </th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($homeCarousels as $carousel)
                                <tr>
                                    <th scope="row">{{$carousel->id}}</th>
                                    <td>
                                        <img src="{{asset('storage/img/'.$carousel->url)}}" height="100px" alt="">
                                    </td>
                                    <td>{{$carousel->order}}</td>
                                    <td>
                                        <a href="/homeCarousels/{{$carousel->id}}/edit" class="btn" style="background-color: #F7D3BB">EDIT</a>
                                    </td>
                                    <td>
                                        <form action="/homeCarousels/{{$carousel->id}}" method="POST">
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