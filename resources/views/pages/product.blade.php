@extends('layouts.master')

@section('title', 'Home')

@section('header')
    @include('partials.header')
@endsection

@section('content')
<main class="justify-content-center">
    <section class="container-fluid justify-content-center p-5 align-items-center">
        
        <div class="container-fluid ">
            <div class="row justify-content-center">
                <!-- Card Sản phẩm 1 -->
                @foreach($product as $pro)
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



                <!-- Thêm các card sản phẩm khác tương tự -->
            </div>
        </div>
    </section>
</main>
@endsection

@section('footer')
    @include('partials.footer')
@endsection