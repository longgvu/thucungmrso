@extends('layouts.master')

@section('title', 'Home')

@section('header')
@include('partials.header')
@endsection

@section('content')
<div class="pet-banner">
    <!-- Hình ảnh thú cưng -->
    <img src="{{ URL::asset('images/banner2.jpg') }}" alt="Pet Image" class="pet-image">

    <!-- Nội dung bên trong banner -->
    <div class="overlay">
        <!-- Nội dung bên trong overlay -->
        <div class="banner-content">
            <p style="margin-bottom:0px;">Hãy cùng chúng tôi mang lại điều tuyệt vời
                nhất cho động vật của bạn!</p>
        </div>
    </div>
</div>
<main class="justify-content-center">
    <section class="container-fluid justify-content-center p-5 align-items-center">
        <div class="row justify-content-center pb-4">
            <button class="btn new-product col-4"> <i class="fas fa-star text-warning"></i> SẢN PHẨM MỚI</button>
            <button class="btn best-seller col-4">SẢN PHẨM BÁN CHẠY</button>
        </div>
        <div class="container-fluid ">
            <div class="row justify-content-center">
                <!-- Card Sản phẩm 1 -->
                @foreach($products as $pro)
                <div class="col-md-2">
                    <div class="card">
                        <img src="{{ URL::asset('images/sanpham.jpg')}}" class="card-img-top p-2" alt="Sản phẩm 1">
                        <div class="card-body p-2">
                            <b class="card-title">{{$pro->tittle}}</b>
                            <h6 class="text-primary">Tên Hãng SP</h6>

                            <div class="row justify-content-center">
                                <div class="col">
                                    <p class="card-text" style="margin-bottom:2px;color:#BBBBBB	;"><s>90,000 vnđ</s>
                                    </p>
                                    <p class="card-text text-danger" style="font-weight:bolder;font-size:18px;">
                                        75,000 vnđ</p>
                                </div>
                                <div class="col">
                                    <form method="post" action="{{ route('cart.add', $pro->id) }}">
                                        @csrf
                                        <input type="hidden" name="products_id" value="{{ $pro->id }}">
                                        <button type="submit" class="btn btn-danger mt-auto add-to-cart-btn" data-product-id="1">Add to Cart</button>
                                    </form>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                @endforeach
                <!-- Card Sản phẩm 2 -->
                <div class="col-md-2">
                    <div class="card">
                        <img src="{{ URL::asset('images/sanpham.jpg')}}" class="card-img-top p-2" alt="Sản phẩm 1">
                        <div class="card-body p-2">
                            <b class="card-title">Balo Phi Hành Gia Vận Chuyển Chó Mèo</b>
                            <h6 class="text-primary">Tên Hãng SP</h6>

                            <div class="row justify-content-center">
                                <div class="col">
                                    <p class="card-text" style="margin-bottom:2px;color:#BBBBBB	;"><s>90,000 vnđ</s>
                                    </p>
                                    <p class="card-text text-danger" style="font-weight:bolder;font-size:18px;">
                                        75,000 vnđ</p>
                                </div>
                                <div class="col"><button class="btn btn-danger">Giỏ hàng</button></div>
                            </div>


                        </div>
                    </div>
                </div>
                <!-- Card Sản phẩm 3 -->
                <div class="col-md-2">
                    <div class="card">
                        <img src="{{ URL::asset('images/sanpham.jpg')}}" class="card-img-top p-2" alt="Sản phẩm 1">
                        <div class="card-body p-2">
                            <b class="card-title">Balo Phi Hành Gia Vận Chuyển Chó Mèo</b>
                            <h6 class="text-primary">Tên Hãng SP</h6>

                            <div class="row justify-content-center">
                                <div class="col">
                                    <p class="card-text" style="margin-bottom:2px;color:#BBBBBB	;"><s>90,000 vnđ</s>
                                    </p>
                                    <p class="card-text text-danger" style="font-weight:bolder;font-size:18px;">
                                        75,000 vnđ</p>
                                </div>
                                <div class="col"><button class="btn btn-danger">Giỏ hàng</button></div>
                            </div>


                        </div>
                    </div>
                </div>
                <!-- Card Sản phẩm 4 -->
                <div class="col-md-2">
                    <div class="card">
                        <img src="{{ URL::asset('images/sanpham.jpg')}}" class="card-img-top p-2" alt="Sản phẩm 1">
                        <div class="card-body p-2">
                            <b class="card-title">Balo Phi Hành Gia Vận Chuyển Chó Mèo</b>
                            <h6 class="text-primary">Tên Hãng SP</h6>

                            <div class="row justify-content-center">
                                <div class="col">
                                    <p class="card-text" style="margin-bottom:2px;color:#BBBBBB	;"><s>90,000 vnđ</s>
                                    </p>
                                    <p class="card-text text-danger" style="font-weight:bolder;font-size:18px;">
                                        75,000 vnđ</p>
                                </div>
                                <div class="col"><button class="btn btn-danger">Giỏ hàng</button></div>
                            </div>


                        </div>
                    </div>
                </div>
                <!-- Card Sản phẩm 5 -->
                <div class="col-md-2">
                    <div class="card">
                        <img src="{{ URL::asset('images/sanpham.jpg')}}" class="card-img-top p-2" alt="Sản phẩm 1">
                        <div class="card-body p-2">
                            <b class="card-title">Balo Phi Hành Gia Vận Chuyển Chó Mèo</b>
                            <h6 class="text-primary">Tên Hãng SP</h6>

                            <div class="row justify-content-center">
                                <div class="col">
                                    <p class="card-text" style="margin-bottom:2px;color:#BBBBBB	;"><s>90,000 vnđ</s>
                                    </p>
                                    <p class="card-text text-danger" style="font-weight:bolder;font-size:18px;">
                                        75,000 vnđ</p>
                                </div>
                                <div class="col"><button class="btn btn-danger">Giỏ hàng</button></div>
                            </div>


                        </div>
                    </div>
                </div>


                <!-- Thêm các card sản phẩm khác tương tự -->
            </div>
        </div>
    </section>
    <section class="container-fluid justify-content-center p-5">
        <div class="row justify-content-center">
            <div class="col-md-2">
                <div class="bg-warning shopchochocho pb-5 mb-3">
                    <div class="shopchocho p-1" style="background-color:#DD0000;">
                        <div class="row align-items-center">
                            <div class="col-md-3">
                                <img src="{{ URL::asset('images/Hinh-icon-cho-Shiba.jpg')}}"
                                    style="object-fit: cover;width:100%" class="rounded-circle" alt="">
                            </div>
                            <div class="col-md-9 text-white">
                                <p class="mb-0">SHOP CHO CHÓ</p>
                            </div>
                        </div>

                    </div>
                    <ul class="pt-3">
                        <li><a href="">Thức ăn</a></li>
                        <li><a href="">Thuốc cho chó</a></li>
                        <li><a href="">Phụ kiện cho chó</a></li>
                    </ul>

                </div>
                <div class="bg-warning shopchochocho pb-5 mb-3">
                    <div class=" shopchocho p-1" style="background-color:#DD0000;">
                        <div class="row align-items-center">
                            <div class="col-md-3">
                                <img src="{{ URL::asset('images/Hinh-icon-cho-Shiba.jpg')}}"
                                    style="object-fit: cover;width:100%" class="rounded-circle" alt="">
                            </div>
                            <div class="col-md-9 text-white">
                                <p class="mb-0">SHOP CHO CHÓ</p>
                            </div>
                        </div>

                    </div>
                    <ul class="pt-3">
                        <li><a href="">Thức ăn</a></li>
                        <li><a href="">Thuốc cho chó</a></li>
                        <li><a href="">Phụ kiện cho chó</a></li>
                    </ul>

                </div>
                <div class="bg-warning shopchochocho pb-5 mb-3">
                    <div class="shopchocho p-1" style="background-color:#DD0000;">
                        <div class="row align-items-center">
                            <div class="col-md-3">
                                <img src="{{ URL::asset('images/Hinh-icon-cho-Shiba.jpg')}}"
                                    style="object-fit: cover;width:100%" class="rounded-circle" alt="">
                            </div>
                            <div class="col-md-9 text-white">
                                <p class="mb-0">SHOP CHO MÈO</p>
                            </div>
                        </div>

                    </div>
                    <ul class="pt-3">
                        <li><a href="">Thức ăn</a></li>
                        <li><a href="">Thuốc cho mèo</a></li>
                        <li><a href="">Phụ kiện cho mèo</a></li>
                    </ul>

                </div>
                <div class="bg-warning shopchochocho pb-5 mb-3">
                    <div class="shopchocho p-1" style="background-color:#DD0000;">
                        <div class="row align-items-center">
                            <div class="col-md-3">
                                <img src="{{ URL::asset('images/Hinh-icon-cho-Shiba.jpg')}}"
                                    style="object-fit: cover;width:100%" class="rounded-circle" alt="">
                            </div>
                            <div class="col-md-9 text-white">
                                <p class="mb-0">SHOP CHO MÈO</p>
                            </div>
                        </div>

                    </div>
                    <ul class="pt-3">
                        <li><a href="">Thức ăn</a></li>
                        <li><a href="">Thuốc cho mèo</a></li>
                        <li><a href="">Phụ kiện cho mèo</a></li>
                    </ul>

                </div>
            </div>
            <div class="col-md-8">
                <div class="row justify-content-center">
                    <div class="col-md-3 p-2">
                        <div class="card">
                            <img src="{{ URL::asset('images/sanpham.jpg')}}" class="card-img-top p-2" alt="Sản phẩm 1">
                            <div class="card-body p-2">
                                <b class="card-title">Balo Phi Hành Gia Vận Chuyển Chó Mèo</b>
                                <h6 class="text-primary">Tên Hãng SP</h6>

                                <div class="row justify-content-center">
                                    <div class="col">
                                        <p class="card-text" style="margin-bottom:2px;color:#BBBBBB	;"><s>90,000
                                                vnđ</s></p>
                                        <p class="card-text text-danger" style="font-weight:bolder;font-size:18px;">
                                            75,000 vnđ</p>
                                    </div>
                                    <div class="col"><button class="btn btn-danger">Giỏ hàng</button></div>
                                </div>


                            </div>
                        </div>

                    </div>
                    <div class="col-md-3 p-2">
                        <div class="card">
                            <img src="{{ URL::asset('images/sanpham.jpg')}}" class="card-img-top p-2" alt="Sản phẩm 1">
                            <div class="card-body p-2">
                                <b class="card-title">Balo Phi Hành Gia Vận Chuyển Chó Mèo</b>
                                <h6 class="text-primary">Tên Hãng SP</h6>

                                <div class="row justify-content-center">
                                    <div class="col">
                                        <p class="card-text" style="margin-bottom:2px;color:#BBBBBB	;"><s>90,000
                                                vnđ</s></p>
                                        <p class="card-text text-danger" style="font-weight:bolder;font-size:18px;">
                                            75,000 vnđ</p>
                                    </div>
                                    <div class="col"><button class="btn btn-danger">Giỏ hàng</button></div>
                                </div>


                            </div>
                        </div>

                    </div>
                    <div class="col-md-3 p-2">
                        <div class="card">
                            <img src="{{ URL::asset('images/sanpham.jpg')}}" class="card-img-top p-2" alt="Sản phẩm 1">
                            <div class="card-body p-2">
                                <b class="card-title">Balo Phi Hành Gia Vận Chuyển Chó Mèo</b>
                                <h6 class="text-primary">Tên Hãng SP</h6>

                                <div class="row justify-content-center">
                                    <div class="col">
                                        <p class="card-text" style="margin-bottom:2px;color:#BBBBBB	;"><s>90,000
                                                vnđ</s></p>
                                        <p class="card-text text-danger" style="font-weight:bolder;font-size:18px;">
                                            75,000 vnđ</p>
                                    </div>
                                    <div class="col"><button class="btn btn-danger">Giỏ hàng</button></div>
                                </div>


                            </div>
                        </div>

                    </div>
                    <div class="col-md-3 p-2">
                        <div class="card">
                            <img src="{{ URL::asset('images/sanpham.jpg')}}" class="card-img-top p-2" alt="Sản phẩm 1">
                            <div class="card-body p-2">
                                <b class="card-title">Balo Phi Hành Gia Vận Chuyển Chó Mèo</b>
                                <h6 class="text-primary">Tên Hãng SP</h6>

                                <div class="row justify-content-center">
                                    <div class="col">
                                        <p class="card-text" style="margin-bottom:2px;color:#BBBBBB	;"><s>90,000
                                                vnđ</s></p>
                                        <p class="card-text text-danger" style="font-weight:bolder;font-size:18px;">
                                            75,000 vnđ</p>
                                    </div>
                                    <div class="col"><button class="btn btn-danger">Giỏ hàng</button></div>
                                </div>


                            </div>
                        </div>

                    </div>
                    <div class="col-md-3 p-2">
                        <div class="card">
                            <img src="{{ URL::asset('images/sanpham.jpg')}}" class="card-img-top p-2" alt="Sản phẩm 1">
                            <div class="card-body p-2">
                                <b class="card-title">Balo Phi Hành Gia Vận Chuyển Chó Mèo</b>
                                <h6 class="text-primary">Tên Hãng SP</h6>

                                <div class="row justify-content-center">
                                    <div class="col">
                                        <p class="card-text" style="margin-bottom:2px;color:#BBBBBB	;"><s>90,000
                                                vnđ</s></p>
                                        <p class="card-text text-danger" style="font-weight:bolder;font-size:18px;">
                                            75,000 vnđ</p>
                                    </div>
                                    <div class="col"><button class="btn btn-danger">Giỏ hàng</button></div>
                                </div>


                            </div>
                        </div>

                    </div>
                    <div class="col-md-3 p-2">
                        <div class="card">
                            <img src="{{ URL::asset('images/sanpham.jpg')}}" class="card-img-top p-2" alt="Sản phẩm 1">
                            <div class="card-body p-2">
                                <b class="card-title">Balo Phi Hành Gia Vận Chuyển Chó Mèo</b>
                                <h6 class="text-primary">Tên Hãng SP</h6>

                                <div class="row justify-content-center">
                                    <div class="col">
                                        <p class="card-text" style="margin-bottom:2px;color:#BBBBBB	;"><s>90,000
                                                vnđ</s></p>
                                        <p class="card-text text-danger" style="font-weight:bolder;font-size:18px;">
                                            75,000 vnđ</p>
                                    </div>
                                    <div class="col"><button class="btn btn-danger">Giỏ hàng</button></div>
                                </div>


                            </div>
                        </div>

                    </div>
                    <div class="col-md-3 p-2">
                        <div class="card">
                            <img src="{{ URL::asset('images/sanpham.jpg')}}" class="card-img-top p-2" alt="Sản phẩm 1">
                            <div class="card-body p-2">
                                <b class="card-title">Balo Phi Hành Gia Vận Chuyển Chó Mèo</b>
                                <h6 class="text-primary">Tên Hãng SP</h6>

                                <div class="row justify-content-center">
                                    <div class="col">
                                        <p class="card-text" style="margin-bottom:2px;color:#BBBBBB	;"><s>90,000
                                                vnđ</s></p>
                                        <p class="card-text text-danger" style="font-weight:bolder;font-size:18px;">
                                            75,000 vnđ</p>
                                    </div>
                                    <div class="col"><button class="btn btn-danger">Giỏ hàng</button></div>
                                </div>


                            </div>
                        </div>

                    </div>
                    <div class="col-md-3 p-2">
                        <div class="card">
                            <img src="{{ URL::asset('images/sanpham.jpg')}}" class="card-img-top p-2" alt="Sản phẩm 1">
                            <div class="card-body p-2">
                                <b class="card-title">Balo Phi Hành Gia Vận Chuyển Chó Mèo</b>
                                <h6 class="text-primary">Tên Hãng SP</h6>

                                <div class="row justify-content-center">
                                    <div class="col">
                                        <p class="card-text" style="margin-bottom:2px;color:#BBBBBB	;"><s>90,000
                                                vnđ</s></p>
                                        <p class="card-text text-danger" style="font-weight:bolder;font-size:18px;">
                                            75,000 vnđ</p>
                                    </div>
                                    <div class="col"><button class="btn btn-danger">Giỏ hàng</button></div>
                                </div>


                            </div>
                        </div>

                    </div>
                    <div class="col-md-3 p-2">
                        <div class="card">
                            <img src="{{ URL::asset('images/sanpham.jpg')}}" class="card-img-top p-2" alt="Sản phẩm 1">
                            <div class="card-body p-2">
                                <b class="card-title">Balo Phi Hành Gia Vận Chuyển Chó Mèo</b>
                                <h6 class="text-primary">Tên Hãng SP</h6>

                                <div class="row justify-content-center">
                                    <div class="col">
                                        <p class="card-text" style="margin-bottom:2px;color:#BBBBBB	;"><s>90,000
                                                vnđ</s></p>
                                        <p class="card-text text-danger" style="font-weight:bolder;font-size:18px;">
                                            75,000 vnđ</p>
                                    </div>
                                    <div class="col"><button class="btn btn-danger">Giỏ hàng</button></div>
                                </div>


                            </div>
                        </div>

                    </div>
                    <div class="col-md-3 p-2">
                        <div class="card">
                            <img src="{{ URL::asset('images/sanpham.jpg')}}" class="card-img-top p-2" alt="Sản phẩm 1">
                            <div class="card-body p-2">
                                <p class="card-title">Balo Phi Hành Gia Vận Chuyển Chó Mèo</b>
                                <h6 class="text-primary">Tên Hãng SP</h6>

                                <div class="row justify-content-center">
                                    <div class="col">
                                        <p class="card-text" style="margin-bottom:2px;color:#BBBBBB	;"><s>90,000
                                                vnđ</s></p>
                                        <p class="card-text text-danger" style="font-weight:bolder;font-size:18px;">
                                            75,000 vnđ</p>
                                    </div>
                                    <div class="col"><button class="btn btn-danger">Giỏ hàng</button></div>
                                </div>


                            </div>
                        </div>

                    </div>
                    <div class="col-md-3 p-2">
                        <div class="card">
                            <img src="{{ URL::asset('images/sanpham.jpg')}}" class="card-img-top p-2" alt="Sản phẩm 1">
                            <div class="card-body p-2">
                                <b class="card-title">Balo Phi Hành Gia Vận Chuyển Chó Mèo</b>
                                <h6 class="text-primary">Tên Hãng SP</h6>

                                <div class="row justify-content-center">
                                    <div class="col">
                                        <p class="card-text" style="margin-bottom:2px;color:#BBBBBB	;"><s>90,000
                                                vnđ</s></p>
                                        <p class="card-text text-danger" style="font-weight:bolder;font-size:18px;">
                                            75,000 vnđ</p>
                                    </div>
                                    <div class="col"><button class="btn btn-danger">Giỏ hàng</button></div>
                                </div>


                            </div>
                        </div>

                    </div>
                    <div class="col-md-3 p-2">
                        <div class="card">
                            <img src="{{ URL::asset('images/sanpham.jpg')}}" class="card-img-top p-2" alt="Sản phẩm 1">
                            <div class="card-body p-2">
                                <b class="card-title">Balo Phi Hành Gia Vận Chuyển Chó Mèo</b>
                                <h6 class="text-primary">Tên Hãng SP</h6>

                                <div class="row justify-content-center">
                                    <div class="col">
                                        <p class="card-text" style="margin-bottom:2px;color:#BBBBBB	;"><s>90,000
                                                vnđ</s></p>
                                        <p class="card-text text-danger" style="font-weight:bolder;font-size:18px;">
                                            75,000 vnđ</p>
                                    </div>
                                    <div class="col"><button class="btn btn-danger">Giỏ hàng</button></div>
                                </div>


                            </div>
                        </div>

                    </div>
                    <div class="col-md-3 p-2">
                        <div class="card">
                            <img src="{{ URL::asset('images/sanpham.jpg')}}" class="card-img-top p-2" alt="Sản phẩm 1">
                            <div class="card-body p-2">
                                <b class="card-title">Balo Phi Hành Gia Vận Chuyển Chó Mèo</b>
                                <h6 class="text-primary">Tên Hãng SP</h6>

                                <div class="row justify-content-center">
                                    <div class="col">
                                        <p class="card-text" style="margin-bottom:2px;color:#BBBBBB	;"><s>90,000
                                                vnđ</s></p>
                                        <p class="card-text text-danger" style="font-weight:bolder;font-size:18px;">
                                            75,000 vnđ</p>
                                    </div>
                                    <div class="col"><button class="btn btn-danger">Giỏ hàng</button></div>
                                </div>


                            </div>
                        </div>

                    </div>
                    <div class="col-md-3 p-2">
                        <div class="card">
                            <img src="{{ URL::asset('images/sanpham.jpg')}}" class="card-img-top p-2" alt="Sản phẩm 1">
                            <div class="card-body p-2">
                                <b class="card-title">Balo Phi Hành Gia Vận Chuyển Chó Mèo</b>
                                <h6 class="text-primary">Tên Hãng SP</h6>

                                <div class="row justify-content-center">
                                    <div class="col">
                                        <p class="card-text" style="margin-bottom:2px;color:#BBBBBB	;"><s>90,000
                                                vnđ</s></p>
                                        <p class="card-text text-danger" style="font-weight:bolder;font-size:18px;">
                                            75,000 vnđ</p>
                                    </div>
                                    <div class="col"><button class="btn btn-danger">Giỏ hàng</button></div>
                                </div>


                            </div>
                        </div>

                    </div>
                    <div class="col-md-3 p-2">
                        <div class="card">
                            <img src="{{ URL::asset('images/sanpham.jpg')}}" class="card-img-top p-2" alt="Sản phẩm 1">
                            <div class="card-body p-2">
                                <b class="card-title">Balo Phi Hành Gia Vận Chuyển Chó Mèo</b>
                                <h6 class="text-primary">Tên Hãng SP</h6>

                                <div class="row justify-content-center">
                                    <div class="col">
                                        <p class="card-text" style="margin-bottom:2px;color:#BBBBBB	;"><s>90,000
                                                vnđ</s></p>
                                        <p class="card-text text-danger" style="font-weight:bolder;font-size:18px;">
                                            75,000 vnđ</p>
                                    </div>
                                    <div class="col"><button class="btn btn-danger">Giỏ hàng</button></div>
                                </div>


                            </div>
                        </div>

                    </div>
                    <div class="col-md-3 p-2">
                        <div class="card">
                            <img src="{{ URL::asset('images/sanpham.jpg')}}" class="card-img-top p-2" alt="Sản phẩm 1">
                            <div class="card-body p-2">
                                <b class="card-title">Balo Phi Hành Gia Vận Chuyển Chó Mèo</b>
                                <h6 class="text-primary">Tên Hãng SP</h6>

                                <div class="row justify-content-center">
                                    <div class="col">
                                        <p class="card-text" style="margin-bottom:2px;color:#BBBBBB	;"><s>90,000
                                                vnđ</s></p>
                                        <p class="card-text text-danger" style="font-weight:bolder;font-size:18px;">
                                            75,000 vnđ</p>
                                    </div>
                                    <div class="col"><button class="btn btn-danger">Giỏ hàng</button></div>
                                </div>


                            </div>
                        </div>

                    </div>
                    <!--  -->
                </div>
            </div>
        </div>
    </section>

    <!-- section banner -->
    <section class="container-fluid justify-content-center p-2">
        <div class="row mx-auto justify-content-center banner2">
            <div class="col-md-6">
                <div class="card">
                    <img src="{{ URL::asset('images/for-dog.png')}}" class="card-img-top" alt="Banner 1">
                    <!-- Thêm nội dung cho banner 1 nếu cần -->
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <img src="{{ URL::asset('images/for-dog.png')}}" class="card-img-top" alt="Banner 2">
                    <!-- Thêm nội dung cho banner 2 nếu cần -->
                </div>
            </div>

        </div>
    </section>

    <!-- section sp -->
    <section class="container-fluid justify-content-center p-5">
        <div class="row justify-content-center">
            <div class="col-md-2">
                <div class="bg-warning shopchochocho pb-5 mb-3">
                    <div class="shopchocho p-1" style="background-color:#DD0000;">
                        <div class="row align-items-center">
                            <div class="col-md-3">
                                <img src="{{ URL::asset('images/Hinh-icon-cho-Shiba.jpg')}}"
                                    style="object-fit: cover;width:100%" class="rounded-circle" alt="">
                            </div>
                            <div class="col-md-9 text-white">
                                <p class="mb-0">SẢN PHẨM LÚA GẠO</p>
                            </div>
                        </div>

                    </div>
                    <ul class="pt-3">
                        <li><a href="">Gạo</a></li>
                        <li><a href="">Nếp</a></li>
                    </ul>

                </div>
                <div class="bg-warning shopchochocho pb-5 mb-3">
                    <div class="shopchocho p-1" style="background-color:#DD0000;">
                        <div class="row align-items-center">
                            <div class="col-md-3">
                                <img src="{{ URL::asset('images/Hinh-icon-cho-Shiba.jpg')}}"
                                    style="object-fit: cover;width:100%" class="rounded-circle" alt="">
                            </div>
                            <div class="col-md-9 text-white">
                                <p class="mb-0">SẢN PHẨM LÚA GẠO</p>
                            </div>
                        </div>

                    </div>
                    <ul class="pt-3">
                        <li><a href="">Gạo</a></li>
                        <li><a href="">Nếp</a></li>
                    </ul>

                </div>
            </div>
            <div class="col-md-8">
                <div class="row justify-content-center">
                    <div class="col-md-3 p-2">
                        <div class="card">
                            <img src="{{ URL::asset('images/sanpham.jpg')}}" class="card-img-top p-2" alt="Sản phẩm 1">
                            <div class="card-body p-2">
                                <b class="card-title">Balo Phi Hành Gia Vận Chuyển Chó Mèo</b>
                                <h6 class="text-primary">Tên Hãng SP</h6>

                                <div class="row justify-content-center">
                                    <div class="col">
                                        <p class="card-text" style="margin-bottom:2px;color:#BBBBBB	;"><s>90,000
                                                vnđ</s></p>
                                        <p class="card-text text-danger" style="font-weight:bolder;font-size:18px;">
                                            75,000 vnđ</p>
                                    </div>
                                    <div class="col"><button class="btn btn-danger">Giỏ hàng</button></div>
                                </div>


                            </div>
                        </div>

                    </div>
                    <div class="col-md-3 p-2">
                        <div class="card">
                            <img src="{{ URL::asset('images/sanpham.jpg')}}" class="card-img-top p-2" alt="Sản phẩm 1">
                            <div class="card-body p-2">
                                <b class="card-title">Balo Phi Hành Gia Vận Chuyển Chó Mèo</b>
                                <h6 class="text-primary">Tên Hãng SP</h6>

                                <div class="row justify-content-center">
                                    <div class="col">
                                        <p class="card-text" style="margin-bottom:2px;color:#BBBBBB	;"><s>90,000
                                                vnđ</s></p>
                                        <p class="card-text text-danger" style="font-weight:bolder;font-size:18px;">
                                            75,000 vnđ</p>
                                    </div>
                                    <div class="col"><button class="btn btn-danger">Giỏ hàng</button></div>
                                </div>


                            </div>
                        </div>

                    </div>
                    <div class="col-md-3 p-2">
                        <div class="card">
                            <img src="{{ URL::asset('images/sanpham.jpg')}}" class="card-img-top p-2" alt="Sản phẩm 1">
                            <div class="card-body p-2">
                                <b class="card-title">Balo Phi Hành Gia Vận Chuyển Chó Mèo</b>
                                <h6 class="text-primary">Tên Hãng SP</h6>

                                <div class="row justify-content-center">
                                    <div class="col">
                                        <p class="card-text" style="margin-bottom:2px;color:#BBBBBB	;"><s>90,000
                                                vnđ</s></p>
                                        <p class="card-text text-danger" style="font-weight:bolder;font-size:18px;">
                                            75,000 vnđ</p>
                                    </div>
                                    <div class="col"><button class="btn btn-danger">Giỏ hàng</button></div>
                                </div>


                            </div>
                        </div>

                    </div>
                    <div class="col-md-3 p-2">
                        <div class="card">
                            <img src="{{ URL::asset('images/sanpham.jpg')}}" class="card-img-top p-2" alt="Sản phẩm 1">
                            <div class="card-body p-2">
                                <b class="card-title">Balo Phi Hành Gia Vận Chuyển Chó Mèo</b>
                                <h6 class="text-primary">Tên Hãng SP</h6>

                                <div class="row justify-content-center">
                                    <div class="col">
                                        <p class="card-text" style="margin-bottom:2px;color:#BBBBBB	;"><s>90,000
                                                vnđ</s></p>
                                        <p class="card-text text-danger" style="font-weight:bolder;font-size:18px;">
                                            75,000 vnđ</p>
                                    </div>
                                    <div class="col"><button class="btn btn-danger">Giỏ hàng</button></div>
                                </div>


                            </div>
                        </div>

                    </div>
                    <div class="col-md-3 p-2">
                        <div class="card">
                            <img src="{{ URL::asset('images/sanpham.jpg')}}" class="card-img-top p-2" alt="Sản phẩm 1">
                            <div class="card-body p-2">
                                <b class="card-title">Balo Phi Hành Gia Vận Chuyển Chó Mèo</b>
                                <h6 class="text-primary">Tên Hãng SP</h6>

                                <div class="row justify-content-center">
                                    <div class="col">
                                        <p class="card-text" style="margin-bottom:2px;color:#BBBBBB	;"><s>90,000
                                                vnđ</s></p>
                                        <p class="card-text text-danger" style="font-weight:bolder;font-size:18px;">
                                            75,000 vnđ</p>
                                    </div>
                                    <div class="col"><button class="btn btn-danger">Giỏ hàng</button></div>
                                </div>


                            </div>
                        </div>

                    </div>
                    <div class="col-md-3 p-2">
                        <div class="card">
                            <img src="{{ URL::asset('images/sanpham.jpg')}}" class="card-img-top p-2" alt="Sản phẩm 1">
                            <div class="card-body p-2">
                                <b class="card-title">Balo Phi Hành Gia Vận Chuyển Chó Mèo</b>
                                <h6 class="text-primary">Tên Hãng SP</h6>

                                <div class="row justify-content-center">
                                    <div class="col">
                                        <p class="card-text" style="margin-bottom:2px;color:#BBBBBB	;"><s>90,000
                                                vnđ</s></p>
                                        <p class="card-text text-danger" style="font-weight:bolder;font-size:18px;">
                                            75,000 vnđ</p>
                                    </div>
                                    <div class="col"><button class="btn btn-danger">Giỏ hàng</button></div>
                                </div>


                            </div>
                        </div>

                    </div>
                    <div class="col-md-3 p-2">
                        <div class="card">
                            <img src="{{ URL::asset('images/sanpham.jpg')}}" class="card-img-top p-2" alt="Sản phẩm 1">
                            <div class="card-body p-2">
                                <b class="card-title">Balo Phi Hành Gia Vận Chuyển Chó Mèo</b>
                                <h6 class="text-primary">Tên Hãng SP</h6>

                                <div class="row justify-content-center">
                                    <div class="col">
                                        <p class="card-text" style="margin-bottom:2px;color:#BBBBBB	;"><s>90,000
                                                vnđ</s></p>
                                        <p class="card-text text-danger" style="font-weight:bolder;font-size:18px;">
                                            75,000 vnđ</p>
                                    </div>
                                    <div class="col"><button class="btn btn-danger">Giỏ hàng</button></div>
                                </div>


                            </div>
                        </div>

                    </div>
                    <div class="col-md-3 p-2">
                        <div class="card">
                            <img src="{{ URL::asset('images/sanpham.jpg')}}" class="card-img-top p-2" alt="Sản phẩm 1">
                            <div class="card-body p-2">
                                <b class="card-title">Balo Phi Hành Gia Vận Chuyển Chó Mèo</b>
                                <h6 class="text-primary">Tên Hãng SP</h6>

                                <div class="row justify-content-center">
                                    <div class="col">
                                        <p class="card-text" style="margin-bottom:2px;color:#BBBBBB	;"><s>90,000
                                                vnđ</s></p>
                                        <p class="card-text text-danger" style="font-weight:bolder;font-size:18px;">
                                            75,000 vnđ</p>
                                    </div>
                                    <div class="col"><button class="btn btn-danger">Giỏ hàng</button></div>
                                </div>


                            </div>
                        </div>

                    </div>
                    <!--  -->
                </div>
            </div>
        </div>
    </section>

    <!-- section vattunongnghiep  -->
    <section class="container-fluid justify-content-center p-2">
        <div class="col-md-2 justify-content-center vattunongnghiep">
            <div class="shopchocho p-1" style="background-color:#DD0000;">
                <div class="row align-items-center">
                    <div class="col-md-3">
                        <img src="{{ URL::asset('images/Hinh-icon-cho-Shiba.jpg')}}"
                            style="object-fit: cover;width:100%" class="rounded-circle" alt="">
                    </div>
                    <div class="col-md-9 p-1 text-white">
                        <p class="mb-0">VẬT TƯ NÔNG NGHIỆP</p>
                    </div>
                </div>

            </div>

        </div>
        <div class="container-fluid p-4">
            <div class="row justify-content-center">
                <!-- Card Sản phẩm 1 -->
                <div class="col-md-2">
                    <div class="card">
                        <img src="{{ URL::asset('images/sanpham.jpg')}}" class="card-img-top p-2" alt="Sản phẩm 1">
                        <div class="card-body p-2">
                            <b class="card-title">Balo Phi Hành Gia Vận Chuyển Chó Mèo</b>
                            <h6 class="text-primary">Tên Hãng SP</h6>

                            <div class="row justify-content-center">
                                <div class="col">
                                    <p class="card-text" style="margin-bottom:2px;color:#BBBBBB	;"><s>90,000 vnđ</s>
                                    </p>
                                    <p class="card-text text-danger" style="font-weight:bolder;font-size:18px;">
                                        75,000 vnđ</p>
                                </div>
                                <div class="col"><button class="btn btn-danger">Giỏ hàng</button></div>
                            </div>


                        </div>
                    </div>
                </div>
                <!-- Card Sản phẩm 2 -->
                <div class="col-md-2">
                    <div class="card">
                        <img src="{{ URL::asset('images/sanpham.jpg')}}" class="card-img-top p-2" alt="Sản phẩm 1">
                        <div class="card-body p-2">
                            <b class="card-title">Balo Phi Hành Gia Vận Chuyển Chó Mèo</b>
                            <h6 class="text-primary">Tên Hãng SP</h6>

                            <div class="row justify-content-center">
                                <div class="col">
                                    <p class="card-text" style="margin-bottom:2px;color:#BBBBBB	;"><s>90,000 vnđ</s>
                                    </p>
                                    <p class="card-text text-danger" style="font-weight:bolder;font-size:18px;">
                                        75,000 vnđ</p>
                                </div>
                                <div class="col"><button class="btn btn-danger">Giỏ hàng</button></div>
                            </div>


                        </div>
                    </div>
                </div>
                <!-- Card Sản phẩm 3 -->
                <div class="col-md-2">
                    <div class="card">
                        <img src="{{ URL::asset('images/sanpham.jpg')}}" class="card-img-top p-2" alt="Sản phẩm 1">
                        <div class="card-body p-2">
                            <b class="card-title">Balo Phi Hành Gia Vận Chuyển Chó Mèo</b>
                            <h6 class="text-primary">Tên Hãng SP</h6>

                            <div class="row justify-content-center">
                                <div class="col">
                                    <p class="card-text" style="margin-bottom:2px;color:#BBBBBB	;"><s>90,000 vnđ</s>
                                    </p>
                                    <p class="card-text text-danger" style="font-weight:bolder;font-size:18px;">
                                        75,000 vnđ</p>
                                </div>
                                <div class="col"><button class="btn btn-danger">Giỏ hàng</button></div>
                            </div>


                        </div>
                    </div>
                </div>
                <!-- Card Sản phẩm 4 -->
                <div class="col-md-2">
                    <div class="card">
                        <img src="{{ URL::asset('images/sanpham.jpg')}}" class="card-img-top p-2" alt="Sản phẩm 1">
                        <div class="card-body p-2">
                            <b class="card-title">Balo Phi Hành Gia Vận Chuyển Chó Mèo</b>
                            <h6 class="text-primary">Tên Hãng SP</h6>

                            <div class="row justify-content-center">
                                <div class="col">
                                    <p class="card-text" style="margin-bottom:2px;color:#BBBBBB	;"><s>90,000 vnđ</s>
                                    </p>
                                    <p class="card-text text-danger" style="font-weight:bolder;font-size:18px;">
                                        75,000 vnđ</p>
                                </div>
                                <div class="col"><button class="btn btn-danger">Giỏ hàng</button></div>
                            </div>


                        </div>
                    </div>
                </div>
                <!-- Card Sản phẩm 5 -->
                <div class="col-md-2">
                    <div class="card">
                        <img src="{{ URL::asset('images/sanpham.jpg')}}" class="card-img-top p-2" alt="Sản phẩm 1">
                        <div class="card-body p-2">
                            <b class="card-title">Balo Phi Hành Gia Vận Chuyển Chó Mèo</b>
                            <h6 class="text-primary">Tên Hãng SP</h6>

                            <div class="row justify-content-center">
                                <div class="col">
                                    <p class="card-text" style="margin-bottom:2px;color:#BBBBBB	;"><s>90,000 vnđ</s>
                                    </p>
                                    <p class="card-text text-danger" style="font-weight:bolder;font-size:18px;">
                                        75,000 vnđ</p>
                                </div>
                                <div class="col"><button class="btn btn-danger">Giỏ hàng</button></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  -->
                <!-- Thêm các card sản phẩm khác tương tự -->
            </div>
            <!-- 

         -->
            <div class="container-fluid p-5">
                <div class="row justify-content-center">
                    <div class="col-md-2 partner-logo">
                        <img src="{{ URL::asset('images/logo-doi-tac.png')}} " alt="" class="card-img">
                    </div>
                    <div class="col-md-2 partner-logo">
                        <img src="{{ URL::asset('images/logo-doi-tac.png')}} " alt="" class="card-img">
                    </div>
                    <div class="col-md-2 partner-logo">
                        <img src="{{ URL::asset('images/logo-doi-tac.png')}} " alt="" class="card-img">
                    </div>
                    <div class="col-md-2 partner-logo">
                        <img src="{{ URL::asset('images/logo-doi-tac.png')}} " alt="" class="card-img">
                    </div>
                    <div class="col-md-2 partner-logo">
                        <img src="{{ URL::asset('images/logo-doi-tac.png')}} " alt="" class="card-img">
                    </div>

                </div>
            </div>
            <!--  -->


        </div>
    </section>
    <!-- -->
    <div class="container-fluid text-white" style="background-color:#DD0000;">
        <div class="row justify-content-around p-5">
            <div class="col-md-3">
                <div class="row justify-content-center">
                    <div class="col-md-3">
                        <img src="{{ URL::asset('images/icon-diamond.png') }}" style="width:100%;" alt="">
                    </div>
                    <div class="col-md-8">
                        <h5>UY TÍN HÀNG ĐẦU</h5>
                        <p>Lorem Ipsum chỉ đơn giản là một đoạn văn giả</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 justify-content-center">
                <div class="row justify-content-center">
                    <div class="col-md-3">
                        <img src="{{ URL::asset('images/logo-24-7.png') }}" style="width:100%;" alt="">
                    </div>
                    <div class="col-md-8">
                        <h5>HỖ TRỢ 24/7</h5>
                        <p>Lorem Ipsum chỉ đơn giản là một đoạn văn giả</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 justify-content-center">
                <div class="row justify-content-center">
                    <div class="col-md-3 ">
                        <img src="{{ URL::asset('images/thanhtoandedang.png') }}" style="width:100%;" alt="">
                    </div>
                    <div class="col-md-8">
                        <h5>THANH TOÁN DỄ DÀNG</h5>
                        <p>Lorem Ipsum chỉ đơn giản là một đoạn văn giả</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 justify-content-center">
                <div class="row justify-content-center">
                    <div class="col-md-3">
                        <img src="{{ URL::asset('images/pig2.png') }}" style="width:100%;" alt="">
                    </div>
                    <div class="col-md-8">
                        <h5>MUA HÀNG TIẾT KIỆM</h5>
                        <p>Lorem Ipsum chỉ đơn giản là một đoạn văn giả</p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <section class="container-fluid justify-content-center d-flex align-items-center pt-5 ">
        <div class="row justify-content-center pt-0 blog">
            <div class="col-md-6">
                <div class="container">
                    <div class="tittle-blog">
                        <h2 class="">
                            Tin Tức
                        </h2>
                        <p>Lorem chỉ đơn giản là một đoạn văn giả</p>
                    </div>
                    <!--  -->
                    <div class="blog-post row pb-2">
                        <div class="col-5">
                            <img src="{{URL::asset('images/dog.jpg')}}" alt="Blog Post Image"
                                class="img-fluid w-100 p-1">
                        </div>
                        <div class="col-7">
                            <div class="blog-post-content">
                                <h3>Blog Post Title 1</h3>
                                <p>This is the content of the blog post. You can add text, images, and other
                                    elements here.</p>
                            </div>
                        </div>
                    </div>
                    <!--  -->
                    <div class="blog-post row pb-2">
                        <div class="col-5">
                            <img src="{{URL::asset('images/dog.jpg')}}" alt="Blog Post Image"
                                class="img-fluid w-100 p-1">
                        </div>
                        <div class="col-7">
                            <div class="blog-post-content">
                                <h3>Blog Post Title 1</h3>
                                <p>This is the content of the blog post. You can add text, images, and other
                                    elements here.</p>
                            </div>
                        </div>
                    </div>
                    <!--  -->

                </div>
            </div>
            <div class="col-md-6">
                <div class="container">
                    <div class="tittle-blog">
                        <h2 class="">Cảm Nhận Khách Hàng</h2>
                        <p>Lorem chỉ đơn giản là một đoạn văn giả</p>
                    </div>
                    <div class="container bg-warning">
                        <!--  -->
                        <div class="owl-carousel">
                            <div class="item"><img src="{{URL::asset('images/kh.jpg')}}" alt="Avatar 1"></div>
                            <div class="item"><img src="path/to/avatar2.jpg" alt="Avatar 2"></div>
                            <!-- Thêm các item khác nếu cần -->
                        </div>
                        <!--  -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container-fluid justify-content-center d-flex align-items-center p-5 mt-5 video">
        <div class="row justify-content-center">
            <div class="col-md-3 p-3">
                <video class="img-fluid w-100" controls>
                    <source src="{{URL::asset('images/dog.mp4')}}" type="video/mp4">
                </video>
                <p>Lorem chỉ đơn giản là một đoạn văn giả, được dùng vào việc trình bày</p>
            </div>
            <div class="col-md-3 p-3">
                <video class="img-fluid w-100" controls>
                    <source src="{{URL::asset('images/dog.mp4')}}" type="video/mp4">
                </video>
                <p>Lorem chỉ đơn giản là một đoạn văn giả, được dùng vào việc trình bày</p>
            </div>
            <div class="col-md-4 p-3">
                <div class="fanpage bg-light">
                    <!-- Thay đổi đường dẫn sau data-href để thay đổi fanpage -->
                    <div class="fb-page" data-href="https://www.facebook.com/profile.php?id=61554409901863"
                        data-tabs="timeline" data-width="500" data-height="400" data-small-header="false"
                        data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                        <blockquote cite="https://www.facebook.com/profile.php?id=61554409901863"
                            class="fb-xfbml-parse-ignore">
                            <a href="https://www.facebook.com/profile.php?id=61554409901863">Facebook</a>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

</main>


@endsection

@section('footer')
@include('partials.footer')
@endsection