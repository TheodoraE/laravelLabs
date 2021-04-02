@extends('adminlte::page')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h1 class="mb-5">Service Features Title</h1>

                    {{-- <a href="/servicesFeaturesTitle/create" class="btn mb-3" style="background-color: #C1C8E3">Ajouter un titre</a> --}}

                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col"> </th>
                            <th scope="col"> </th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($servicesFeaturesTitle as $title)
                            <tr>
                              <th scope="row">{{$title->id}}</th>
                              <td>{{$title->title}}</td>
                              <td>
                                  <a href="/servicesFeaturesTitle/{{$title->id}}/edit" class="btn" style="background-color: #F7D3BB">EDIT</a>
                              </td>
                              {{-- <td>
                                <form action="/servicesFeaturesTitle/{{$title->id}}" method="POST">
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
                    <h1 class="mb-5">Service Device</h1>

                    {{-- <a href="/servicesDevices/create" class="btn mb-3" style="background-color: #C1C8E3">Ajouter une image</a> --}}

                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Image</th>
                            <th scope="col"> </th>
                            <th scope="col"> </th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($servicesDevices as $device)
                            <tr>
                              <th scope="row">{{$device->id}}</th>
                              <td>
                                  <img src="{{'storage/img/'.$device->url}}" alt="" height="200px">
                              </td>
                              <td>
                                  <a href="/servicesDevices/{{$device->id}}/edit" class="btn" style="background-color: #F7D3BB">EDIT</a>
                              </td>
                              {{-- <td>
                                <form action="/servicesDevices/{{$device->id}}" method="POST">
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
                    <h1 class="mb-5">Service Features Button</h1>

                    {{-- <a href="/servicesFeaturesButton/create" class="btn mb-3" style="background-color: #C1C8E3">Ajouter un button</a> --}}

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
                          @foreach ($servicesfeaturesButton as $button)
                            <tr>
                              <th scope="row">{{$button->id}}</th>
                              <td>{{$button->button}}</td>
                              <td>{{$button->link}}</td>
                              <td>
                                  <a href="/servicesFeaturesButton/{{$button->id}}/edit" class="btn" style="background-color: #F7D3BB">EDIT</a>
                              </td>
                              {{-- <td>
                                <form action="/servicesFeaturesButton/{{$button->id}}" method="POST">
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