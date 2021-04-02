@extends('adminlte::page')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h1 class="mb-5">Service Features Cards</h1>

                    <a href="/servicesFeaturesCards/create" class="btn mb-3" style="background-color: #C1C8E3">Ajouter une card</a>

                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Icon</th>
                            <th scope="col">Title</th>
                            <th scope="col">Text</th>
                            <th scope="col"> </th>
                            <th scope="col"> </th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($servicesFeaturesCards as $card)
                            <tr>
                              <th scope="row">{{$card->id}}</th>
                              <td>
                                  <i class="{{$card->icons->icon}}" style="font-size: 30px"></i>
                              </td>
                              <td>{{$card->title}}</td>
                              <td>{{$card->text}}</td>
                              <td>
                                  <a href="/servicesFeaturesCards/{{$card->id}}/edit" class="btn" style="background-color: #F7D3BB">EDIT</a>
                              </td>
                              <td>
                                <form action="/servicesFeaturesCards/{{$card->id}}" method="POST">
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