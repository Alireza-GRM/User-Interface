<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.5.0/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('Css/styleFront.css') }}">
    <link rel="stylesheet" href="{{ asset('Css/loginRegister.css') }}">
</head>
<body class="bg-light" dir="rtl">
  
    {{-- Header --}}
    <nav class="border-nav container-fluid mt-4 navbar navbar-expand-lg bg-white px-lg-5 py-lg-2 shadow-sm sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand me-3 fw-Bold fs-3 h-font" href="{{ route('home') }}">فروشگاه جدید</a>

            <!-- menu -->
            <button class="navbar-toggler" style="width: 35px; height: 35px;" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">
                <span class="navbar-toggler-icon" style="width: 20px; margin-right: -5px; margin-top: -2px;"></span>
            </button>
            <div class="offcanvas offcanvas-end menu-width menu-panel" style="width: 270px; top: 20px; right: 13px; bottom: 20px;" data-bs-scroll="false" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
                <div class="offcanvas-header">
                    <h5 class="pt-3 pe-3" style="font-size: 20px;">فروشگاه جدید</h5>
                    <button class="navbar-toggler" style="width: 35px; height: 35px; position: absolute; left: 20px;" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">
                        <span class="navbar-toggler-icon" style="width: 20px; margin-right: -5px; margin-top: -2px;"></span>
                    </button>
                </div>
                <div class="line-menu bg-dark"></div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav menu-txt-items">
                        <li class="nav-item">
                            @if (Auth::user())
                                <div class="nav-item dropdown TextRTL d-md-none">
                                    <a class="nav-link dropdown-toggle me-2" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        {{ Auth::user()->name }}
                                    </a>
                                    <ul class="dropdown-menu TextRTL" style="font-size: 14px;">
                                        <li><a class="dropdown-item" disabled style="font-size: 14px; text-align: right;">کد معرف : {{ Auth::user()->referral_me }}</a></li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li><a class="dropdown-item" href="{{ route('logout') }}" style="font-size: 14px; color: red; text-align: right;">خروج از سیستم</a></li>
                                    </ul>
                                </div>
                            @else
                                <a class="nav-link me-2" aria-current="page" href="{{ route('home') }}">خانه</a>
                            @endif
                        </li>
                        <li class="nav-item">
                            <a class="nav-link me-2" href="#">تست یک</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link me-2" href="#">تست دو</a>
                        </li>
                        <li class="nav-item dropdown TextRTL">
                            <a class="nav-link dropdown-toggle me-2" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                تست سه
                            </a>
                            <ul class="dropdown-menu TextRTL" style="font-size: 14px;">
                                <li><a class="dropdown-item" href="#">مثال۱</a></li>
                                <li><a class="dropdown-item" href="#">مثال۲</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">مثال۳</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link me-2" href="#">تست چهار</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link me-2" href="#">تست پنج</a>
                        </li>
                    </ul>
                <div class="menu-btn-items">
                    @if (Auth::user())
                    <div class="nav-item dropdown TextRTL d-none d-md-block" style="display: flex; align-items: center; float: right;">
                        <a class="nav-link dropdown-toggle ms-2 mt-2 me-2" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu TextRTL" style="font-size: 14px;">
                            <li>
                                <a class="dropdown-item" disabled style="font-size: 14px; text-align: right;">
                                    کد معرف : {{ Auth::user()->referral_me }}
                                </a>
                            </li>
                            <li><hr class="dropdown-divider"></li>
                            <li>
                                <a class="dropdown-item" href="{{ route('logout') }}" style="font-size: 14px; color: red; text-align: right;">
                                    خروج از سیستم
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="nav-item dropdown TextRTL d-none d-md-block" style="display: flex; align-items: center; float: right;">
                        <img src="{{ asset('ImageUser/'.Auth::user()->profile_picture) }}" class="rounded-5" width="35px" height="35px" style="margin-left: 10px; border: 2px solid rgb(130, 130, 130)">
                    </div>
                    @else
                        <a type="button" href="{{ route('login') }}" class="btn shadow login-nav">ورود</a>
                        <a type="button" href="{{ route('register') }}" class="btn text-white shadow me-lg-2 me-2 ms-1 pe-3 ps-3 register-nav">ایجاد حساب</a>
                    @endif
                </div>
            </div>
            <div class="offcanvas-footer">
                <div class="p-1 m-2 rounded-4 hidden-developed align-items-center">
                    <h6 class="text-center text-dark" style="font-size: 13px;">Designed and Developed in 2024© by <span style="color: #02caac; font-size: 15px;">Alireza Garmkhorany</span></h6>
                </div>
            </div>
        </div>
    </nav>
    <div id="overlay"></div>

    @yield('content')

    {{-- Footer --}}
    <div class="bg-dark">
        <div class="container">
            <footer class="py-5">
                <div class="row">
                    <!-- بخش نام سایت و توضیحات -->
                    <div class="col-12 text-center mb-4 site-info">
                        <h4 class="text-white mb-4 HotelName">سایت فروشگاهی</h4>
                        <p class="text-white px-4 light">
                            توضیحات سایت فروشگاهی جدید و درباره ما
                        </p>
                    </div>
                    <!-- بخش لینک‌های مفید و راهنمایی -->
                    <div class="col-6 col-md-2 mb-3 useful-links">
                        <h5 class="text-white me-4 TextRTL">لینک مفید</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2 TextRTL"><a href="#" class="nav-link p-0 text-white light">خانه</a></li>
                            <li class="nav-item mb-2 TextRTL"><a href="#" class="nav-link p-0 text-white light">صفحه اصلی</a></li>
                            <li class="nav-item mb-2 TextRTL"><a href="#" class="nav-link p-0 text-white light">نماد</a></li>
                            <li class="nav-item mb-2 TextRTL"><a href="#" class="nav-link p-0 text-white light">مقاله</a></li>
                            <li class="nav-item mb-2 TextRTL"><a href="#" class="nav-link p-0 text-white light">درباره ما</a></li>
                        </ul>
                    </div>
    
                    <div class="col-6 col-md-2 mb-3 guide-links">
                        <h5 class="text-white me-4 TextRTL">راهنمایی</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2 TextRTL"><a href="#" class="nav-link p-0 text-white light">خانه</a></li>
                            <li class="nav-item mb-2 TextRTL"><a href="#" class="nav-link p-0 text-white light">صفحه اصلی</a></li>
                            <li class="nav-item mb-2 TextRTL"><a href="#" class="nav-link p-0 text-white light">نماد</a></li>
                            <li class="nav-item mb-2 TextRTL"><a href="#" class="nav-link p-0 text-white light">مقاله</a></li>
                            <li class="nav-item mb-2 TextRTL"><a href="#" class="nav-link p-0 text-white light">درباره ما</a></li>
                        </ul>
                    </div>
    
                    <!-- بخش خبرنامه -->
                    <div class="col-12 col-md-4 mb-3 newsletter-form">
                        <form class="px-4">
                            <h5 class="text-white text-center">در خبرنامه ما مشترک شوید</h5>
                            <p class="text-white text-center light">خلاصه ماهانه چیزهای جدید و هیجان انگیز ما.</p>
                            <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                                <label for="newsletter1" class="visually-hidden text-white">آدرس ایمیل :</label>
                                <input id="newsletter1" type="text" class="form-control text-center" placeholder="ایمیل">
                                <button class="btn custom-bg" type="button">ارسال</button>
                            </div>
                        </form>
                    </div>
    
                    <div class="row col-12 col-md-4 mb-3 px-5 text-center mt-4 newsletter-form">
                        <div class="d-flex w-100 justify-content-center gap-2">
                            <!-- اولین عکس -->
                            <img src="{{ asset('Logo/eNamad.png') }}" class="rounded-3 img-fluid text-center imgENamad" alt="eNamad Logo 1">
                            <!-- دومین عکس -->
                            <img src="{{ asset('Logo/eNamad.png') }}" class="rounded-3 img-fluid text-center imgENamad" alt="eNamad Logo 2">
                        </div>
                    </div>
                </div>
                <!-- خط و متن کپی‌رایت -->
                <div class="d-flex flex-column flex-sm-row justify-content-between py-0 my-4 border-top copyright-info">
                    <p class="text-white text-center mt-3 light">© 2024 Company, Inc. کلیه حقوق محفوظ است.</p>
                </div>
            </footer>
        </div>
    </div>

    {{-- Script --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
    <script>
    var swiper = new Swiper(".mySwiper", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "3",
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 200,
        modifier: 1,
        slideShadows: false,
      },
      pagination: {
        el: ".swiper-pagination",
      },
      breakpoints: {
        300: {
          slidesPerView: 1,
        },
        480: {
          slidesPerView: 2,
        },
        768: {
          slidesPerView: 3,
        },
        1024: {
          slidesPerView: 3,
        },
      },
      loop: true,
      delay: 4000,
      autoplay: true,
    });
    </script>
    <script>
      var swiper = new Swiper(".AboutSwiper", {
        slidesPerView: 4,
        spaceBetween: 40, 
        pagination: {
          el: ".swiper-pagination",
        },
        breakpoints: {
          300: {
            slidesPerView: 1,
          },
          480: {
            slidesPerView: 2,
          },
          768: {
            slidesPerView: 3,
          },
          1024: {
            slidesPerView: 4,
          },
        },
        loop: true,
        delay: 3000,
        autoplay: true,
      });
    </script>
    <script>
    const offcanvasMenu = document.getElementById('offcanvasScrolling');
    const overlay = document.getElementById('overlay');

    offcanvasMenu.addEventListener('show.bs.offcanvas', function () {
        overlay.classList.add('active');
    });

    offcanvasMenu.addEventListener('hide.bs.offcanvas', function () {
        overlay.classList.remove('active');
    });
    </script>
</body>
</html>