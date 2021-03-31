@extends('adminlte::page')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h1 class="mb-3">Home Services Title</h1>

                    {{-- <a href="/homeServicesTitle/create" class="btn mb-3" style="background-color: #C1C8E3">Ajouter un titre</a> --}}

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
                          @foreach ($homeServicesTitle as $title)
                            <tr>
                                <th scope="row">{{$title->id}}</th>
                                <td>{{$title->title}}</td>
                                <td>
                                    <a href="/homeServicesTitle/{{$title->id}}/edit" class="btn" style="background-color: #F7D3BB">EDIT</a>
                                </td>
                                {{-- <td>
                                  <form action="/homeServicesTitle/{{$title->id}}" method="POST">
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
                    <h1 class="mb-3">Home Services Button</h1>

                    <a href="/homeServicesButton/create" class="btn mb-3" style="background-color: #C1C8E3">Ajouter un bouton</a>

                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Button</th>
                            <th scope="col">Link</th>
                            <th scope="col"> </th>
                            <th scope="col"> </th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($homeServicesButton as $button)
                            <tr>
                                <th scope="row">{{$button->id}}</th>
                                <td>{{$button->button}}</td>
                                <td>{{$button->link}}</td>
                                <td>
                                    <a href="/homeServicesButton/{{$button->id}}/edit" class="btn" style="background-color: #F7D3BB">EDIT</a>
                                </td>
                                <td>
                                  <form action="/homeServicesButton/{{$button->id}}" method="POST">
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