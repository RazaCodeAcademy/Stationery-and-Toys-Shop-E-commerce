@extends('layouts\manager-master')
@section('title', 'Manage Roles')

@section('content')

    <?php $sr = 1; ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if(Session::has('success'))
                    <div class="alert alert-primary my-4" role="alert">
                        {{ Session::get('success') }}
                    </div>
                @endif
            </div>
        </div>
    </div>
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="theme-color-bg text-white text-center py-2 mt-3">Roles Detail</h2>
                    <a href="{{ route('roles.create') }}" class="btn btn-primary">Add New Role</a>
                    @if ($roles)
                        <table class=" table w-100 order-table table-responsive-sm rounded my-4">
                            <thead>
                                <th>#</th>
                                <th class="w-25">Name</th>
                                <th>Create At</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                @foreach ($roles as $role)
                                    <tr>
                                        <td class="align-middle">{{ $role->id }}</td>
                                        <td class="align-middle">{{ $role->name }}</td>
                                        <td class="align-middle">{{ $role->created_at }}</td>
                                        <td class="align-middle">
                                            <div class="d-flex">
                                                <a href="{{ route('roles.show', $role->id) }}" class="btn btn-success mr-1">Show</a>
                                                <form action="{{ route('roles.destroy', $role->id) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        <h3 class="text-center mt-5">There is no more customers...</h3>
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection

