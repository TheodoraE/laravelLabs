@extends('adminlte::page')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h1 class="mb-5">Contact Form Address</h1>

                    <a href="/contactFormAddress/create" class="btn mb-3" style="background-color: #C1C8E3">Ajouter une adresse</a>

                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Address 1</th>
                            <th scope="col">Address 2</th>
                            <th scope="col"> </th>
                            <th scope="col"> </th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($addresses as $address)
                            <tr>
                                <th scope="row">{{$address->id}}</th>
                                <td>{{$address->address1}}</td>
                                <td>{{$address->address2}}</td>
                                <td>
                                    <a href="/contactFormAddress/{{$address->id}}/edit" class="btn" style="background-color: #F7D3BB">EDIT</a>
                                </td>
                                <td>
                                    <form action="/contactFormAddress/{{$address->id}}" method="POST">
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