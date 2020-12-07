@extends('layouts.admin-master')

@section('title', 'Categories')

@section('content')
    <section>
        <div class="container">
            <form action="{{ route('categories.update', $category->id) }}" method="post" enctype="multipart/form-data">
                <h4 class="text-center my-4">Update Category</h4>
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-8 offset-2">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input id="title" class="form-control" type="text" name="title" value="{{ $category->title }}">
                        </div>
                    </div>
                    <div class="col-md-8 offset-2">
                        <div class="form-group">
                            <label for="description">Description</label>
                            <input id="description" class="form-control" type="text" name="description" value="{{ $category->description }}">
                        </div>
                    </div>
                    <div class="col-md-8 offset-2">
                        <div class="form-group">
                            <img src="{{ asset('/uploads/category/images/' . $category->thumbnail) }}" alt="" class="img-fluid img-thumbnail mb-2" width="100" height="100" />
                            <label for="thumbnail">Thumbnail</label>
                            <input id="thumbnail" class="form-control form-file-control" type="file" name="thumbnail">
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
