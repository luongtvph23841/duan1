<?php get_header('', 'Giỏ hàng') ?>

<div class="w-full pr-4 pl-4 bg-rose-200">
    <div class="h-[50px] pt-2">
        <h1 class="text-2xl">Giỏ hàng</h1>
    </div>
    <?php if (isset($cart)) { ?>
        <form action="" method="POST">
            <table class="w-[100%]">
                <tr class="bg-gray-200">
                    <th class="border-2 border-black ">ID</th>
                    <th class="border-2 border-black ">Tên sản phẩm</th>
                    <th class="border-2 border-black ">Hình ảnh sản phẩm</th>
                    <th class="border-2 border-black ">Số Lượng</th>
                    <th class="border-2 border-black ">Thành Tiền</th>
                    <th class="border-2 border-black ">Tổng</th>
                    <th class="border-2 border-black ">Thao tác</th>
                </tr>

                <?php foreach ($cart['buy'] as $item) { ?>
                    <tr>
                        <td class="border-2 border-black text-center "><?php echo $item['id'] ?></td>
                        <td class="border-2 border-black text-center "><?php echo $item['name'] ?></td>
                        <td class="border-2 border-black text-center w-[200px] h-[200px]"><img src="assets/media/products/<?php echo $item['image'] ?>" class="w-[100px] h-[100px] mx-auto"></td>
                        <td class="border-2 border-black text-center "><input type="number" min="1" max="30" name="qty[<?php echo $item['id'] ?>]" value="<?php echo $item['qty'] ?>"></td>
                        <td class="border-2 border-black text-center text-red-500 "><?php echo currency_format($item['price']) ?></td>
                        <td class="border-2 border-black text-center "><?php echo $item['sub_total'] ?></td>
                        <td class="border-2 border-black text-center "><a href="?role=client&mod=cart&action=delete&id=<?php echo $item['id'] ?>"><i class="fa fa-trash"></a></i></td>
                    </tr>
                <?php } ?>
            </table>
        </form>
    <?php } else {
        echo "Giỏ hàng trống";
    } ?>

    <div class="text-right pr-4 pt-4">
        <a href="?role=client&mod=pay">
            <p class=" ">Tổng: <?php echo currency_format($total); ?></p>
            <button class="bg-rose-400 w-[100px] rounded-md text-white text-base">Thanh Toán</button>
        </a>
    </div>

</div>

<?php get_footer() ?>