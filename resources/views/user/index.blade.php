@extends('layout.app')

@section('content')
    <div class="col-md-12">
        <h1>List of Users</h1>
        <a href="/user/create" class="btn btn-primary">Create User</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Username</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Registered Date<htd>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @if ($users->count() == 0)
                    <tr>
                        <td colspan="6">
                            No Users Registered.
                        </td>
                    </tr>
                @else

                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->username }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->userRole->role }}</td>
                            <td>{{ $user->created_at }}</td>
                            <td>
                                <a href="/user/{{$user->id}}/edit" class="btn btn-primary">Edit</a>
                                <form class="form-group form-inline" action="/user/{{$user->id}}" method="post">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn btn-warning">Delete</a></td>
                                </form>
                        </tr>
                    @endforeach
                @endif

            </tbody>
        </table>
    </div>
@endsection
