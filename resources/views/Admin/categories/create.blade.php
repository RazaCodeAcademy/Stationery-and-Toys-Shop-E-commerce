@extends('layouts.admin-master')

@section('title', 'Categories')

@section('content')
    <section>
        <div class="container">
            <form action="{{ route('categories.store') }}" method="post" enctype="multipart/form-data">
                <h4 class="text-center my-4">Add New Category</h4>
                @csrf
                <div class="row">
                    <div class="col-md-8 offset-2">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input id="title" class="form-control" type="text" name="title" placeholder="Enter Title...">
                        </div>
                    </div>
                    <div class="col-md-8 offset-2">
                        <div class="form-group">
                            <label for="description">Description</label>
                            <input id="description" class="form-control" type="text" name="description" placeholder="Enter Description...">
                        </div>
                    </div>
                    <div class="col-md-8 offset-2">
                        <div class="form-group">
                            <label for="thumbnail">Thumbnail</label>
                            <input id="thumbnail" class="form-control" type="file" name="thumbnail" placeholder="Choose File...">
                        </div>
                    </div>
                    <div class="col-md-4 offset-5">
                        <button type="submit" class="btn px-5 mt-3 my-btn">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection
