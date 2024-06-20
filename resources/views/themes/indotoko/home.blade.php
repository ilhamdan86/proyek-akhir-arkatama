@extends('themes.indotoko.layouts.app')
@include('themes.indotoko.shared.slider')
@section('content')
    <!-- Popular -->
    <section class="popular">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-6">
                    <h1>Popular</h1>
                </div>
                <div class="col-6 text-end">
                    <a href="#" class="btn-first">View All</a>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-3 col-6">
                    <div class="card card-body p-lg-4 p3">
                        <a href="#"><img src="{{ asset('themes/indotoko/assets/img/shop_01.jpg') }}" alt=""
                                class="img-fluid"></a>
                        <h3 class="product-name mt-3">sepeda Polygon</h3>
                        <div class="rating">
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                        </div>
                        <div class="detail d-flex justify-content-between align-items-center mt-4">
                            <p class="price">IDR 3.500.000</p>
                            <a href="#" class="btn-cart"><i class="bx bx-cart-alt"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="card card-body p-lg-4 p3">
                        <a href="#"><img src="{{ asset('themes/indotoko/assets/img/shop_02.jpg') }}" alt=""
                                class="img-fluid"></a>
                        <h3 class="product-name mt-3">sepeda Polygon</h3>
                        <div class="rating">
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                        </div>
                        <div class="detail d-flex justify-content-between align-items-center mt-4">
                            <p class="price">IDR 5.000.000</p>
                            <a href="#" class="btn-cart"><i class="bx bx-cart-alt"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6 mt-3 mt-lg-0">
                    <div class="card card-body p-lg-4 p3">
                        <a href="#"><img src="{{ asset('themes/indotoko/assets/img/shop_03.jpg') }}" alt=""
                                class="img-fluid"></a>
                        <h3 class="product-name mt-3">sepeda Polygon</h3>
                        <div class="rating">
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                        </div>
                        <div class="detail d-flex justify-content-between align-items-center mt-4">
                            <p class="price">IDR 3.000.000</p>
                            <a href="#" class="btn-cart"><i class="bx bx-cart-alt"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6 mt-3 mt-lg-0">
                    <div class="card card-body p-lg-4 p3">
                        <a href="#"><img src="{{ asset('themes/indotoko/assets/img/shop_04.jpg') }}" alt=""
                                class="img-fluid"></a>
                        <h3 class="product-name mt-3">sepeda Polygon</h3>
                        <div class="rating">
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                        </div>
                        <div class="detail d-flex justify-content-between align-items-center mt-4">
                            <p class="price">IDR 4.500.000</p>
                            <a href="#" class="btn-cart"><i class="bx bx-cart-alt"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Latest -->
    <section class="latest">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-6">
                    <h1>Latest</h1>
                </div>
                <div class="col-6 text-end">
                    <a href="#" class="btn-first">View All</a>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-3 col-6">
                    <div class="card card-body p-lg-4 p3">
                        <a href="#"><img src="{{ asset('themes/indotoko/assets/img/P1.jpg') }}" alt=""
                                class="img-fluid"></a>
                        <h3 class="product-name mt-3">sepeda lipat</h3>
                        <div class="rating">
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                        </div>
                        <div class="detail d-flex justify-content-between align-items-center mt-4">
                            <p class="price">IDR 2.000.000</p>
                            <a href="#" class="btn-cart"><i class="bx bx-cart-alt"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="card card-body p-lg-4 p3">
                        <a href="#"><img src="{{ asset('themes/indotoko/assets/img/p2.jpg') }}" alt=""
                                class="img-fluid"></a>
                        <h3 class="product-name mt-3">sepeda lipat</h3>
                        <div class="rating">
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                        </div>
                        <div class="detail d-flex justify-content-between align-items-center mt-4">
                            <p class="price">IDR 2.900.000</p>
                            <a href="#" class="btn-cart"><i class="bx bx-cart-alt"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6 mt-3 mt-lg-0">
                    <div class="card card-body p-lg-4 p3">
                        <a href="#"><img src="{{ asset('themes/indotoko/assets/img/p3.jpg') }}" alt=""
                                class="img-fluid"></a>
                        <h3 class="product-name mt-3">sepeda lipat</h3>
                        <div class="rating">
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                        </div>
                        <div class="detail d-flex justify-content-between align-items-center mt-4">
                            <p class="price">IDR 3.000.000</p>
                            <a href="#" class="btn-cart"><i class="bx bx-cart-alt"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6 mt-3 mt-lg-0">
                    <div class="card card-body p-lg-4 p3">
                        <a href="#"><img src="{{ asset('themes/indotoko/assets/img/p4.jpg') }}" alt=""
                                class="img-fluid"></a>
                        <h3 class="product-name mt-3">sepeda lipat</h3>
                        <div class="rating">
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                        </div>
                        <div class="detail d-flex justify-content-between align-items-center mt-4">
                            <p class="price">IDR 1.800.000</p>
                            <a href="#" class="btn-cart"><i class="bx bx-cart-alt"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Subscribe  -->
    <section class="subscribe">
        <div class="container">
            <div class="subscribe-wrapper">
                <div class="row justify-content-center text-center">
                    <div class="col-lg-6 col-md-7 col-10 col-sub">
                        <h1>Subscribe to get latest updates!</h1>
                        <form action="#" class="mt-5">
                            <div class="input-group w-100">
                                <input type="email" class="form-control" placeholder="Type your email ..">
                                <button class="btn btn-outline-warning">Subscribe</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
