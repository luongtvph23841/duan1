<?php get_header() ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>


</style>

<body>



    <div class="w-full pr-4 pl-4 bg-rose-200">
        <div class="h-[50px] pt-2">
            <h1 class="text-2xl">Giỏ Hàng</h1>
        </div>

        <table class="w-[100%]">
            <tr class="bg-gray-200">
                <th class="border-2 border-black ">Mã sản phẩm</th>
                <th class="border-2 border-black ">Hình ảnh sản phẩm</th>
                <th class="border-2 border-black ">Thương hiệu</th>
                <th class="border-2 border-black ">SiZe</th>
                <th class="border-2 border-black ">Số Lượng</th>
                <th class="border-2 border-black ">Thành Tiền</th>
                <th class="border-2 border-black ">Thao tác</th>
            </tr>
            <tr>
                <td class="border-2 border-black text-center  ">PH24073</td>
                <td class="border-2 border-black text-center w-[200px] h-[200px]"><img src="img/aa1.jpg" alt=""></td>
                <td class="border-2 border-black text-center ">ADIDAS</td>
                <td class="border-2 border-black text-center  "> M</td>
                <td class="border-2 border-black text-center ">2</td>
                <td class="border-2 border-black text-center text-red-500 ">100.000</td>
                <td class="border-2 border-black text-center "><i class="fa fa-trash"></i></td>
            </tr>
        </table>
        <div class="text-right pr-4 pt-4">
            <a href="?role=client&mod=pay">
                <p class=" ">Tổng</p>
                <button class="bg-rose-400 w-[100px] rounded-md text-white text-base">Thanh Toán</button>
            </a>
        </div>
    </div>
</body>

</html>
<?php get_footer() ?>