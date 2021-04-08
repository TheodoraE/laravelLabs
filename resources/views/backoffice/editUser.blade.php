@extends('adminlte::page')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h1 class="mb-5">Modifier l'utilisateur</h1>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="/users/{{$edit->id}}" method="POST" class="m-3">
                        @csrf
                        @method('PATCH')
                        
                        <div class="form-group">
                            <label for="name">Name : </label>
                            <input type="text" name="name" class="form-control" value="{{old('name') ? old('name') : $edit->name}}">
                        </div>
                        <div class="form-group">
                            <label for="firstname">Firstname : </label>
                            <input type="text" name="firstname" class="form-control" value="{{old('firstname') ? old('firstname') : $edit->firstname}}">
                        </div>
                        <div class="form-group">
                            <label for="function_id">Function : </label> 
                            <select name="function_id" id="" class="form-control">
                                <option value="{{$edit->function_id}}">{{$edit->positions->function}}</option>
                                @foreach ($functions as $function)
                                    @if ($function->id != $edit->function_id )
                                        <option value="{{$function->id}}">{{$function->function}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="role_id">Role : </label> 
                            <select name="role_id" id="" class="form-control">
                                <option value="{{$edit->role_id}}">{{$edit->roles->role}}</option>
                                @foreach ($roles as $role)
                                    @if ($role->id != $edit->role_id )
                                        <option value="{{$role->id}}">{{$role->role}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="email">Email : </label>
                            <input type="text" name="email" class="form-control" value="{{old('email') ? old('email') : $edit->email}}">
                        </div>
                        <div class="form-group">
                            <label for="description">Description : </label>
                            <input type="text" name="description" class="form-control" value="{{old('description') ? old('description') : $edit->description}}">
                        </div>

                        <button type="submit" class="btn mt-4" style="background-color: #F7D3BB">Enregistrer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection