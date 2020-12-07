@extends('layouts\admin-master')
@section('title', 'Admin-home')

@section('content')
    <main role="main" class="col-md-12 ml-sm-auto col-lg-12 pt-3 section-bg">
        <section class="">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 d-flex">
                        <div class="pw-bold">
                            <h2 class="text-white pb-2">Dashboard</h2>
                            <p>{{ Auth::user()->name }}</p>
                        </div>
                        <div class="ml-auto d-flex pw-bold">
                            <button class="add-customer-btn ml-1">Add Customer</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- card section -->
        <section>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="card full-height">
                            <div class="card-body">
                                <div class="card-title">Overall statistics</div>
                                <div class="row py-3">
                                    <div class="col-xl-12 d-flex flex-column justify-content-around">
                                        <div>
                                            <h6 class="fw-bold text-uppercase text-muted op-8">Daily information about statistics in system</h6>
                                        </div>
                                    </div>
                                    <div class="col-md-12 d-flex flex-column justify-content-around pt-5">
                                        <div id="chart-container">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-6 col-sm-4 col-6 text-center">
                                                    <div class="progress yellow">
                                                        <span class="progress-left">
                                                            <span class="progress-bar"></span>
                                                        </span>
                                                        <span class="progress-right">
                                                            <span class="progress-bar"></span>
                                                        </span>
                                                        <div class="progress-value">80%</div>
                                                    </div>
                                                    <div class="pro-p"><p class="py-3 text-dark">New Users</p></div>
                                                </div>
                                                <div class="col-lg-4 col-md-6 col-sm-4 col-6 text-center">
                                                    <div class="progress green">
                                                        <span class="progress-left">
                                                            <span class="progress-bar"></span>
                                                        </span>
                                                        <span class="progress-right">
                                                            <span class="progress-bar"></span>
                                                        </span>
                                                        <div class="progress-value">95%</div>
                                                    </div>
                                                    <div class="pro-p"><p class="py-3 text-dark">Sales</p></div>
                                                </div>
                                                <div class="col-lg-4 col-md-12 col-sm-4 col-12 text-center">
                                                    <div class="progress red">
                                                        <span class="progress-left">
                                                            <span class="progress-bar"></span>
                                                        </span>
                                                        <span class="progress-right">
                                                            <span class="progress-bar"></span>
                                                        </span>
                                                        <div class="progress-value">55%</div>
                                                    </div>
                                                    <div class="pro-p"><p class="py-3 text-dark">Subscribers</p></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="card full-height">
                            <div class="card-body">
                                <div class="card-title">Total income & spend statistics</div>
                                <div class="row py-3">
                                    <div class=" col-lg-4 col-md-12 d-flex flex-column justify-content-around">
                                        <div>
                                            <h6 class="fw-bold text-uppercase text-success op-8">Total Income</h6>
                                            <h3 class="fw-bold">$9.782</h3>
                                        </div>
                                        <div>
                                            <h6 class="fw-bold text-uppercase text-danger op-8">Total Spend</h6>
                                            <h3 class="fw-bold">$1,248</h3>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-12">
                                        <div id="chart-container">
                                            <img src="/images/graph.png" alt="" class="w-100" height="250px">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="card full-height">
                            <div class="card-body">
                                <div class="card-title">Overall statistics</div>
                                <div class="row py-3">
                                    <div class="col-xl-12 d-flex flex-column justify-content-around">
                                        <div>
                                            <h6 class="fw-bold text-uppercase text-muted op-8">Daily information about statistics in system</h6>
                                        </div>
                                    </div>
                                    <div class="col-md-12 d-flex flex-column justify-content-around pt-5">
                                        <div id="chart-container">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-6 col-sm-4 col-6 text-center">
                                                    <div class="progress yellow">
                                                        <span class="progress-left">
                                                            <span class="progress-bar"></span>
                                                        </span>
                                                        <span class="progress-right">
                                                            <span class="progress-bar"></span>
                                                        </span>
                                                        <div class="progress-value">80%</div>
                                                    </div>
                                                    <div class="pro-p"><p class="py-3 text-dark">New Users</p></div>
                                                </div>
                                                <div class="col-lg-4 col-md-6 col-sm-4 col-6 text-center">
                                                    <div class="progress green">
                                                        <span class="progress-left">
                                                            <span class="progress-bar"></span>
                                                        </span>
                                                        <span class="progress-right">
                                                            <span class="progress-bar"></span>
                                                        </span>
                                                        <div class="progress-value">95%</div>
                                                    </div>
                                                    <div class="pro-p"><p class="py-3 text-dark">Sales</p></div>
                                                </div>
                                                <div class="col-lg-4 col-md-12 col-sm-4 col-12 text-center">
                                                    <div class="progress red">
                                                        <span class="progress-left">
                                                            <span class="progress-bar"></span>
                                                        </span>
                                                        <span class="progress-right">
                                                            <span class="progress-bar"></span>
                                                        </span>
                                                        <div class="progress-value">55%</div>
                                                    </div>
                                                    <div class="pro-p"><p class="py-3 text-dark">Subscribers</p></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="card full-height">
                            <div class="card-body">
                                <div class="card-title">Total income & spend statistics</div>
                                <div class="row py-3">
                                    <div class=" col-lg-4 col-md-12 d-flex flex-column justify-content-around">
                                        <div>
                                            <h6 class="fw-bold text-uppercase text-success op-8">Total Income</h6>
                                            <h3 class="fw-bold">$9.782</h3>
                                        </div>
                                        <div>
                                            <h6 class="fw-bold text-uppercase text-danger op-8">Total Spend</h6>
                                            <h3 class="fw-bold">$1,248</h3>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-12">
                                        <div id="chart-container">
                                            <img src="/images/graph.png" alt="" class="w-100" height="250px">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
