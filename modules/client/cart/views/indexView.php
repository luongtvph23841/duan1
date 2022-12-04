<?php get_header('', 'Giỏ hàng'); ?>

<div class="h-auto mb-5">
    <div class="border-b-[1px]">
        <p class="text-[25px] leading-[40px] font-semibold uppercase m-[30px] text-center">giỏ hàng</p>
    </div>

    <div>
        <?php if (!empty($_SESSION['cart']['buy'])) { ?>
            <form method="POST" action="">
                <table class="w-[80%] mx-auto mt-10 border-b-[5px]">
                    <tr class="bg-[#333333] text-white h-[50px] font-semibold text-[16px]">
                        <th class="">ID</th>
                        <th class="">Tên sản phẩm</th>
                        <th class="">Hình ảnh sản phẩm</th>
                        <th class="">Giá</th>
                        <th class="">Số Lượng</th>
                        <th class="">Tổng</th>
                        <th class="">Thao tác</th>
                    </tr>

                    <?php foreach ($cart['buy'] as $item) { ?>
                        <tr class="border-b-[1px] text-center font-semibold	">
                            <td class="w-[200px]">
                                <input type="input" name="id_prod" readonly="true" value="<?php echo $item['id_product'] ?>" class="w-[50px] h-[32px] text-[16px] font-normal box-border text-center outline-none">
                            </td>

                            <td class="w-[200px]">
                                <?php echo $item['name_product'] ?>
                            </td>

                            <td class="w-[200px] h-[200px]">
                                <img src="assets/media/products/<?php echo $item['image'] ?>" class="w-[100px] h-[100px] mx-auto">
                            </td>

                            <td class="w-[200px]">
                                <?php echo currency_format($item['price']) ?>
                            </td>

                            <td class="w-[200px]">
                                <div class="flex justify-center">
                                    <input type="number" min="1" name="quantity[<?php echo $item['id_product'] ?>]" value="<?php echo $item['quantity'] ?>" class="w-[50px] h-[32px] text-[16px] font-normal box-border text-center outline-none border">
                                </div>
                            </td>

                            <td class="text-red-500 font-semibold w-[200px]">
                                <?php echo currency_format($item['sub_total']) ?>
                            </td>

                            <td class="w-[200px]">
                                <a href="?role=client&mod=cart&action=delete&id=<?php echo $item['id_product'] ?>" class="text-[20px] hover:text-[#d2a98b]">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                    <?php } ?>
                </table>

                <div class="flex justify-center">
                    <button type="submit" class="border-[2px] w-[150px] h-[50px] hover:bg-[#d2a98b] m-5">Cập nhật giỏ hàng</button>
                    <button type="submit" class="border-[2px] w-[150px] h-[50px] hover:bg-[#d2a98b] m-5">
                        <a href="?role=client&mod=cart&action=removecart">Xóa giỏ hàng</a>
                    </button>
                </div>
            </form>

            <div class="w-[90%]">
                <div class="flex justify-end">
                    <div class="w-[300px] h-[220px] bg-[#fffefb]">
                        <div class="p-5">
                            <p class="mt-2 text-[14px] text-[#222] font-normal">
                                Tổng tiền hàng:<span class="float-right"><?php echo currency_format($total); ?></span>
                            </p>

                            <p class="mt-2 text-[14px] text-[#222] font-normal">
                                Phí vận chuyển:<span class="float-right">0%</span>
                            </p>

                            <p class="mt-2 text-[14px] text-[#222] font-normal">
                                Tổng Thanh toán:<span class="float-right text-[red]"><?php echo currency_format($total); ?></span>
                            </p>
                        </div>

                        <div class="mt-5">
                            <a href="?role=client&mod=pay">
                                <button class="border-[2px] w-[150px] h-[50px] hover:bg-[#d2a98b] float-right m-5">
                                    <p class="text-black">Thanh toán</p>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        <?php } else { ?>
            <div class="text-[25px] leading-[40px] font-semibold uppercase m-[30px] text-center">
                <p>Không có sản phẩm nào trong giỏ hàng</p>
            </div>
        <?php } ?>
    </div>
</div>

<?php get_footer() ?>