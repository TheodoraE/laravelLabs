@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Dashboard</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <p class="mb-0">You are logged in!</p>
                    @if ($errors->any()) 
                        <div class="alert alert-danger mt-5"> 
                            <ul> 
                                @foreach ($errors->all() as $error) 
                                <li>{{ $error }}</li> 
                                @endforeach 
                            </ul> 
                        </div> 
                    @endif
                </div>
            </div>
        </div>
    </div>
@stop
