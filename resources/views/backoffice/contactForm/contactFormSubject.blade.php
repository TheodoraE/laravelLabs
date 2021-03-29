@extends('adminlte::page')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h1 class="mb-5">Contact Form Subjects</h1>

                    <a href="/contactFormSubjects/create" class="btn mb-3" style="background-color: #C1C8E3">Ajouter un sujet</a>

                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Placeholder</th>
                            <th scope="col"> </th>
                            <th scope="col"> </th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($subjects as $subject)
                            <tr>
                                <th scope="row">{{$subject->id}}</th>
                                <td>{{$subject->subject}}</td>
                                <td>
                                    <a href="/contactFormSubjects/{{$subject->id}}/edit" class="btn" style="background-color: #F7D3BB">EDIT</a>
                                </td>
                                <td>
                                    <form action="/contactFormSubjects/{{$subject->id}}" method="POST">
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