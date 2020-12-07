@extends('layouts.master')
@section('title', 'Contact Us')

@section('content')
<section>
    <div class="about-banner">
        <div class="overlay">
            <div class="carousel-caption d-none d-md-block">
                <h2 class="text-center text-white text-uppercase">Contact us</h2>
                <p>
                    <a href="/" class="universal-btn">Home</a><span class="text-uppercase"> / Contact Us</span>
                </p>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-4 col-sm-12">
                <div class="contact-info">
                    <h3>CONTACT INFO</h3>
                    <p class="ps">Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae quisquam repellat mollitia error voluptate atque sit adipisci consequatur blanditiis illum.</p>
                    <ul>
                        <li>
                            <p><i class="fas fa-map-marker-alt"></i>Address: House # 350, K2 Block, Wapda Town, Lahore, Punjab, Pakistan </p>
                        </li>
                        <li>
                            <p><i class="fas fa-phone-square"></i>Phone: <a href="tel:+923037900571">+92 303 7900571</a></p>
                        </li>
                        <li>
                            <p><i class="fas fa-envelope"></i>Email: <a href="mailto:muhammad.husnain.raza.125@gmail.com">muhammad.husnain.raza.125@gmail.com</a></p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-8 col-sm-12">
                <div class="contact-info-form">
                    <h3>GET IN TOUCH</h3>
                    <p class="ps">Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae quisquam repellat mollitia error voluptate atque sit adipisci consequatur blanditiis illum.</p>
                    <form action="#" method="post">
                        @csrf
                        <div class="form-group my-4">
                            <input id="name" class="form-control" type="text" name="" placeholder="Your Name">
                        </div>
                        <div class="form-group my-4">
                            <input id="email" class="form-control" type="text" name="" placeholder="Your Email">
                        </div>
                        <div class="form-group my-4">
                            <input id="subject" class="form-control" type="text" name="" placeholder="Subject">
                        </div>
                        <div class="form-group mt-4">
                            <textarea name="message" id="message" cols="30" rows="5" class="form-control" placeholder="Message"></textarea>
                        </div>
                        <button type="submit" class="btn text-white checkout-btn" name="submit">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
