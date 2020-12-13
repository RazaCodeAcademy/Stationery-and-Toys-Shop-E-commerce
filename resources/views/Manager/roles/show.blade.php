@extends('layouts.manager-master')
@section('title', 'Manage Roles')

@section('content')
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="theme-color-bg text-white text-center py-2 mt-3">Role Detail</h2>
                    @if ($role)
                        <table class=" table w-100 order-table table-responsive-sm rounded my-4">
                            <thead>
                                <th>#</th>
                                <th class="w-25">Name</th>
                                <th>Create At</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                    <tr>
                                        <td class="align-middle">{{ $role->id }}</td>
                                        <td class="align-middle">{{ $role->name }}</td>
                                        <td class="align-middle">{{ $role->created_at }}</td>
                                        <td class="align-middle">
                                            <div class="d-flex">
                                                <a href="{{ route('roles.edit', $role->id) }}" class="btn btn-primary mr-1">Edit</a>
                                            </div>
                                        </td>
                                    </tr>
                            </tbody>
                        </table>
                    @else
                        <h3 class="text-center mt-5">There is no more role...</h3>
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection
