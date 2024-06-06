@extends('layout')
@section('content')
    <!-- ***** Main Banner Area Start ***** -->
    <div class="main-banner" id="top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="left-content">
                        <div class="thumb">
                            <div class="inner-content">
                                <h4>Đây là Thai's store</h4>
                                <span>Thời trang sạch &amp; tạo nên phong cách của bạn</span>
                                <div class="main-border-button">
                                    <a href="{{route('danh_muc')}}">Mua Ngay!</a>
                                </div>
                            </div>
                            <img src="{{ asset('frontend/images/test.jpg') }}" alt="" height="" width="">

                        </div>
                    </div>
                </div>
{{--                <div class="col-lg-6">--}}
{{--                    <div class="right-content">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-lg-6">--}}
{{--                                <div class="right-first-image">--}}
{{--                                    <div class="thumb">--}}
{{--                                        <div class="inner-content">--}}
{{--                                            <h4>Thời trang nữ</h4>--}}
{{--                                            <span>Xu hướng thời trang nữ</span>--}}
{{--                                        </div>--}}
{{--                                        <div class="hover-content">--}}
{{--                                            <div class="inner">--}}
{{--                                                <h4>Phụ nữ</h4>--}}
{{--                                                <p>Đối với phái yếu , sắc đẹp và thời trang luôn là thứ gắn bó gân gũi nhất.</p>--}}
{{--                                                <div class="main-border-button">--}}
{{--                                                    <a href="{{route('danh_muc')}}">Khám phá ngay!</a>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <img src="{{asset('frontend/images/baner-right-image-01.jpg')}}">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-lg-6">--}}
{{--                                <div class="right-first-image">--}}
{{--                                    <div class="thumb">--}}
{{--                                        <div class="inner-content">--}}
{{--                                            <h4>Thời trang nam</h4>--}}
{{--                                            <span>Xu hướng thời trang nam</span>--}}
{{--                                        </div>--}}
{{--                                        <div class="hover-content">--}}
{{--                                            <div class="inner">--}}
{{--                                                <h4>Đàn ông</h4>--}}
{{--                                                <p>Một bộ trang phục đẹp sẽ miêu tả toàn bộ vẻ đẹp đích thực của phái mạnh.</p>--}}
{{--                                                <div class="main-border-button">--}}
{{--                                                    <a href="{{route('danh_muc')}}">Khám phá ngay!</a>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <img src="{{asset('frontend/images/baner-right-image-02.jpg')}}">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-lg-6">--}}
{{--                                <div class="right-first-image">--}}
{{--                                    <div class="thumb">--}}
{{--                                        <div class="inner-content">--}}
{{--                                            <h4>Thời trang trẻ em</h4>--}}
{{--                                            <span>Xu hướng thời trang trẻ em</span>--}}
{{--                                        </div>--}}
{{--                                        <div class="hover-content">--}}
{{--                                            <div class="inner">--}}
{{--                                                <h4>Trẻ em</h4>--}}
{{--                                                <p>Những trang phục phù hợp, giúp bé tự tin, năng động hơn. </p>--}}
{{--                                                <div class="main-border-button">--}}
{{--                                                    <a href="{{route('danh_muc')}}">Khám phá ngay!</a>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <img src="{{asset('frontend/images/baner-right-image-03.jpg')}}">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-lg-6">--}}
{{--                                <div class="right-first-image">--}}
{{--                                    <div class="thumb">--}}
{{--                                        <div class="inner-content">--}}
{{--                                            <h4>Phụ kiện</h4>--}}
{{--                                            <span>Xu hướng phụ kiện đặc biệt</span>--}}
{{--                                        </div>--}}
{{--                                        <div class="hover-content">--}}
{{--                                            <div class="inner">--}}
{{--                                                <h4>Phụ kiện</h4>--}}
{{--                                                <p>Ở chúng tôi, có toàn bộ những gì bạn cần và giúp không ích vào việc nâng cấp gu thẩm mỹ. </p>--}}
{{--                                                <div class="main-border-button">--}}
{{--                                                    <a href="{{route('danh_muc')}}">Khám phá ngay!</a>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <img src="{{asset('frontend/images/baner-right-image-04.jpg')}}">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
    </div>
    <!----------MAIN BANNER AREA END---------->

<!-- ***** Men Area Starts ***** -->
<section class="section" id="men">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-heading">
                    <h2>Thời trang nam nổi bật</h2>
                    <span>Đây là xu hướng thời trang của toàn thế giới vừa được cập nhật từ chúng tôi.</span>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="men-item-carousel">
                    <div class="owl-men-item owl-carousel">
                        <div class="item">
                            <div class="thumb">
                                <div class="hover-content">
                                    <ul>
                                        <li><a href="single-product.html"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="single-product.html"><i class="fa fa-star"></i></a></li>
                                        <li><a href="single-product.html"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <img src="{{asset('frontend/images/men-01_.jpg')}}" alt=""height="370px" width="390px">
                            </div>
                            <div class="down-content">
                                <h4>Classic Spring</h4>
                                <span>$120.00</span>
                                <ul class="stars">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="item">
                            <div class="thumb">
                                <div class="hover-content">
                                    <ul>
                                        <li><a href="single-product.html"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="single-product.html"><i class="fa fa-star"></i></a></li>
                                        <li><a href="single-product.html"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <img src="{{asset('frontend/images/men-02.jpg')}}" alt="">                            </div>
                            <div class="down-content">
                                <h4>Air Force 1 X</h4>
                                <span>$90.00</span>
                                <ul class="stars">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="item">
                            <div class="thumb">
                                <div class="hover-content">
                                    <ul>
                                        <li><a href="single-product.html"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="single-product.html"><i class="fa fa-star"></i></a></li>
                                        <li><a href="single-product.html"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <img src="{{asset('frontend/images/men-03.jpg')}}" alt="">                            </div>
                            <div class="down-content">
                                <h4>Love Nana ‘20</h4>
                                <span>$150.00</span>
                                <ul class="stars">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="item">
                            <div class="thumb">
                                <div class="hover-content">
                                    <ul>
                                        <li><a href="single-product.html"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="single-product.html"><i class="fa fa-star"></i></a></li>
                                        <li><a href="single-product.html"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <img src="{{asset('frontend/images/men-01.jpg')}}" alt="">                            </div>
                            <div class="down-content">
                                <h4>Classic Spring</h4>
                                <span>$120.00</span>
                                <ul class="stars">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Men Area Ends ***** -->

<!-- ***** Women Area Starts ***** -->
<section class="section" id="women">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-heading">
                    <h2>Thời trang nữ nổi bật</h2>
                    <span>Đây là xu hướng thời trang của toàn thế giới vừa được cập nhật từ chúng tôi.</span>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="women-item-carousel">
                    <div class="owl-women-item owl-carousel">
                        <div class="item">
                            <div class="thumb">
                                <div class="hover-content">
                                    <ul>
                                        <li><a href="single-product.html"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="single-product.html"><i class="fa fa-star"></i></a></li>
                                        <li><a href="single-product.html"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <img src="{{asset('frontend/images/women-01.jpg')}}" alt="">
                            </div>
                            <div class="down-content">
                                <h4>New Green Jacket</h4>
                                <span>$75.00</span>
                                <ul class="stars">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="item">
                            <div class="thumb">
                                <div class="hover-content">
                                    <ul>
                                        <li><a href="single-product.html"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="single-product.html"><i class="fa fa-star"></i></a></li>
                                        <li><a href="single-product.html"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <img src="{{asset('frontend/images/women-02.jpg')}}" alt="">
                            </div>
                            <div class="down-content">
                                <h4>Classic Dress</h4>
                                <span>$45.00</span>
                                <ul class="stars">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="item">
                            <div class="thumb">
                                <div class="hover-content">
                                    <ul>
                                        <li><a href="single-product.html"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="single-product.html"><i class="fa fa-star"></i></a></li>
                                        <li><a href="single-product.html"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <img src="{{asset('frontend/images/women-03.jpg')}}" alt="">
                            </div>
                            <div class="down-content">
                                <h4>Spring Collection</h4>
                                <span>$130.00</span>
                                <ul class="stars">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="item">
                            <div class="thumb">
                                <div class="hover-content">
                                    <ul>
                                        <li><a href="single-product.html"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="single-product.html"><i class="fa fa-star"></i></a></li>
                                        <li><a href="single-product.html"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <img src="{{asset('frontend/images/women-01.jpg')}}" alt="">
                            </div>
                            <div class="down-content">
                                <h4>Classic Spring</h4>
                                <span>$120.00</span>
                                <ul class="stars">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Women Area Ends ***** -->

<!-- ***** Kids Area Starts ***** -->
<section class="section" id="kids">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-heading">
                    <h2>Thời trang của bé</h2>
                    <span> Những trang phục xinh xắn, đáng yêu, tạo thêm phần xinh tươi của những bé.</span>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="kid-item-carousel">
                    <div class="owl-kid-item owl-carousel">
                        <div class="item">
                            <div class="thumb">
                                <div class="hover-content">
                                    <ul>
                                        <li><a href="single-product.html"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="single-product.html"><i class="fa fa-star"></i></a></li>
                                        <li><a href="single-product.html"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <img src="{{asset('frontend/images/kid-01.jpg')}}" alt="">
                            </div>
                            <div class="down-content">
                                <h4>School Collection</h4>
                                <span>$80.00</span>
                                <ul class="stars">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="item">
                            <div class="thumb">
                                <div class="hover-content">
                                    <ul>
                                        <li><a href="single-product.html"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="single-product.html"><i class="fa fa-star"></i></a></li>
                                        <li><a href="single-product.html"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <img src="{{asset('frontend/images/kid-02.jpg')}}" alt="">

                            </div>
                            <div class="down-content">
                                <h4>Summer Cap</h4>
                                <span>$12.00</span>
                                <ul class="stars">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="item">
                            <div class="thumb">
                                <div class="hover-content">
                                    <ul>
                                        <li><a href="single-product.html"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="single-product.html"><i class="fa fa-star"></i></a></li>
                                        <li><a href="single-product.html"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <img src="{{asset('frontend/images/kid-03.jpg')}}" alt="">
                            </div>
                            <div class="down-content">
                                <h4>Classic Kid</h4>
                                <span>$30.00</span>
                                <ul class="stars">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="item">
                            <div class="thumb">
                                <div class="hover-content">
                                    <ul>
                                        <li><a href="single-product.html"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="single-product.html"><i class="fa fa-star"></i></a></li>
                                        <li><a href="single-product.html"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <img src="{{asset('frontend/images/kid-01.jpg')}}" alt="">

                            </div>
                            <div class="down-content">
                                <h4>Classic Spring</h4>
                                <span>$120.00</span>
                                <ul class="stars">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Kids Area Ends ***** -->

<!-- ***** Explore Area Starts ***** -->
<section class="section" id="explore">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="left-content">
                    <h2>Khám phá thêm</h2>
                    <span> Ngoài bán thời trang, chúng tôi còn có một sở thích khác đó là viết blog và chia sẽ thông tin cũng như cảm nghĩ về các hoạt động, sự kiện về thời trang cũng như thể thao.</span>
                    <div class="quote">
                        <i class="fa fa-quote-left"></i><p>Chúng tôi luôn muốn ngành dịch vụ thời trang nước nhà được phát triển, đó là lý do chúng tôi bắt đầu mọi thứ.</p>
                    </div>
                    <p>Hi vọng những kiến thức của chúng mình đem tói có thể giúp ích một phần nhỏ trong đời sống của bạn.</p>
                    <p>Còn về thể thao, thật sự những cầu thủ có gu ăn mặc rất thú vị, thậm chí khi họ diện đồ, có thể còn hấp dẫn hơn cả người mẫu. Hãy theo dõi Blog của chúng tớ để cậu có thể chiêm nghiệm vẻ đẹp ấy.</p>
                    <div class="main-border-button">
                        <a href="products.html">Discover More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="right-content">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="leather">
                                <h4>Fashion</h4>
                                    <span>fashionista around the world.</span>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="first-image">
                                <img src="{{asset('frontend/images/fashionista.jpg')}}" alt=""height="285px" width="240px" >
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="second-image">
                                <img src="{{asset('frontend/images/street.jpg')}}" alt=""height="285px" width="240px" >

                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="types">
                                <h4>Sports </h4>
                                <span>Sport Streetstyle around the world.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Explore Area Ends ***** -->
<!-- ***** Social Area Starts ***** -->
<section class="section" id="social">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2>Social Media</h2>
                    <span>Ngắm xem thời trang đến từ các nhà nghệ thuật nỗi tiếng thông qua các kênh mạng xã hội.</span>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row images">
            <div class="col-2">
                <div class="thumb">
                    <div class="icon">
                        <a href="https://www.kaufmann-store.com/en/the-journal/people/david-beckham">
                            <h6>David Beckham cùng bộ suit lịch lãm</h6>
                            <i class="fa fa-xing"></i>
                        </a>
                    </div>
                    <img src="{{ asset('frontend/images/instagram-01.jpg') }}"  height="185px" width="185px">
                </div>
            </div>
            <div class="col-2">
                <div class="thumb">
                    <div class="icon">
                        <a href="https://www.pinterest.com/pin/582442164283752055/">
                            <h6>Chris Evans và áo training từ Under Armour</h6>
                            <i class="fa fa-pinterest"></i>
                        </a>
                    </div>
                    <img src="{{ asset('frontend/images/chris.jpg')}}" alt="" height="185px" width="185px" >
                </div>
            </div>
            <div class="col-2">
                <div class="thumb">
                    <div class="icon">
                        <a href="https://luxuo.vn/style/son-heung-min-tu-doi-chan-vang-tro-thanh-dai-su-burberry.html">
                            <h6>Sao hàn Son Heung Min và phong cách thời trang của anh ấy</h6>
                            <i class="fa fa-level-up"></i>
                        </a>
                    </div>
                    <img src="{{ asset('frontend/images/son.jpg')}}" alt="" height="185px" width="185px" >
                </div>
            </div>
            <div class="col-2">
                <div class="thumb">
                    <div class="icon">
                        <a href="https://x.com/jennieglobal_/status/1573857952376954880">
                            <h6>Jennie và chiếc áo jersey của đội bóng Manchester United</h6>
                            <i class="fa fa-twitch"></i>
                        </a>
                    </div>
                    <img src="{{ asset('frontend/images/jenny.jpg')}}" alt="" height="185px" width="185px" >
                </div>
            </div>
            <div class="col-2">
                <div class="thumb">
                    <div class="icon">
                        <a href="https://www.instagram.com/modeblogg/">
                            <h6>phong cách thời trang của bạn bè quốc tế thông qua instagram</h6>
                            <i class="fa fa-instagram"></i>
                        </a>
                    </div>
                    <img src="{{ asset('frontend/images/instagram-05.jpg')}}" alt="">
                </div>
            </div>
            <div class="col-2">
                <div class="thumb">
                    <div class="icon">
                        <a href="https://www.amazon.de/-/en/Grealish-England-Fashion-Football-Decoration/dp/B09CYWYXWH">
                            <h6>Jack Grealish được lên bìa tạp chí của Amazon </h6>
                            <i class="fa fa-amazon"></i>
                        </a>
                    </div>
                    <img src="{{ asset('frontend/images/jack_.jpg')}}" alt="" height="185px" width="185px" >
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

