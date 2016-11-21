@extends('layout.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3>Create User</h3>
        </div>
        <div class="panel-body">
            <form action="/user" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input name="name" type="text" class="form-control" id="name">
                </div>
                <div class="form-group">
                    <label for="role">User Type:</label>
                    <select name="role" class="form-control" id="role">
                        @foreach ($roles as $value)
                            <option value="{{$value->id}}">{{$value->role}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="email">Email address:</label>
                    <input name="email" type="email" class="form-control" id="email">
                </div>
                <div class="form-group">
                    <label for="address">Address:</label>
                    <input name="address" type="text" class="form-control" id="address">
                </div>
                <hr>
                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input name="confirm_password" type="password" class="form-control" id="pwd">
                </div>
                <div class="form-group">
                    <label for="pwd">Confirm Password:</label>
                    <input name="confirm_password" type="password" class="form-control" id="pwd">
                </div>
                <hr>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
