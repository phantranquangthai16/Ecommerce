@extends('layout')
@section('content')
    <!-- ***** Main Banner Area Start ***** -->
    <div class="page-heading" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-content">
                        <h2>Chào mừng bạn đến với Thai's Store</h2>
                        <span>Đây là trang Danh Mục</span>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->
    <div class="main-banner" id="top">
        <div class="container-fluid">
            <div class="row">
                                <div class="col-lg-12">
                                    <div class="right-content">
                                        <div class="row">
                                            @foreach($category as $key => $cate)
                                                <div class="col-lg-3">
                                                    <div class="right-first-image">
                                                        <div class="thumb">
                                                            <div class="inner-content">
                                                                <h4>{{ $cate->title }}</h4>
                                                                <span>{{ $cate->description }}</span>
                                                            </div>
                                                            <div class="hover-content">
                                                                <div class="inner">
                                                                    <h4>{{ $cate->name_inside }}</h4>
                                                                    <p>{{ $cate->description_inside }}</p>
                                                                    <div class="main-border-button">
                                                                        <a href="{{ url('danh_muc/' . $cate->slug)}}">Khám phá ngay!</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <img src="{{asset('uploads/category/'.$cate->image)}}" style="width: 360px; height: 300px;">
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach


                                        </div>
                                    </div>
                                </div>
            </div>
        </div>
    </div>


    {{--    <!-- ***** Products Area Starts ***** -->--}}
{{--    <section class="section" id="products">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-12">--}}
{{--                    <div class="section-heading">--}}
{{--                        <h2>Our Latest Products</h2>--}}
{{--                        <span>Check out all of our products.</span>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-4">--}}
{{--                    <div class="item">--}}
{{--                        <div class="thumb">--}}
{{--                            <div class="hover-content">--}}
{{--                                <ul>--}}
{{--                                    <li><a href="single-product.html"><i class="fa fa-eye"></i></a></li>--}}
{{--                                    <li><a href="single-product.html"><i class="fa fa-star"></i></a></li>--}}
{{--                                    <li><a href="single-product.html"><i class="fa fa-shopping-cart"></i></a></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                            <img src="{{asset('frontend/images/men-01.jpg')}}" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="down-content">--}}
{{--                            <h4>Classic Spring</h4>--}}
{{--                            <span>$120.00</span>--}}
{{--                            <ul class="stars">--}}
{{--                                <li><i class="fa fa-star"></i></li>--}}
{{--                                <li><i class="fa fa-star"></i></li>--}}
{{--                                <li><i class="fa fa-star"></i></li>--}}
{{--                                <li><i class="fa fa-star"></i></li>--}}
{{--                                <li><i class="fa fa-star"></i></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-4">--}}
{{--                    <div class="item">--}}
{{--                        <div class="thumb">--}}
{{--                            <div class="hover-content">--}}
{{--                                <ul>--}}
{{--                                    <li><a href="single-product.html"><i class="fa fa-eye"></i></a></li>--}}
{{--                                    <li><a href="single-product.html"><i class="fa fa-star"></i></a></li>--}}
{{--                                    <li><a href="single-product.html"><i class="fa fa-shopping-cart"></i></a></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                            <img src="{{asset('frontend/images/men-02.jpg')}}" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="down-content">--}}
{{--                            <h4>Air Force 1 X</h4>--}}
{{--                            <span>$90.00</span>--}}
{{--                            <ul class="stars">--}}
{{--                                <li><i class="fa fa-star"></i></li>--}}
{{--                                <li><i class="fa fa-star"></i></li>--}}
{{--                                <li><i class="fa fa-star"></i></li>--}}
{{--                                <li><i class="fa fa-star"></i></li>--}}
{{--                                <li><i class="fa fa-star"></i></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-4">--}}
{{--                    <div class="item">--}}
{{--                        <div class="thumb">--}}
{{--                            <div class="hover-content">--}}
{{--                                <ul>--}}
{{--                                    <li><a href="single-product.html"><i class="fa fa-eye"></i></a></li>--}}
{{--                                    <li><a href="single-product.html"><i class="fa fa-star"></i></a></li>--}}
{{--                                    <li><a href="single-product.html"><i class="fa fa-shopping-cart"></i></a></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                            <img src="{{asset('frontend/images/men-03.jpg')}}" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="down-content">--}}
{{--                            <h4>Love Nana ‘20</h4>--}}
{{--                            <span>$150.00</span>--}}
{{--                            <ul class="stars">--}}
{{--                                <li><i class="fa fa-star"></i></li>--}}
{{--                                <li><i class="fa fa-star"></i></li>--}}
{{--                                <li><i class="fa fa-star"></i></li>--}}
{{--                                <li><i class="fa fa-star"></i></li>--}}
{{--                                <li><i class="fa fa-star"></i></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-4">--}}
{{--                    <div class="item">--}}
{{--                        <div class="thumb">--}}
{{--                            <div class="hover-content">--}}
{{--                                <ul>--}}
{{--                                    <li><a href="single-product.html"><i class="fa fa-eye"></i></a></li>--}}
{{--                                    <li><a href="single-product.html"><i class="fa fa-star"></i></a></li>--}}
{{--                                    <li><a href="single-product.html"><i class="fa fa-shopping-cart"></i></a></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                            <img src="{{asset('frontend/images/women-01.jpg')}}" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="down-content">--}}
{{--                            <h4>New Green Jacket</h4>--}}
{{--                            <span>$75.00</span>--}}
{{--                            <ul class="stars">--}}
{{--                                <li><i class="fa fa-star"></i></li>--}}
{{--                                <li><i class="fa fa-star"></i></li>--}}
{{--                                <li><i class="fa fa-star"></i></li>--}}
{{--                                <li><i class="fa fa-star"></i></li>--}}
{{--                                <li><i class="fa fa-star"></i></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-4">--}}
{{--                    <div class="item">--}}
{{--                        <div class="thumb">--}}
{{--                            <div class="hover-content">--}}
{{--                                <ul>--}}
{{--                                    <li><a href="single-product.html"><i class="fa fa-eye"></i></a></li>--}}
{{--                                    <li><a href="single-product.html"><i class="fa fa-star"></i></a></li>--}}
{{--                                    <li><a href="single-product.html"><i class="fa fa-shopping-cart"></i></a></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                            <img src="{{asset('frontend/images/women-02.jpg')}}" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="down-content">--}}
{{--                            <h4>Classic Dress</h4>--}}
{{--                            <span>$45.00</span>--}}
{{--                            <ul class="stars">--}}
{{--                                <li><i class="fa fa-star"></i></li>--}}
{{--                                <li><i class="fa fa-star"></i></li>--}}
{{--                                <li><i class="fa fa-star"></i></li>--}}
{{--                                <li><i class="fa fa-star"></i></li>--}}
{{--                                <li><i class="fa fa-star"></i></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-4">--}}
{{--                    <div class="item">--}}
{{--                        <div class="thumb">--}}
{{--                            <div class="hover-content">--}}
{{--                                <ul>--}}
{{--                                    <li><a href="single-product.html"><i class="fa fa-eye"></i></a></li>--}}
{{--                                    <li><a href="single-product.html"><i class="fa fa-star"></i></a></li>--}}
{{--                                    <li><a href="single-product.html"><i class="fa fa-shopping-cart"></i></a></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                            <img src="{{asset('frontend/images/women-03.jpg')}}" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="down-content">--}}
{{--                            <h4>Spring Collection</h4>--}}
{{--                            <span>$130.00</span>--}}
{{--                            <ul class="stars">--}}
{{--                                <li><i class="fa fa-star"></i></li>--}}
{{--                                <li><i class="fa fa-star"></i></li>--}}
{{--                                <li><i class="fa fa-star"></i></li>--}}
{{--                                <li><i class="fa fa-star"></i></li>--}}
{{--                                <li><i class="fa fa-star"></i></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-4">--}}
{{--                    <div class="item">--}}
{{--                        <div class="thumb">--}}
{{--                            <div class="hover-content">--}}
{{--                                <ul>--}}
{{--                                    <li><a href="single-product.html"><i class="fa fa-eye"></i></a></li>--}}
{{--                                    <li><a href="single-product.html"><i class="fa fa-star"></i></a></li>--}}
{{--                                    <li><a href="single-product.html"><i class="fa fa-shopping-cart"></i></a></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                            <img src="{{asset('frontend/images/kid-01.jpg')}}" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="down-content">--}}
{{--                            <h4>School Collection</h4>--}}
{{--                            <span>$80.00</span>--}}
{{--                            <ul class="stars">--}}
{{--                                <li><i class="fa fa-star"></i></li>--}}
{{--                                <li><i class="fa fa-star"></i></li>--}}
{{--                                <li><i class="fa fa-star"></i></li>--}}
{{--                                <li><i class="fa fa-star"></i></li>--}}
{{--                                <li><i class="fa fa-star"></i></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-4">--}}
{{--                    <div class="item">--}}
{{--                        <div class="thumb">--}}
{{--                            <div class="hover-content">--}}
{{--                                <ul>--}}
{{--                                    <li><a href="single-product.html"><i class="fa fa-eye"></i></a></li>--}}
{{--                                    <li><a href="single-product.html"><i class="fa fa-star"></i></a></li>--}}
{{--                                    <li><a href="single-product.html"><i class="fa fa-shopping-cart"></i></a></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                            <img src="{{asset('frontend/images/kid-02.jpg')}}" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="down-content">--}}
{{--                            <h4>Summer Cap</h4>--}}
{{--                            <span>$12.00</span>--}}
{{--                            <ul class="stars">--}}
{{--                                <li><i class="fa fa-star"></i></li>--}}
{{--                                <li><i class="fa fa-star"></i></li>--}}
{{--                                <li><i class="fa fa-star"></i></li>--}}
{{--                                <li><i class="fa fa-star"></i></li>--}}
{{--                                <li><i class="fa fa-star"></i></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-4">--}}
{{--                    <div class="item">--}}
{{--                        <div class="thumb">--}}
{{--                            <div class="hover-content">--}}
{{--                                <ul>--}}
{{--                                    <li><a href="single-product.html"><i class="fa fa-eye"></i></a></li>--}}
{{--                                    <li><a href="single-product.html"><i class="fa fa-star"></i></a></li>--}}
{{--                                    <li><a href="single-product.html"><i class="fa fa-shopping-cart"></i></a></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                            <img src="{{asset('frontend/images/kid-03.jpg')}}" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="down-content">--}}
{{--                            <h4>Classic Kid</h4>--}}
{{--                            <span>$30.00</span>--}}
{{--                            <ul class="stars">--}}
{{--                                <li><i class="fa fa-star"></i></li>--}}
{{--                                <li><i class="fa fa-star"></i></li>--}}
{{--                                <li><i class="fa fa-star"></i></li>--}}
{{--                                <li><i class="fa fa-star"></i></li>--}}
{{--                                <li><i class="fa fa-star"></i></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-12">--}}
{{--                    <div class="pagination">--}}
{{--                        <ul>--}}
{{--                            <li class="active">--}}
{{--                                <a href="#">1</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                            <a href="#">2</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="#">3</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="#">4</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="#">></a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
    <!-- ***** Products Area Ends ***** -->
@endsection
