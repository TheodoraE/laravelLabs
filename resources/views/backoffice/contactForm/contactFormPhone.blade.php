@extends('adminlte::page')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h1 class="mb-5">Contact Form Phone</h1>

                    <a href="/contactFormPhones/create" class="btn mb-3" style="background-color: #C1C8E3">Ajouter un numéro de téléphone</a>

                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Phone</th>
                            <th scope="col"> </th>
                            <th scope="col"> </th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($phones as $phone)
                            <tr>
                                <th scope="row">{{$phone->id}}</th>
                                <td>{{$phone->phone}}</td>
                                <td>
                                    <a href="/contactFormPhones/{{$phone->id}}/edit" class="btn" style="background-color: #F7D3BB">EDIT</a>
                                </td>
                                <td>
                                    <form action="/contactFormPhones/{{$phone->id}}" method="POST">
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