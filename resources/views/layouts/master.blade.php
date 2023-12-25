<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <!-- Thêm thư viện Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ URL::asset('css/app.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('js/app.js')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
        integrity="sha384-9zsk9MFuyLg0i+0KKEMpxEfQkPp3bjsG+YDxpCpRErnyNwO8vB4lLbJsmFM7a4xm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <!-- Thêm Owl Carousel CSS và JS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <!-- Thêm jQuery từ CDN (Chắc chắn là bạn thêm jQuery trước khi thêm Owl Carousel) -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <!-- Thêm Owl Carousel JS từ CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Playpen+Sans:wght@400;700&family=Pacifico&display=swap">
    <style>
    /* Reset các margins và paddings mặc định */
    body,
    html {
        margin: 0;
        padding: 0;
        height: 100%;
    }

    /* Chiếm toàn bộ chiều ngang của màn hình */
    body {
        width: 100%;
    }

    /* Tùy chỉnh style cho header */
    .header-container {
        background-color: #fff;
        color: #454545;
        padding: 20px;
        /* thêm padding cho header */
    }

    /* Tùy chỉnh style cho logo */
    .logo-container img {
        max-width: 100%;
        /* Đảm bảo logo không vượt quá kích thước của container */
    }

    /* Tùy chỉnh style cho địa chỉ và liên kết mạng xã hội */
    .address-container {
        color: #999999;
        font-size: 14px;
        margin-bottom: 5px;
        font-weight: 600;
    }

    /* Tùy chỉnh style cho menu danh mục */
    .category-menu-container {
        background-color: #f8f9fa;
        /* Màu nền của menu danh mục */
        padding: 10px;
        /* Thêm padding cho menu danh mục */
    }

    /* Đặt hướng của menu là ngang hàng */
    .flex-row {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
    }

    /* Căn giữa theo chiều dọc */
    .align-center {
        align-items: center;
    }

    /* Căn giữa theo chiều ngang */
    .justify-center {
        justify-content: center;
    }

    .navbar-nav .nav-item .nav-link {
        color: white;
    }

    .nav-item {
        transition: 0.3s;
    }

    .navbar-nav .nav-item:hover {
        background-color: #FFFF33;
        /* Màu nền khi hover */
    }

    .navbar-nav .nav-item:hover .nav-link {
        font-weight: bolder;
        color: #DD0000;
        /* Màu chữ khi hover */
    }

    .slanted-div {
        position: relative;
        width: 300px;
        /* Chiều rộng của khung div */
        height: 200px;
        /* Chiều cao của khung div */
        background-color: #007bff;
        /* Màu nền */
        color: #fff;
        /* Màu chữ */
        overflow: hidden;
        /* Ẩn phần cạnh nghiêng nếu nội dung vượt ra khỏi khung */
    }


    /* Tạo phần cạnh nghiêng bằng cách sử dụng pseudo-element */

    .slanted-div:before {
        content: "";
        position: absolute;
        top: 0;
        right: 0;
        width: 0;
        height: 0;
        transform: skewX(-20deg);
        /* Điều chỉnh cạnh nghiêng bằng cách thay đổi giá trị */
        border-color: transparent transparent transparent #fff;
        /* Màu nền của cạnh nghiêng */
        z-index: 1;
        /* Đặt lớp nghiêng lên trên nền */
    }


    /* Tùy chỉnh style cho nội dung bên trong khung div */

    .content-inside {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 2;
        /* Đặt lớp nội dung lên trên cùng */
    }
    </style>
</head>
<body>

    <header>
        @yield('header')
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        @yield('footer')
    </footer>

</body>
</html>