@extends('adminlte::page')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h1 class="mb-5">Emails sended from the contact form</h1>

                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Subject</th>
                            <th scope="col">Message</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($emails as $email)
                            <tr>
                                <th scope="row">{{$email->id}}</th>
                                <td>{{$email->name}}</td>
                                <td>{{$email->email}}</td>
                                <td>{{$email->subjects->subject}}</td>
                                <td>{{$email->message}}</td>
                            </tr>
                          @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
@endsection