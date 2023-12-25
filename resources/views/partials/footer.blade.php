<div class="footer container-fluid justify-content-center d-flex align-items-center p-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="col-md-8">
                    <h3 class="text-warning tittle-footer">NHÀ PHÂN PHỐI HIỆP THÀNH</h3>
                    <ul class="list-inline">
                        <li class="list-inline-item"><i class="fas fa-map-marker-alt"></i> Địa chỉ: 685 Nguyễn Xiển,
                            Long Thạnh Mỹ, Quận 9, TPHCM</li>
                        <li class="list-inline-item"><i class="fas fa-phone"></i>Điện thoại: 0909 179 979-028 896 1777
                        </li>
                        <li class="list-inline-item"><i class="fas fa-envelope"></i>Email: gianghiepan27051992@gmail.com
                        </li>
                        <li class="list-inline-item"><i class="fas fa-globe"></i> <a
                                href="https://www.example.com">www.thucungmrso.com</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 justify-content-center">
                <h5>CHÍNH SÁCH</h5>

                <ul class="list-inline">
                    <li><a class="text-white" href="/">Hướng dẫn mua hàng</a> </li>
                    <li><a class="text-white" href=""> Chính sách đổi trả</a></li>
                    <li><a class="text-white" href="">Chính sách sao hàng</a> </li>
                </ul>
                <ul class="list-inline">
                    <div class="row">

                        <li class="list-inline-item col-2 p-0"><a href="https://www.facebook.com/example"><img
                                    src="{{URL::asset('images/facebook.png')}}" alt=""></a></li>
                        <li class="list-inline-item col-2 p-0"><a href="https://plus.google.com/example"><img
                                    src="{{URL::asset('images/ggicon.png')}}" alt=""></a></li>
                        <li class="list-inline-item col-2 p-0"><a href="https://zalo.me/example"><img
                                    src="{{URL::asset('images/zalo.png')}}" alt=""></a></li>
                        <li class="list-inline-item col-2 p-0"><a href="https://www.youtube.com/example"><img
                                    src="{{URL::asset('images/youtube.png')}}" alt=""></a></li>
                </ul>
            </div>
            <div class="col-md-3 justify-content-center">

                <div class="col-md-12">
                    <h5>ĐƯỜNG DÂY NÓNG</h5>
                    <div class="row">
                        <div class="col-3"><img src="{{URL::asset('images/phone.png')}}" class="w-100" alt=""></div>
                        <div class="col p-2">
                            <h5>0909 179 979 <br> 0283 896 1777</h5>
                        </div>
                    </div>

                    <h5>THANH TOÁN</h5>
                    <ul class="list-inline">
                        <div class="row">

                            <li class="list-inline-item col-2 p-0"><a href="https://www.facebook.com/example"><img
                                        src="{{URL::asset('images/mastercard.png')}}" alt=""></a></li>
                            <li class="list-inline-item col-2 p-0"><a href="https://plus.google.com/example"><img
                                        src="{{URL::asset('images/visaa.png')}}" alt=""></a></li>
                            <li class="list-inline-item col-2 p-0"><a href="https://zalo.me/example"><img
                                        src="{{URL::asset('images/jcb.jpg')}}" alt=""></a></li>
                        </div>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    </div>
    <footer class="container-fluid bg-warning text-danger text-center py-2">
        <div class="row justify-content-around align-items-center">
            <p> &copy; Hiệp Thành All rights reserved. Design by BlueWeb 2023</p>
            <p>Online: 9 | Tuần: 27 | Tổng truy cập: 578515</p>
        </div>

    </footer>
    <!-- Các nội dung khác của trang web ở đây -->
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v12.0"
        nonce="your-nonce"></script>

    <!-- Thêm các thư viện Bootstrap JavaScript ở cuối trang -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    jQuery(document).ready(function() {
    jQuery('.add-to-cart-btn').on('click', function() {
        var productId = jQuery(this).data('product-id');
        var token = jQuery('meta[name="csrf-token"]').attr('content');

        jQuery.ajax({
            url: '/add-to-cart/' + productId,
            type: 'POST',
            data: {
                _token: token
            },
            success: function(response) {
                console.log(response);
            },
            error: function(xhr) {
                console.log(xhr);
            }
        });
    });
});

    // $(document).ready(function() {
    //     $('.add-to-cart-btn').on('click', function() {
    //         // Lấy ID sản phẩm từ thuộc tính data
    //         var productId = $(this).data('product-id');

    //         // Gửi yêu cầu POST đến route Laravel
    //         $.post('/add-to-cart/' + productId, function(response) {
    //             // Xử lý phản hồi từ server nếu cần
    //             console.log(response);
    //         });
    //     });
    // });
</script>