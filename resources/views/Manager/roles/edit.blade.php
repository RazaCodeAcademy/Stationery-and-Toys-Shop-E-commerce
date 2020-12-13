@extends('layouts.manager-master')

@section('title', 'Update Role')

@section('content')
    <section>
        <div class="container">
            <form action="{{ route('roles.update', $role->id) }}" method="post">
                <h4 class="text-center my-4">Update Role</h4>
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input id="name" class="form-control" type="text" name="name" value="{{ $role->name }}">
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
