@extends('layouts.manager-master')
@section('title', 'Manage Employee')

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
                    <h2 class="theme-color-bg text-white text-center py-2 mt-3">Employee Detail</h2>
                    <div class="d-flex">
                        <div class="ml-auto">
                            <a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-primary">Edit Employee</a>
                        </div>
                    </div>
                    @if ($employee)
                        <div class="d-flex">
                            <div class="text-center">
                                <img src="{{ asset('/uploads/employee/images/'. $employee->image) }}" alt="...." width="350" height="350">
                            </div>
                            <div class="ml-5 mt-5">
                                <h5 class="py-2"><strong>employee ID :</strong> <span class="ml-4">{{ $employee->id }}</span></h5>
                                <h5 class="py-2"><strong>employee Name :</strong> <span class="ml-4">{{ $employee->name }}</span></h5>
                                <h5 class="py-2"><strong>employee Email :</strong> <span class="ml-4">{{ $employee->email }}</span></h5>
                                <h5 class="py-2"><strong>employee Email :</strong> <span class="ml-4">{{ $employee->employee->phone }}</span></h5>
                                <h5 class="py-2"><strong>employee Joining :</strong> <span class="ml-4">{{ $employee->created_at }}</span></h5>
                            </div>
                        </div>
                    @else
                        <h3 class="text-center mt-5">There is no more employees...</h3>
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection
