@extends('layouts.manager-master')

@section('title', 'Create New Employee')

@section('content')
    <section>
        <div class="container">
            <form action="{{ route('employees.update', $user->id) }}" method="post" enctype="multipart/form-data">
                <h4 class="text-center my-4">Update Employee Record</h4>
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="title">Name</label>
                            <input id="title" class="form-control" type="text" name="name" value="{{ $user->name }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input id="email" class="form-control" type="text" name="email" value="{{ $user->email }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input id="phone" class="form-control" type="text" name="phone" value="{{ $user->employee->phone }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="cnic">Cnic</label>
                            <input id="cnic" class="form-control" type="text" name="cnic" value="{{ $user->employee->cnic }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="salary">Salary</label>
                            <input id="salary" class="form-control" type="text" name="salary" value="{{ $user->employee->salary }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input id="address" class="form-control" type="text" name="address" value="{{ $user->employee->address }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="age">Age</label>
                            <input id="age" class="form-control" type="text" name="age" placeholder="{{ $user->employee->age }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="age">Role</label>
                        <select name="role" id="" class="form-control mb-2">
                            <option value="0">Select Roles</option>
                            @if(!$roles->isEmpty())
                                @foreach($roles as $role)
                                    <option @if(in_array($role->id, $user->roles->pluck('id')->toArray())) {{'selected'}} class="bg-secondary text-white" @endif value="{{ $role->id }}">{{ $role->name }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input id="password" class="form-control" type="password" name="password" placeholder="Edit Password...">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <img src="{{ asset('/uploads/employee/images/' . $user->image) }}" alt="" class="img-fluid img-thumbnail mb-2" width="100" height="100" />
                            <label for="image">Image</label>
                            <input id="image" class="form-control form-file-control" type="file" name="image" value="Choose File...">
                        </div>
                    </div>
                    <div class="col-md-4 offset-5">
                        <button type="submit" class="btn px-5 mt-3 my-btn">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection
