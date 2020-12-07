@extends('layouts.admin-master')

@section('title', 'Products')

@section('content')
    <section>
        <div class="container">
            <form action="{{ route('products.update', $item->id) }}" method="post" enctype="multipart/form-data">
                <h4 class="text-center my-4">Update Product</h4>
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-8 offset-2">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input id="title" class="form-control" type="text" name="title" value="{{ $item->title }}">
                        </div>
                    </div>
                    <div class="col-md-8 offset-2">
                        <div class="form-group">
                            <label for="description">Description</label>
                            <input id="description" class="form-control" type="text" name="description" value="{{ $item->description }}">
                        </div>
                    </div>
                    <div class="col-md-8 offset-2">
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input id="price" class="form-control" type="text" name="price" value="{{ $item->price }}">
                        </div>
                    </div>
                    <div class="col-md-8 offset-2">
                        <div class="form-group">
                            <img src="{{ asset('/uploads/item/images/' . $item->thumbnail) }}" alt="" class="img-fluid img-thumbnail mb-2" width="100" height="100" />
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
