@extends('adminlte::page')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h1 class="mb-5">Service Card</h1>

                    <a href="/servicesSection/create" class="btn mb-3" style="background-color: #C1C8E3">Ajouter une card</a>

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
                          @foreach ($servicesCard as $card)
                            <tr>
                                <th scope="row">{{$card->id}}</th>
                                <td>
                                  <i class="{{$card->classIcon}}" style="font-size: 30px"></i>
                                </td>
                                <td>{{$card->title}}</td>
                                <td>{{$card->text}}</td>
                                <td>
                                    <a href="/servicesSection/{{$card->id}}/edit" class="btn" style="background-color: #F7D3BB">EDIT</a>
                                </td>
                                <td>
                                  <form action="/servicesSection/{{$card->id}}" method="POST">
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