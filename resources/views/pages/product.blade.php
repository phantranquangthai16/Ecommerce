@extends('layout')
@section('content')
    <!-- ***** Main Banner Area Start ***** -->
    <div class="page-heading" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-content">
                        <h2>Welcome to Thai's Store</h2>
                        <span>Đây là trang Sản Phẩm</span>

                    </div>
                </div>
            </div>
        </div>
    </div>

                        {{-- start product --}}
                        <section class="section" id="products">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="section-heading">
                                            <h2>Our Products</h2>
                                            <span>Check out all of our products.</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="item">
                                            <div class="thumb">
                                                <div class="hover-content">
                                                    <ul>
                                                        <li><a href="single-product.html"><i class="fa fa-eye"></i></a></li>
                                                        <li><a href="single-product.html"><i class="fa fa-star"></i></a></li>
                                                        <li><a href="single-product.html"><i class="fa fa-shopping-cart"></i></a></li>
                                                    </ul>
                                                </div>
                                                <img src="{{ asset('frontend/images/men-01.jpg') }}" alt="">
                                            </div>
                                            <div class="down-content">
                                                <h4>tên sản phẩm</h4>
                                                <span>giá sản phẩm</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
@endsection
