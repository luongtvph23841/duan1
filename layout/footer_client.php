<head>
    <link rel="stylesheet" href="footer.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .footer-distributed {
            background: pink;
            box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
            box-sizing: border-box;
            width: 100%;
            text-align: center;
            padding: 35px 30px;
        }

        .footer-distributed .footer-left,
        .footer-distributed .footer-center,
        .footer-distributed .footer-right {
            display: inline-block;
            vertical-align: top;
        }

        /* Footer left */
        .footer-distributed .footer-left {
            width: 40%;
            font-size: 20px;
        }

        /* Footer Center */
        .footer-distributed .footer-center {
            width: 35%;
            padding-top: 70px;
            font-size: 20px;
        }

        /* Footer Right */

        .footer-distributed .footer-right {
            width: 20%;
            padding-top: 70px;
            font-size: 20px;
        }
    </style>
</head>

<body>
    <footer>
        <footer class="footer-distributed">

            <div class="footer-left" style="text-align: left; padding:0 100px; ">
                <img src="assets/media/logos/logo-kaka.jpg" alt="">
                <b>Thông Tin Liên Hệ</b>
                <p> Số điện thoại: 0962138993</p>
                <p>Email: kakashop@gmail.com</p>
            </div>

            <div class="footer-center" style="text-align: left;">
                <b>Dịch Vụ Khách Hàng</b>
                <p>Chính sách bảo mật</p>
                <p>Cam kết chất lượng sản phẩm</p>
            </div>

            <div class="footer-right" style="text-align: left;">
                <b>Hỗ Trợ Khách Hàng</b>
                <p>Hướng dẫn mua hàng</p>
                <p>Hướng dẫn thanh toán</p>
                <p>Câu hỏi thường gặp</p>
                <p>Chính sách đổi trả</p>
                <p>Chính sách giao hàng</p>
            </div>
        </footer>
</body>

</html>