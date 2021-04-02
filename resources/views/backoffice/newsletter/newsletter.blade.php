@extends('adminlte::page')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h1 class="mb-5">Newsletter</h1>
                    
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Placeholder</th>
                            <th scope="col">Button</th>
                            <th scope="col"> </th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($newsletter as $news)
                                <tr>
                                    <th scope="row">{{$news->id}}</th>
                                    <td>{{$news->title}}</td>
                                    <td>{{$news->placeholder}}</td>
                                    <td>{{$news->button}}</td>
                                    <td>
                                        <a href="/newsletter/{{$news->id}}/edit" class="btn" style="background-color: #F7D3BB">EDIT</a>
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