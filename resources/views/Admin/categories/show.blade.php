@extends('layouts.admin-master')

@section('title', 'Categories')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 my-4">
                <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-primary mt-3"> Edit Category</a>
                <h2 class="theme-color-bg text-white text-center py-2 mt-3">Categories</h2>
                <table class=" table w-100 order-table table-responsive-sm rounded my-4">
                    <thead>
                        <th>#</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Thumbnail</th>
                        <th>Created At</th>
                    </thead>
                    <tbody>
                        <tr>
                            <th class="align-middle">{{ $category->id }}</th>
                            <td class="align-middle">{{ $category->title }}</td>
                            <td class="align-middle">{{ $category->description }}</td>
                            <td class="align-middle"><img src="{{ asset('/uploads/category/images/' . $category->thumbnail) }}" alt="" width="150" height="150"></td>
                            <td class="align-middle">{{ $category->created_at }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
