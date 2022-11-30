<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookGarden | Mua sách Online</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <link rel="stylesheet" href="{{asset('frontend/css/base.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/sell.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/detail.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/detailPayment.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/historyOrder.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/payment.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/cart.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/signInSignUp.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/accountInfo.css')}}">
    
    <link rel="stylesheet" href="{{ asset('frontend/css/all.css') }}">
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" />   --}}
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> --}}
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">
</head>
<body>
    <script src="{{asset('frontend/js/Validator.js')}}"></script>

    <div class="app">
        <header class="header">
            <nav class="navbar">
                <div class="grid"> 
                    <ul class="navbar__list">
                        <li class="navbar__item navbar_logo"><a href="#" class="navbar__link">BookGarden</a></li>
                    </ul>
                    <?php
                        $shipping_id = Session::get('shipping_id');
                    ?>
                    @guest('customer')
                    @if (Route::has('loginregis'))
                    <ul class="navbar__list">
                      
                        <li class="navbar__item"><a href="{{URL::to('/signInSignUp')}}" class="navbar__link">Đăng nhập</a></li>
                        <li class="navbar__item"><a href="{{URL::to('/signInSignUp')}}" class="navbar__link">Đăng ký</a></li>

                    </ul>
                        @endif
                        @else
    
                        <ul class="navbar__list">
                        <li class="navbar__item"><a href="{{URL::to('/logout-customer')}}" class="navbar__link">Đăng xuất</a></li>
                        <li class="navbar__item"><a href="{{URL::to('/accountInfo')}}/{{ auth('customer')->user()->customer_id }}" class="navbar__link">{{ auth('customer')->user()->customer_name }}</a></li>
                        <li class="navbar__item"><a href="{{URL::to('/historyOrder')}}/{{ auth('customer')->user()->customer_id }}" class="navbar__link">Kiểm tra đơn hàng</a></li>
                       
                    </ul>
                      
                      @endguest   
                   
                </div>
            </nav>

            <div class="header__mid">
                <div class="grid">
                    <a href="{{URL::to('/')}}" class="header-mid__logo-link">
                        <img src="{{asset('frontend/img/logo2.png')}}" alt="" class="header-mid__logo">
                    </a>
                    <div class="header-mid__search-box">
                        
                        <form class="header-mid__search-box" action="search" method="GET">
                            <select class="header-mid__select header-mid__search-box__input" name="search-option" id="searchSelect">
                                <option value="0" class="header-mid__option">Tất cả</option>
                                @foreach ($categoryASC as $key => $value)
                                @if ($value->status == 1) 
                                    <option value="{{$value->category_id}}" class="header-mid__option">{{$value->category_name}}</option>
                                @endif
                                @endforeach      
                            </select>
                            <div class="header-mid__search-group">
                                    <input type="search" name="tukhoa" class="header-mid__search header-mid__search-box__input" placeholder="Bạn cần tìm gì?">
                                    <button class="header-mid__button header-mid__search-box__input"><i class="fa-solid fa-magnifying-glass"></i></button>
                            </div>
                        </form>

                    </div>

                    <!-- Div chứa thông tin, nút -->
                    <div class="header-mid__functions">
                        <div class="header-mid__info">
                            <i class="fa-regular fa-headset"></i>
                            <div class="header-mid-info__title">
                                <h2>012 345 698</h2>
                                <span>Hot line</span>
                            </div>
                        </div>

                        <a href="{{URL::to('/cart')}}" class="header-mid__cartlink">
                            <div class="header-mid__cart">
                                <i class="header-mid__cart-logo fa-regular fa-cart-shopping"></i>
                                <span class="header-mid__cart-title">Giỏ hàng</span>
                                <span class="header-mid__cart-quantity">(<?php echo Cart::count() ?>)</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Phần dưới header -->
            <div class="header__bottom">
                <div class="grid">
                    <!-- Xài bootstrap chắc biết =)) -->
                    <div class="row">
                        <div class="header-bottom__container col-5">
                            <!-- danh mục header -->
                            <div class="header__category">
                                <i class="header-category__icon fa-solid fa-bars"></i>
                                <span class="header-category__title">
                                    Danh mục sản phẩm
                                </span>
                                <i class="header-category__icon fa-sharp fa-solid fa-caret-down"></i>
                                <!-- phần drop xuống của danh mục (level 1: dọc) -->
                                <div class="header-category__dropdown">
                                    <ul class="header-dropdown__list">
                                        <!-- 1 loại danh mục nằm trong thẻ li -->
                                        @foreach ($categoryASC as $key => $value)
                                        @if ($value->status == 1)
                                            <li class="header-dropdown__item">
                                                <a href="{{url('category/' . $value->category_id)}}" class="header-dropdown__link">
                                                    <div class="header-dropdown__link-box">
                                                        <i class="header-dropdown__link-box__icon fa-solid fa-bars"></i>
                                                        <span class="header-dropdown__link-box__title">
                                                            {{$value->category_name}}
                                                        </span>
                                                    </div>
                                                    <i class="header-dropdown__link-icon fa-solid fa-caret-right"></i>
                                                </a>
                                               
                                            </li>  
                                            @endif 
                                        @endforeach 
                                    </ul>
                                    
                                </div>
                            </div>

                            <div class="header__category">
                                <i class="header-category__icon fa-solid fa-bars"></i>
                                <span class="header-category__title">
                                    Nhà xuất bản
                                </span>
                                <i class="header-category__icon fa-sharp fa-solid fa-caret-down"></i>
                                <!-- phần drop xuống của danh mục (level 1: dọc) -->
                                <div class="header-category__dropdown">
                                    <ul class="header-dropdown__list">
                                        <!-- 1 loại danh mục nằm trong thẻ li -->
                                        @foreach ($brandASC as $key => $value)
                                        @if ($value->brand_status == 1)
                                            <li class="header-dropdown__item">
                                                <a href="{{url('brand/' . $value->brand_id)}}" class="header-dropdown__link">
                                                    <div class="header-dropdown__link-box">
                                                        <i class="header-dropdown__link-box__icon fa-solid fa-bars"></i>
                                                        <span class="header-dropdown__link-box__title">
                                                            {{$value->brand_name}}
                                                        </span>
                                                    </div>
                                                    <i class="header-dropdown__link-icon fa-solid fa-caret-right"></i>
                                                </a>
                                               
                                            </li>   
                                            @endif
                                        @endforeach 
                                        
                                        
                                    </ul>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <!-- cần thì mới xài, nó nằm kế bên cái danh mục sản phẩm -->
                            <div class="empty">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </header>

        <!-- END HEADER -->


        <!-- BODY -->

        @yield('client_content')
    
        <!-- END BODY -->


        <!-- FOOTER -->

        <footer class="app__footer">
            <div class="grid">
                <div class="row">
                    <div class="footer__intro">
                        <h2 class="footer-intro__title">NHÀ SÁCH TRỰC TUYẾN BOOKGARDEN.COM</h2>
                        <p class="footer-intro__content">Mua sách online tại nhà sách trực tuyến Bookgarden.vn để được cập nhật nhanh nhất các tựa sách đủ thể loại với mức giảm 15 – 35% cùng nhiều ưu đãi, quà tặng kèm. Qua nhiều năm, không chỉ là địa chỉ tin cậy để bạn mua sách trực tuyến, Bookbuy còn có quà tặng, văn phòng phẩm, vật dụng gia đình,…với chất lượng đảm bảo, chủng loại đa dạng, chế độ bảo hành đầy đủ và giá cả hợp lý từ hàng trăm thương hiệu uy tín trong và ngoài nước. Đặc biệt, bạn có thể chọn những mẫu sổ tay handmade hay nhiều món quà tặng sinh nhật độc đáo chỉ có tại Bookgarden.vn.</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col">

                        <div class="footer__container">  
                            <div class="row">   
                                <div class="col-3">
                                    <div class="footer__box">
                                        <h2 class="footer-box__title">VỀ CHÚNG TÔI</h2>
                                        <ul class="footer-box__list">
                                            <li class="footer-box__item">
                                                <a href="" class="footer-box__link">Giới thiệu</a>
                                            </li>
                                            <li class="footer-box__item">
                                                <a href="" class="footer-box__link">Tin tức</a>
                                            </li>
                                            <li class="footer-box__item">
                                                <a href="" class="footer-box__link">Liên hệ</a>
                                            </li>
                                            <li class="footer-box__item">
                                                <a href="" class="footer-box__link">Đăng ký</a>
                                            </li>
                                            <li class="footer-box__item">
                                                <a href="" class="footer-box__link">Quên mật khẩu</a>
                                            </li>
                                            <li class="footer-box__item">
                                                <a href="" class="footer-box__link">Tài khoản</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-3">
                                    <div class="footer__box">
                                        <h2 class="footer-box__title">HỖ TRỢ KHÁCH HÀNG</h2>
                                        <ul class="footer-box__list">
                                            <li class="footer-box__item">
                                                <a href="" class="footer-box__link">Hotline: 0933 109 009</a>
                                            </li>
                                            <li class="footer-box__item">
                                                <a href="" class="footer-box__link">Hướng dẫn khắc phục lỗi khi sử dụng website</a>
                                            </li>
                                            <li class="footer-box__item">
                                                <a href="" class="footer-box__link">Hướng dẫn mua sách</a>
                                            </li>
                                            <li class="footer-box__item">
                                                <a href="" class="footer-box__link">Hướng dẫn thanh toán</a>
                                            </li>
                                            <li class="footer-box__item">
                                                <a href="" class="footer-box__link">Kỹ thuật & Bảo hành: 0909 8394 923</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-3">
                                    <a href="{{URL::to('/')}}" class="footer__logo-link">
                                        <img src="{{asset('frontend/img/logo2.png')}}" alt="" class="footer__logo">
                                    </a>
                                </div>

                                <div class="col-3">
                                    
                                </div>
                                
                            </div> 
                            
                            
                        </div>
                    </div>
                </div>
                
            </div>
        </footer>
    </div>

    
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="{{('frontend/js/bootstrap.min.js')}}"></script>
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-3"></script>
    <link href= "{{asset('backend/css/toastr.css')}}" rel="stylesheet">
    <script src="{{asset('backend/js/toastr.min.js')}}"></script>

    {!! Toastr::message() !!}
    @include('sweetalert::alert')
   
</body>
</html>