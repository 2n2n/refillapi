@extends('layout.app')

@section('content')
    <div class="col-md-12">
        <h1>List of Users</h1>
        <a href="/user/create" class="btn btn-primary">Create User</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Username</th>
                    <th>Role</th>
                    <th>Registered Date<htd>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @if ($users->count() == 0)
                    <tr>
                        <td colspan="4">
                            No Users Registered.
                        </td>
                    </tr>
                @else
                    @foreach ($users as $value)
                        <tr>
                            <td>{{ $users->username }}</td>
                            <td>{{ $user->role()->role }}</td>
                            <td>{{ $user->created_at }}</td>
                            <td><a href="#" class="btn btn-primary">Edit</a> <a href="#" class="btn btn-warning">Delete</a></td>
                        </tr>
                    @endforeach
                @endif

            </tbody>
        </table>
    </div>
@endsection
