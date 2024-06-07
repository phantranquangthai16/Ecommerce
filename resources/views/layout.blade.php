<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Alvaro Ecommerce</title>


    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/bootstrap.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/font-awesome.css')}}">

    <link rel="stylesheet" href="{{asset('frontend/css/templatemo-hexashop.css')}}">

    <link rel="stylesheet" href="{{asset('frontend/css/owl-carousel.css')}}">

    <link rel="stylesheet" href="{{asset('frontend/css/lightbox.css')}}">

    <link rel="stylesheet" href="{{asset('frontend/css/thai.css')}}">
    <!--


    https://templatemo.com/tm-571-hexashop

    -->
</head>

<body>
<?php
// Tạo một biến để lưu trữ đường dẫn tới tệp CSS
$css_path = "frontend/css/bootstrap.min.css";
$css_path = "frontend/css/font-awesome.css";
$css_path = "frontend/css/owl-carousel.css";
$css_path = "frontend/css/lightbox.css";

?>




<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="{{ url('') }}" class="logo">
                        <img src="{{ asset('frontend/images/logo.png') }}" height="111" width="111"
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li class="scroll-to-section"><a href="#top" class="">Trang chủ</a></li>
                        <li class="scroll-to-section"><a href="#men">Nam</a></li>
                        <li class="scroll-to-section"><a href="#women">Nữ</a></li>
                        <li class="scroll-to-section"><a href="#kids">Trẻ Em</a></li>
                        <li class="submenu">
                            <a href="javascript:;">Trang</a>
                            <ul>
                                <li><a href="about.html">Về chúng tôi</a></li>
                                <li><a href="product.blade.php">Sản phẩm</a></li>
                            </ul>
                        </li>
{{--                        <li class="submenu">--}}
{{--                            <a href="javascript:;">Features</a>--}}
{{--                            <ul>--}}
{{--                                <li><a href="#">Features Page 1</a></li>--}}
{{--                                <li><a href="#">Features Page 2</a></li>--}}
{{--                                <li><a href="#">Features Page 3</a></li>--}}
{{--                                <li><a rel="nofollow" href="https://templatemo.com/page/4" target="_blank">Template Page 4</a></li>--}}
{{--                            </ul>--}}
{{--                        </li>--}}
                        <li class="scroll-to-section"><a href="#explore">khám phá</a></li>
                        <li><a href="/login" class="custom-button">
                              Đăng nhập</a>
                        </li>
                        <li><a href="/register" class="custom-button">
                                Đăng ký</a>
                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->



<!---------------------------MAIN--------------------------------->
@yield('content')

<!-- ***** Footer Start ***** -->

<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="first-item">
                    <div class="logo">
                        <h4>Thông tin liên hệ</h4>
                    </div>
                    <ul>
                        <li><a href="#">Sài Gòn, Việt Nam </a></li>
                        <li><a href="#">phantranquangthai16@gmail.com</a></li>
                        <li><a href="#">090-369-xxxx</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3">
                <h4>Shopping &amp; Categories</h4>
                <ul>
                    <li><a href="#">Thời trang nam</a></li>
                    <li><a href="#">Thời trang nữ</a></li>
                    <li><a href="#">Thời trang cho bé</a></li>
                </ul>
            </div>


            <div class="col-lg-12">
                <div class="under-footer">
                    <p>dự án xây dựng web thương mại điện tử </p>

                    <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- ***** Footer End ***** -->

<!-- jQuery -->
<script src="{{asset('frontend/js/jquery-2.1.0.min.js')}}"></script>

<!-- Bootstrap -->
<script src="{{asset('frontend/js/popper.js')}}"></script>
<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>

<!-- Plugins -->
<script src="{{asset('frontend/js/owl-carousel.js')}}"></script>
<script src="{{asset('frontend/js/accordions.js')}}"></script>
<script src="{{asset('frontend/js/datepicker.js')}}"></script>
<script src="{{asset('frontend/js/scrollreveal.min.js')}}"></script>
<script src="{{asset('frontend/js/waypoints.min.js')}}"></script>
<script src="{{asset('frontend/js/jquery.counterup.min.js')}}"></script>
<script src="{{asset('frontend/js/imgfix.min.js')}}"></script>
<script src="{{asset('frontend/js/slick.js')}}"></script>
<script src="{{asset('frontend/js/lightbox.js')}}"></script>
<script src="{{asset('frontend/js/isotope.js')}}"></script>

<!-- Global Init -->
<script src="{{asset('frontend/js/custom.js')}}"></script>

<script>

    $(function() {
        var selectedClass = "";
        $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
            $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
                $("."+selectedClass).fadeIn();
                $("#portfolio").fadeTo(50, 1);
            }, 500);

        });
    });

</script>

</body>
</html>
