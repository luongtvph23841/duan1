<?php get_header() ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin sản phẩm</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        * {
            padding: 0px;
            margin: 0px;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        .bg-pink {
            background-color: #FFC0CB !important;
        }

        .bg-blue1 {
            background-color: #6594C0 !important;
        }

        .bg-blue2 {
            background-color: #F0F8FF !important;
        }

        header {
            height: 175px;
            background-color: #FFC0CB;
        }

        .header-top {
            width: 1024px;
            height: 80px;
            margin: auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
            border-bottom: 1px solid #808080;
        }

        .logo {
            width: 160px;
            height: 60px;
        }

        header .logo img {
            height: 100%;
            width: 100%;
            object-fit: cover;
        }

        .find {
            /* background-color: red; */
            width: 416px;
            height: 39px;
            /* margin: auto; */
            display: flex;
            align-items: center;

        }

        .find button {
            background: none;
            border: none;
        }

        .find button i {
            left: 70px;
            top: 55px;
            margin-left: -50px;

        }

        .icon {
            display: flex;
            justify-content: flex-end;
            align-items: center;
        }

        .menu>ul>li>i {
            font-size: 25px;

        }

        .menu>ul>li>a {
            text-decoration: none;
            font-size: 16px;
            font-family: inter;
            line-height: 20px;
            padding-left: 7px;
        }

        .fa-cart-shopping {
            color: green;
        }

        .booklist>i.fa-solid.fa-address-book {
            color: rgb(0, 251, 255);
        }

        .phone {
            width: 160px;
            height: 35px;
            background-color: #D9D9D9;
            border-radius: 30px 0px 0px 30px;
        }


        .phone button {
            border-radius: 30px;
            width: 35px;
            height: 35px;
            border: none;

        }

        .phone a {
            text-decoration: none;
            color: #000000;
            margin-left: 10px;
        }

        .booklist i {
            font-size: 30px;
            border-left: 2px solid #808080;
            margin-left: 15px;
        }


        .find input {
            width: 416px;
            height: 39px;
            border-radius: 30px;
        }

        nav {
            margin: 30px;
        }

        .menu {
            width: 1024px;
            height: 40px;
            display: flex;
            margin: auto;
        }

        .menu>ul {
            list-style: none;
            display: flex;
            align-items: center;
        }

        .menu>ul>li {
            margin: auto 20px;
        }

        .menu>ul>li:nth-child(1) {
            margin: 0;
            margin-right: 20px;
        }


        .menu>ul>li>a {
            color: #fff;
        }

        .menu>ul>li>ul>li>a>i {
            font-size: 13px;
            margin: 0 10px 0 0;
        }

        .menu>ul>li>ul>li>a {
            text-decoration: none;
            font-family: 'Inter';
            font-style: normal;
            font-weight: 400;
            font-size: 17px;
            line-height: 19px;
            color: #fff;
            margin-left: 5px;
        }

        .menu>ul>li>ul>li:hover>a {
            color: #DB7093;
        }

        .menu-level {
            display: none;
            position: absolute;
            top: 15px;
            border: none;
            background-color: #FFC0CB;
            width: 200px;
            height: 100px;
            list-style: none;
            margin-left: 10px;
            position: absolute;
            border: 1px solid #fff;
            top: 25px;
            z-index: 1;
        }

        .menu>ul>li>ul>li {
            padding: 5px;
        }

        .menu>ul>li {
            position: relative;
            cursor: pointer;
        }

        .menu>ul>li:hover>ul {
            display: block;
        }

        /* main */
        .main {
            width: 100%;
            height: auto;
        }

        .main .back {
            background-image: url('Images/back.png');
            background-size: cover;
            height: 850px;
            border: 1px solid #fff;
        }

        .main .main-top {
            margin-top: 10px;
            margin-bottom: 10px;
        }

        .main .main-top p {
            padding-left: 20px;
            font-family: 'Inter';
            font-style: normal;
            font-weight: 400;
            font-size: 16px;
            line-height: 19px;
            color: #FCA2C0;
            border-bottom: 1px solid #808080;
        }

        .main .back .change-password {
            border: 1px solid #000000;
            width: 371px;
            height: 379px;
            text-align: center;
            margin-left: auto;
            margin-right: auto;
            background: #FFFFFF;
            border-radius: 5px;
            opacity: 0.6;
        }

        .change-password {
            margin-top: 100px;
        }

        .main .back .change-password .top {
            border-bottom: 1px solid #000000;
            width: 345.01px;
            margin-left: auto;
            margin-right: auto;
        }

        .main .back .change-password .top p {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 500;
            font-size: 16px;
            line-height: 19px;
        }

        .main .back .change-password .form input {
            border: none;
            border-bottom: 1px solid #000000;
            width: 300px;
            padding-top: 20px;
        }

        .main .back .change-password .bottom {
            padding-top: 20px;
        }

        .main .back .change-password .bottom button {
            background: #FFC0CB;
            border-radius: 3px;
            border: none;
            width: 83px;
            height: 26px;
        }

        /* footer */
        footer {
            height: 275px;
            background-color: #FCA2C0;
            margin-top: 10px;
        }

        .footer1 {
            float: left;
            margin-top: -80px;
        }

        .footer1 img {
            width: 218px;
            height: 122;
            padding-left: 10px;
            margin-top: 10px;
        }

        .footer1 p {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 500;
            font-size: 16px;
            line-height: 19px;
            color: #FFFFFF;
            padding-left: 50px;
        }

        .footer p {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 700;
            font-size: 16px;
            line-height: 19px;
            color: #ffffff;
        }

        .footer a {
            text-decoration: none;
            font-family: 'Inter';
            font-style: normal;
            font-weight: 400;
            font-size: 16px;
            line-height: 19px;
            color: #ffffff;
        }

        .footer2 {
            padding-top: 100px;
            padding-left: 300px;
        }

        .footer2 p {
            padding-bottom: 20px;
        }

        .footer3 {
            margin-left: 800px;
            margin-top: -90px;
        }

        .footer3 p {
            padding-bottom: 20px;
        }

        .footer4 {
            margin-left: 1200px;
            margin-top: -70px;
        }

        .footer4 p {
            padding-bottom: 20px;
        }
    </style>
</head>

<body>


    <p class="text-[#F39C12] mt-3 ml-3">
        Sản Phẩm > Tính Chất Cô Đọng Dưỡng Da Vita-C ToTal Care Ampule Newland
    </p>
    <hr>
    <section class="pro-info w-[812px] mx-auto mt-10">
        <div class="info flex ">
            <div class="image w-[226px] h-[180px] border border-[#000000] rounded-[40px]">
                <img class="w-[133px] h-[141px] mx-auto mt-5" src="assets/media/products/19.png" alt="">
                <h4 class="font-[600] border-b-2 border-[#000000] mt-5 ">
                    Sản Phẩm Liên Quan
                </h4>
                <div class="sub-image mt-5 flex space-x-[20px]">
                    <img class="w-[64px] h-[48px] border border-[#000000] p-[10px]" src="assets/media/products/19.png" alt="">
                    <img class="w-[64px] h-[48px] border border-[#000000] p-[10px]" src="assets/media/products/19.png" alt="">
                    <img class="w-[64px] h-[48px] border border-[#000000] p-[10px]" src="assets/media/products/19.png" alt="">
                </div>
            </div>
            <div class="detail-info ml-[60px] leading-8">
                <section class="detail w-[400px] mx-auto mt-[5px]">
                    <p>
                        Tinh chất cô đặc dưỡng trắng da Vita-C Total Care Ampule NewLand
                    </p>
                    <div class="mt-6 bg-[] p-4 text-[]">
                        <p class="text-[]">
                            Vita-C Total Care Ampule có chứa 15% vitamin C nguyên
                            chất từ tế bào gốc thực vật có tác dụng kích hoạt các tế
                            bào da, ức chế sắc tố trên da làm mờ các đốm nâu hoặc cải thiện vùng da
                            bị ửng đỏ, tăng cường khả năng đàn hồi cho da, giúp tế bào da được phục hồi nhanh hơn.
                        </p>
                    </div>
                </section> <!-- End .detail-->
                <p class="">Giá: <span class="text-[]">2.690.000đ</span></p>
                <p>Số lượng:
                    <button>-</button>
                    <span>1</span>
                    <button>+</button>
                </p>
                <div class="price mt-[120px] text-left h-[25px] px-5 font-[400] text-[16px] bg-[] ">
                    <p class="">Total: <span class="text-[#FF0000]">2.690.000đ</span></p>
                </div>
                <button class=" mt-6 px-20 bg-[#F39C12] font-[400] text-[16px] rounded-[5px]">
                    Thêm vào giỏ hàng
                </button>
            </div>

        </div> <!-- End .info-->
    </section> <!-- End .pro-info-->
    <section class="detail w-[812px] mx-auto mt-[90px]">

        <div class="mt-6 bg-[#D9D9D9] p-4 text-[#FFFFFF]">
            <p class="detail mt-[200px] text-[#FFFFFF]">

            </p>
        </div>
    </section> <!-- End .detail-->

    <section class="comment w-[812px] mx-auto mt-[20px]">
        <h4 class="font-[600] w-[80px] border-b-2 border-[#000000]">
            Bình luận
        </h4>
        <form action="">
            <div class="mt-3 flex">
                <input class="bg-[#D9D9D9] w-[760px] py-[10px]" type="text">
                <button class="bg-[#D9D9D9] w-[50px] py-[10px] border-[#000000] border-l-[3px]" type="submit">Gửi</button>
            </div>

        </form>
    </section>



</body>

</html>
<?php get_footer() ?>