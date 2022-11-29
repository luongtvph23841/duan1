<?php get_header('', 'Giỏ hàng') ?>


<div class="h-auto">
    <div class="border-b-[1px]">
        <p class="text-[25px] leading-[40px] font-semibold uppercase m-[30px] text-center">giỏ hàng</p>
    </div>

    <div>
        <table class="w-[80%] mx-auto mt-10 border-b-[5px]">
            <?php if (isset($cart)) { ?>
                <tr class="bg-[#333333] text-white h-[50px] font-semibold text-[16px]">
                    <th class="">Tên sản phẩm</th>
                    <th class="">Hình ảnh sản phẩm</th>
                    <th class="">Giá</th>
                    <th class="">Số Lượng</th>
                    <th class="">Tổng</th>
                    <th class="">Thao tác</th>
                </tr>

                <?php foreach ($cart['buy'] as $item) { ?>
                    <tr class="border-b-[1px] text-center font-semibold	">
                        <td class="">
                            <?php echo $item['name_product'] ?>
                        </td>
                        <td class="w-[200px] h-[200px]">
                            <img src="assets/media/products/<?php echo $item['image'] ?>" class="w-[100px] h-[100px] mx-auto">
                        </td>
                        <td class="">
                            <?php echo currency_format($item['price']) ?>
                        </td>
                        <form method="POST" action="">
                            <td class="">
                                <div class="flex justify-center">
                                    <input type="input" min="1" name="qty[<?php echo $item['id'] ?>]" value="<?php echo $item['qty'] ?>" class="w-[50px] h-[32px] text-[16px] font-normal box-border text-center outline-none border">
                                </div>
                            </td>
                        </form>
                        <td class="text-red-500 font-semibold">
                            <?php echo currency_format($item['sub_total']) ?>
                        </td>
                        <td class="">
                            <a href="?role=client&mod=cart&action=delete&id=<?php echo $item['id'] ?>" class="text-[20px] hover:text-[#d2a98b]">
                                <i class="fa fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                <?php } ?>

            <?php } else {
                echo "Không có sản phẩm nào trong giỏ hàng";
            } ?>
        </table>

        <div class="flex justify-end w-[80%] h-[300px] mx-auto my-5">
            <div class="bg-[#333333] text-white w-[300px] h-[220px] font-semibold text-[16px]">
                <div class="m-10">
                    <h4 class="text-[20px] leading-[23px] capitalize mb-[30px] border-b-[1px]">Tóm tắt giỏ hàng</h4>
                    <p class="font-semibold leading-[23px] mb-2">
                        Tổng:<span class="float-right"><?php echo currency_format($total); ?></span>
                    </p>
                    <p class="font-semibold leading-[23px] mb-2 border-b-[1px]">
                        Giảm giá:<span class="float-right">0%</span>
                    </p>
                    <p class="font-semibold leading-[23px] mb-2">
                        Tổng cộng:<span class="float-right"><?php echo currency_format($total); ?></span>
                    </p>

                </div>

                <div class="float-right mt-1">
                    <a href="?role=client&mod=pay">
                        <button class="border-[2px] w-[150px] h-[50px] hover:bg-[#d2a98b]">
                            <p class="text-black">Thanh Toán</p>
                        </button>
                    </a>
                </div>

            </div>
        </div>

    </div>

</div>

<?php get_footer() ?>