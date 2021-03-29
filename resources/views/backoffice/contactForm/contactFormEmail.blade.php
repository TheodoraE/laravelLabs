@extends('adminlte::page')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h1 class="mb-5">Contact Form Email</h1>

                    <a href="/contactFormEmails/create" class="btn mb-3" style="background-color: #C1C8E3">Ajouter un email</a>

                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Email</th>
                            <th scope="col"> </th>
                            <th scope="col"> </th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($emails as $email)
                            <tr>
                                <th scope="row">{{$email->id}}</th>
                                <td>{{$email->email}}</td>
                                <td>
                                    <a href="/contactFormEmails/{{$email->id}}/edit" class="btn" style="background-color: #F7D3BB">EDIT</a>
                                </td>
                                <td>
                                    <form action="/contactFormEmails/{{$email->id}}" method="POST">
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