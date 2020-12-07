@extends('layouts.master')
@section('title', 'F&K-Home')
@section('content')
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
        </ol>
        <div class="overlay">
            <div class="carousel-caption d-none d-md-block">
                <h1>Welcome To <br> F&K Stationers</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo dicta laborum architecto
                    <br>
                    id ad libero consequuntur cumque distinctio praesentium consectetur quae tempore asperiores?</p>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            <div class="carousel-inner overlay">
                <div class="carousel-item active">
                <img class="d-block w-100" src="{{ asset('images/backgrounds/back-banner-1.png') }}" alt="First slide">
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('images/backgrounds/back-banner-2.jpg') }}" alt="First slide">
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('images/backgrounds/back-banner-3.jpg') }}" alt="First slide">
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('images/backgrounds/back-banner-4.jpg') }}" alt="First slide">
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('images/backgrounds/back-banner-5.jpg') }}" alt="First slide">
                </div>
            </div>
            </div>
        </div>
    </div>

    {{-- Card Section Area --}}
    <section>
        <div class="container-fluid mb-5">
            <h3 class="text-uppercase text-center py-3 my-4 bg-dark text-white">Products</h3>
            <div class="row">
                @foreach ($product as $item)
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                        <div class="card myCard">
                            <img src="{{ asset('/uploads/item/images/'.$item->thumbnail) }}" alt="...." class="product-image">
                            <div class="card-body my-card-body">
                                <h4 class="card-title text-center">{{ $item->title }}</h4>
                                <h6>{{ $item->description }}</h6>
                                <p class="card-text text-center item-price"> Rs.{{ $item->price }}</p>
                                <a href="{{ route('addtocart', ['id' => $item->id]) }}" class="btn btn-outline-light show-btn w-100">Add To Cart</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
