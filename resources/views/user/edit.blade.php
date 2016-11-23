@extends('layout.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3>Edit User</h3>
        </div>
        <div class="panel-body">
            @include('user.form.validation')
            <form action="/user/{{ $user->id }}" method="POST">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="PUT">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input name="name" type="text" class="form-control" id="name" value="{{$user->name}}">
                </div>
                <div class="form-group">
                    <label for="role">User Type:</label>
                    <select name="role" class="form-control" id="role">
                        @foreach ($roles as $value)
                            @if($value->id == $user->usertype_id)
                            <option value="{{$value->id}}" selected>{{$value->role}}</option>
                            @else
                            <option value="{{$value->id}}">{{$value->role}}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="email">Email address:</label>
                    <input name="email" type="email" class="form-control" id="email" value="{{ $user->email }}">
                </div>
                <div class="form-group">
                    <label for="address">Address:</label>
                    <input name="address" type="text" class="form-control" id="address" value="{{ $user->address }}">
                </div>
                <hr>
                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input name="password" type="password" class="form-control" id="pwd">
                </div>
                <div class="form-group">
                    <label for="pwd">Confirm Password:</label>
                    <input name="confirm_password" type="password" class="form-control" id="pwd">
                </div>
                <hr>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a class="btn btn-warning" href="/user">Back</a>
            </form>
        </div>
    </div>
@endsection
