@extends('layouts.master')
@section('title', 'Our Services')

@section('content')
<section>
    <div class="about-banner">
        <div class="overlay">
            <div class="carousel-caption d-none d-md-block">
                <h2 class="text-center text-white text-uppercase">Our Services</h2>
                <p>
                    <a href="/" class="universal-btn">Home</a><span class="text-uppercase"> / Our Services</span>
                </p>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12 mb-5">
                <div class="border-left px-3">
                    <h3 class="text-uppercase">OUR MISSION</h3>
                    <p class="text-justify ps">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil vero dolore id ducimus consequatur,
                        vitae sint ex neque tempore? Quis omnis, quam magni libero odit dolor suscipit unde dicta explicabo?
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 mb-5">
                <div class="border-left px-3">
                    <h3 class="text-uppercase">OUR VISION</h3>
                    <p class="text-justify ps">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil vero dolore id ducimus consequatur,
                        vitae sint ex neque tempore? Quis omnis, quam magni libero odit dolor suscipit unde dicta explicabo?
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 mb-5">
                <div class="border-left px-3">
                    <h3 class="text-uppercase">OUR PHILOSOPHY</h3>
                    <p class="text-justify ps">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil vero dolore id ducimus consequatur,
                        vitae sint ex neque tempore? Quis omnis, quam magni libero odit dolor suscipit unde dicta explicabo?
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12 mb-5">
                <div class="border-left px-3">
                    <h3 class="text-uppercase">We Are Trusted</h3>
                    <p class="text-justify ps">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil vero dolore id ducimus consequatur,
                        vitae sint ex neque tempore? Quis omnis, quam magni libero odit dolor suscipit unde dicta explicabo?
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 mb-5">
                <div class="border-left px-3">
                    <h3 class="text-uppercase">We Are Professional</h3>
                    <p class="text-justify ps">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil vero dolore id ducimus consequatur,
                        vitae sint ex neque tempore? Quis omnis, quam magni libero odit dolor suscipit unde dicta explicabo?
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 mb-5">
                <div class="border-left px-3">
                    <h3 class="text-uppercase">OUR STORIES</h3>
                    <p class="text-justify ps">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil vero dolore id ducimus consequatur,
                        vitae sint ex neque tempore? Quis omnis, quam magni libero odit dolor suscipit unde dicta explicabo?
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <h3>MEET ME</h3>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 mb-5">
                <img src="{{ asset('images/raza.jpeg') }}" alt="" class="w-100" style="height: 100%;">
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12 mb-5">
                <p class="ps text-justify">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corporis et dolor culpa laborum enim sint
                    placeat aliquid doloribus in, quisquam ipsa atque quis voluptatem officia hic nam. Temporibus quam
                    nemo reprehenderit non voluptatibus pariatur officiis suscipit, voluptates adipisci nostrum itaque
                    fugit doloribus culpa quas, minima et expedita quod amet ratione tempore ex alias, fuga porro eos.
                    Ipsum doloremque ducimus repellendus excepturi? Possimus exercitationem esse corrupti accusamus
                    dolorum, nobis incidunt, pariatur voluptates non,
                </p>
                <p class="ps text-justify">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corporis et dolor culpa laborum enim sint
                    placeat aliquid doloribus in, quisquam ipsa atque quis voluptatem officia hic nam. Temporibus quam
                    nemo reprehenderit non voluptatibus pariatur officiis suscipit, voluptates adipisci nostrum itaque
                    fugit doloribus culpa quas, minima et expedita quod amet ratione tempore ex alias, fuga porro eos.
                    Ipsum doloremque ducimus repellendus excepturi? Possimus exercitationem esse corrupti accusamus
                    dolorum, nobis incidunt, pariatur voluptates non, voluptatum beatae ad tempora? Corporis, consequatur
                    ut! Nemo animi rerum, vitae id error laudantium asperiores quia deserunt delectus minus officiis illum
                    iste est aliquam itaque, reiciendis at aspernatur.
                </p>
            </div>
        </div>
    </div>
</section>
@endsection
