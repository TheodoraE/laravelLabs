@extends('adminlte::page')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h1 class="mb-5">Footer</h1>
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Copyright</th>
                            <th scope="col">Credits</th>
                            <th scope="col">Credits Link</th>
                            <th scope="col"> </th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($footers as $footer)
                            <tr>
                                <th scope="row">{{$footer->id}}</th>
                                <td>{{$footer->copyright}}</td>
                                <td>{{$footer->credits}}</td>
                                <td>{{$footer->creditsLink}}</td>
                                <td>
                                    <a href="/footers/{{$footer->id}}/edit" class="btn btn-warning">EDIT</a>
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