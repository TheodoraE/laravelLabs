@extends('adminlte::page')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h1 class="mb-3">Title</h1>

                    {{-- <a href="/homeAboutTitle/create" class="btn mb-3" style="background-color: #C1C8E3">Ajouter une card</a> --}}

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
                          @foreach ($homeAboutTitle as $content)
                            <tr>
                                <th scope="row">{{$content->id}}</th>
                                <td>{{$content->title}}</td>
                                <td>
                                    <a href="/homeAboutTitle/{{$content->id}}/edit" class="btn" style="background-color: #F7D3BB">EDIT</a>
                                </td>
                                {{-- <td>
                                  <form action="/homeAboutTitle/{{$content->id}}" method="POST">
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
                    <h1 class="mb-3">Content</h1>

                    {{-- <a href="/homeAboutContent/create" class="btn mb-3" style="background-color: #C1C8E3">Ajouter un texte</a> --}}

                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Text</th>
                            <th scope="col"> </th>
                            {{-- <th scope="col"> </th> --}}
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($homeAboutContent as $content)
                            <tr>
                                <th scope="row">{{$content->id}}</th>
                                <td>{{$content->text}}</td>
                                <td>
                                    <a href="/homeAboutContent/{{$content->id}}/edit" class="btn" style="background-color: #F7D3BB">EDIT</a>
                                </td>
                                {{-- <td>
                                  <form action="/homeAboutContent/{{$content->id}}" method="POST">
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
                    <h1 class="mb-3">Button</h1>

                    <a href="/homeAboutButton/create" class="btn mb-3" style="background-color: #C1C8E3">Ajouter un bouton</a>

                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Link</th>
                            <th scope="col">Button</th>
                            <th scope="col"> </th>
                            <th scope="col"> </th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($homeAboutButton as $button)
                            <tr>
                                <th scope="row">{{$button->id}}</th>
                                <td>{{$button->link}}</td>
                                <td>{{$button->button}}</td>
                                <td>
                                    <a href="/homeAboutButton/{{$button->id}}/edit" class="btn" style="background-color: #F7D3BB">EDIT</a>
                                </td>
                                <td>
                                  <form action="/homeAboutButton/{{$button->id}}" method="POST">
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