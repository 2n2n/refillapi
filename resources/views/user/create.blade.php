@extends('layout.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3>Create User</h3>
        </div>
        <div class="panel-body">
            @include('user.form.validation')
            <form action="/user" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input name="name" type="text" class="form-control" id="name" value="{{ old('name') }}">
                </div>
                <div class="form-group">
                    <label for="role">User Type:</label>
                    <select name="role" class="form-control" id="role">
                        @foreach ($roles as $role)
                            @if( old('role') == $role->id )
                            <option value="{{ $role->id }}" selected>{{ $role->role }}</option>
                            @else
                            <option value="{{ $role->id }}">{{ $role->role }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="email">Email address:</label>
                    <input name="email" type="email" class="form-control" id="email" value="{{ old('email') }}">
                </div>
                <div class="form-group">
                    <label for="address">Address:</label>
                    <input name="address" type="text" class="form-control" id="address" value="{{ old('address') }}">
                </div>
                <hr>
                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input name="password" type="password" class="form-control" id="pwd" value="{{ old('password') }}">
                </div>
                <div class="form-group">
                    <label for="pwd">Confirm Password:</label>
                    <input name="confirm_password" type="password" class="form-control" id="pwd" value="">
                </div>
                <hr>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="/user" class="btn btn-warning">Back</a>
            </form>
        </div>
    </div>
@endsection