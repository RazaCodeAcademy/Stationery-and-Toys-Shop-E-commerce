@extends('layouts\manager-master')
@section('title', 'Manager-home')

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
                    <h2 class="theme-color-bg text-white text-center py-2 mt-3">Employees Detail</h2>
                    <a href="{{ route('employees.create') }}" class="btn btn-primary">Add New Employee</a>
                    @if ($employees)
                        <table class=" table w-100 order-table table-responsive-sm rounded my-4">
                            <thead>
                                <th>#</th>
                                <th class="w-25">UserName</th>
                                <th>Email</th>
                                <th>Joining</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                @foreach ($employees as $employee)
                                    <tr>
                                        <td class="align-middle">{{ $employee->id }}</td>
                                        <td class="align-middle">{{ $employee->name }}</td>
                                        <td class="align-middle">{{ $employee->email }}</td>
                                        <td class="align-middle">{{ $employee->created_at }}</td>
                                        <td class="align-middle">
                                            <div class="d-flex">
                                                <a href="{{ route('employees.show', $employee->id) }}" class="btn btn-success mr-1">Show</a>
                                                <form action="{{ route('employees.destroy', $employee->id) }}" method="post">
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

