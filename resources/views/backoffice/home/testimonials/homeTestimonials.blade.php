@extends('adminlte::page')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h1 class="mb-5">Testimonials Title</h1>

                    {{-- <a href="/homeTestimonialsTitle/create" class="btn mb-3" style="background-color: #C1C8E3">Ajouter un titre</a> --}}

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
                          @foreach ($testimonialsTitle as $title)
                            <tr>
                                <th scope="row">{{$title->id}}</th>
                                <td>{{$title->title}}</td>
                                <td>
                                    <a href="/homeTestimonialsTitle/{{$title->id}}/edit" class="btn" style="background-color: #F7D3BB">EDIT</a>
                                </td>
                                {{-- <td>
                                  <form action="/homeTestimonialsTitle/{{$title->id}}" method="POST">
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
                    <h1 class="mb-5">Testimonials Cards</h1>

                    <a href="/homeTestimonialsCards/create" class="btn mb-3" style="background-color: #C1C8E3">Ajouter un témoignage</a>

                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Decoration</th>
                            <th scope="col">Text</th>
                            <th scope="col">Image</th>
                            <th scope="col">Name</th>
                            <th scope="col">Function</th>
                            <th scope="col"> </th>
                            <th scope="col"> </th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($testimonialsCards as $card)
                            <tr>
                                <th scope="row">{{$card->id}}</th>
                                <td>{{$card->span}}</td>
                                <td>{{$card->text}}</td>
                                <td>
                                  <img src="{{asset('storage/img/'.$card->url)}}" alt="" height="50px">
                                </td>
                                <td>{{$card->name}}</td>
                                <td>{{$card->function}}</td>                              
                                <td>
                                    <a href="/homeTestimonialsCards/{{$card->id}}/edit" class="btn" style="background-color: #F7D3BB">EDIT</a>
                                </td>
                                <td>
                                  <form action="/homeTestimonialsCards/{{$card->id}}" method="POST">
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