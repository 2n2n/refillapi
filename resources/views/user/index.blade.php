@extends('layout.app')

@section('content')
    <div class="col-md-9">
        <div class="panel panel-primary">
            <div class="panel-heading">
                User list
            </div>
            <div class="panel-body">
                <a href="/user/create" class="btn btn-primary">Create User</a>
                <hr>
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
                                    <td>
                                        @if( $user->username == 'Inactive')
                                        <div class="label label-warning">{{ $user->username }}</div>
                                        @else
                                        {{ $user->username }}
                                        @endif
                                    </td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->userRole->role }}</td>
                                    <td>{{ $user->created_at }}</td>
                                    <td>
                                        <a href="/user/{{$user->id}}/edit" class="btn btn-primary">Edit</a>
                                        <form id="delete" class="form-inline" action="/user/{{$user->id}}" method="post" style="display:inline-block;">
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
        </div>
    </div>
@endsection

@section('scripts')
    <div id="confirm-delete" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <p>Are you sure you want to delete?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="yes btn btn-danger" data-dismiss="modal">Yes</button>
                    <button type="button" class="no btn btn-primary">No</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <script>
        $(function() {
            $('#delete').on('click', function(e) {
                e.preventDefault();
                var $form = $(this);
                var $modal = $('#confirm-delete');

                $modal.modal('show');
                $('.no').on('click', function(e) {
                    $modal.modal('hide');
                });
                $('.yes').on('click', function(e) {
                    $('#confirm-delete').modal('hide');
                    $form.submit();
                });
            });


        });
    </script>
@endsection
