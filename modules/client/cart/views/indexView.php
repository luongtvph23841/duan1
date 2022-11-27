<?php get_header('', 'Giỏ hàng') ?>

<div class="w-full pr-4 pl-4 bg-rose-200">
    <div class="h-[50px] pt-2">
        <h1 class="text-2xl">Giỏ Hàng</h1>
    </div>

    <table class="w-[100%]">
        <tr class="bg-gray-200">
            <th class="border-2 border-black ">Tên sản phẩm</th>
            <th class="border-2 border-black ">Hình ảnh sản phẩm</th>
            <th class="border-2 border-black ">Thương hiệu</th>
            <th class="border-2 border-black ">Số Lượng</th>
            <th class="border-2 border-black ">Thành Tiền</th>
            <th class="border-2 border-black ">Thao tác</th>
        </tr>
        <tr>
            <td class="border-2 border-black text-center ">PH24073</td>
            <td class="border-2 border-black text-center w-[200px] h-[200px]"><img src="img/aa1.jpg" alt=""></td>
            <td class="border-2 border-black text-center ">ADIDAS</td>
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

<?php get_footer() ?>